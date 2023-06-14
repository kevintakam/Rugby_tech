<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/php_serial.php');

class Bluetooth extends CI_Controller {
    public function receiveData() {
        // Inclure la bibliothèque php_serial
        require(APPPATH.'libraries/php_serial.php');

        // Créer une instance de la classe phpSerial
        $serial = new phpSerial;

        // Définir le port série (COMx ou /dev/ttyXXX)
        $port = 'COM8';

        // Configurer les paramètres de la connexion série
        $serial->deviceSet($port);
        $serial->confBaudRate(9600);
        $serial->confParity('none');
        $serial->confCharacterLength(8);
        $serial->confStopBits(1);
        $serial->confFlowControl('none');

        // Ouvrir la connexion série
        $serial->deviceOpen();

        // Lire les données Bluetooth en boucle
        while (true) {
            // Lire une ligne de données Bluetooth
            $data = $serial->readLine();

            // Traiter les données (par exemple, les stocker en base de données)
            // ...
            // Votre code de traitement ici

            // Afficher les données à des fins de débogage
            echo "Données reçues : " . $data . "\n";
        }

        // Fermer la connexion série
        $serial->deviceClose();
    }
}
