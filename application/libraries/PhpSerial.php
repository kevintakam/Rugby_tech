
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhpSerial {
    public $_device = null;
    public $_winDevice = null;
    public $_dHandle = null;
    public $_dState = 0; // Modifier la valeur initiale à 0 au lieu de SERIAL_DEVICE_NOTSET
    public $_buffer = "";
    public $_os = "";

    public $autoFlush = true;

    const SERIAL_DEVICE_NOTSET = 0;
    const SERIAL_DEVICE_SET = 1;
    const SERIAL_DEVICE_OPENED = 2;

    public function __construct() {
        // Reste du code inchangé
        setlocale(LC_ALL, "en_US");

        $sysName = php_uname();

        if (substr($sysName, 0, 5) === "Linux") {
            $this->_os = "linux";

            if ($this->_exec("stty") === 0) {
                register_shutdown_function([$this, "deviceClose"]);
            } else {
                log_message('error', "No stty available, unable to run.");
            }
        } elseif (substr($sysName, 0, 6) === "Darwin") {
            $this->_os = "osx";
            register_shutdown_function([$this, "deviceClose"]);
        } elseif (substr($sysName, 0, 7) === "Windows") {
            $this->_os = "windows";
            register_shutdown_function([$this, "deviceClose"]);
        } else {
            log_message('error', "Host OS is neither osx, linux nor windows, unable to run.");
            exit();
        }
    }

    
    public function deviceSet($device) {
        if ($this->_dState !== self::SERIAL_DEVICE_OPENED) {
            if ($this->_os === "linux") {
                if (preg_match("@^COM(\d+):?$@i", $device, $matches)) {
                    $device = "/dev/ttyS" . ($matches[1] - 1);
                }

                if ($this->_exec("stty -F " . $device) === 0) {
                    $this->_device = $device;
                    $this->_dState = self::SERIAL_DEVICE_SET;

                    return true;
                }
            } elseif ($this->_os === "osx") {
                if ($this->_exec("stty -f " . $device) === 0) {
                    $this->_device = $device;
                    $this->_dState = self::SERIAL_DEVICE_SET;

                    return true;
                }
            } elseif ($this->_os === "windows") {
                if (preg_match("@^COM(\d+):?$@i", $device, $matches)
                    && $this->_exec(exec("mode " . $device . " xon=on BAUD=9600")) === 0
                ) {
                    $this->_winDevice = "COM" . $matches[1];
                    $this->_device = "\\.com" . $matches[1];
                    $this->_dState = self::SERIAL_DEVICE_SET;

                    return true;
                }
            }

            log_message('error', "Specified serial port is not valid");
            return false;
        } else {
            log_message('error', "You must close your device before setting another one");
            return false;
        }
    }
    public function deviceOpen() {
        if ($this->_dState === self::SERIAL_DEVICE_OPENED) {
            trigger_error("The device is already opened", E_USER_NOTICE);
            return true;
        }
    
        if ($this->_dState === self::SERIAL_DEVICE_NOTSET) {
            trigger_error("The device must be set before opening", E_USER_WARNING);
            return false;
        }
    
        $handle = false;
    
        if ($this->_os === "windows") {
            $handle = fopen($this->_winDevice, $mode);
        } elseif ($this->_os === "linux" || $this->_os === "osx") {
            $handle = fopen($this->_device, $mode);
        }
    
        if ($handle === false) {
            trigger_error("Unable to open the device", E_USER_WARNING);
            return false;
        }
    
        $this->_dHandle = $handle;
        $this->_dState = self::SERIAL_DEVICE_OPENED;
    
        return true;
    }
    
    public function sendMessage($message) {
        if ($this->_dState !== self::SERIAL_DEVICE_OPENED) {
            log_message('warning', "Device must be opened to send message");
            return false;
        }

        $message .= "\n";

        if ($this->_os === "windows") {
            fputs($this->_dHandle, $message);
        } else {
            fwrite($this->_dHandle, $message);
        }

        if ($this->autoFlush) {
            $this->flush();
        }

        return true;
    }

    public function readPort() {
        if ($this->_dState !== self::SERIAL_DEVICE_OPENED) {
            log_message('warning', "Device must be opened to read port");
            return false;
        }

        $data = "";

        if ($this->_os === "windows") {
            while ($c = fgetc($this->_dHandle)) {
                $data .= $c;
                if ($c === "\n") {
                    break;
                }
            }
        } else {
            $data = stream_get_contents($this->_dHandle);
        }

        return $data;
    }

    public function flush() {
        if ($this->_dState !== self::SERIAL_DEVICE_OPENED) {
            log_message('warning', "Device must be opened to flush");
            return false;
        }

        if ($this->_os === "windows") {
            fflush($this->_dHandle);
            return true;
        } else {
            return false;
        }
    }

    public function deviceClose() {
        if ($this->_dState !== self::SERIAL_DEVICE_OPENED) {
            return true;
        }

        if ($this->_os === "windows") {
            fclose($this->_dHandle);
        } else {
            exec("stty -F " . $this->_device . " sane");
            fclose($this->_dHandle);
        }

        $this->_dState = self::SERIAL_DEVICE_SET;

        return true;
    }

    private function _exec($command) {
        $output = null;
        $return_var = null;

        exec($command, $output, $return_var);

        return $return_var;
    }

    // Reste du code inchangé
}





