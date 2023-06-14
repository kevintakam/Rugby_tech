<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/PhpSerial.php');

class Bluetooth extends CI_Controller {
    public function receiveData()
    {
        // Charger la bibliothèque PhpSerial
        $this->load->library('PhpSerial');

        // Créer une instance de PhpSerial
        $serial = new PhpSerial();

        // Définir le port série
        $serial->deviceSet('COM9');

        // Ouvrir la connexion série
        if ($serial->deviceOpen()) {
            // Envoyer un message
            $serial->sendMessage("Hello, Arduino!");

            // Lire les données du port série
            $data = $serial->readPort();

            // Fermer la connexion série
            $serial->deviceClose();

            // Afficher les données reçues
            echo "Données reçues : " . $data;
        } else {
            echo "Impossible d'ouvrir la connexion série.";
        }
    }
}
