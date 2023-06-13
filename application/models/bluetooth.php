
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bluetooth extends CI_Model {
    public function saveData($data) {
        // Enregistrer les données dans la table appropriée de votre base de données
        // Vous pouvez utiliser les fonctions de modèle CodeIgniter pour insérer les données

        // Exemple d'insertion de données dans une table "bluetooth_data"
        $this->db->insert('bluetooth', array('data' => $data));
    }
}
