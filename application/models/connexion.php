<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class connexion extends CI_Model {
//foot

// creation compte et connexion


    public function verifierinfo($nom,$password){
    	return $this->db->select("nom_utilisateur,mot_de_passe")
    	                -> from("compte")
                        -> where("nom_utilisateur",$nom)
                        -> where("mot_de_passe",$password)
                        ->get()
                        ->result();

    }
    public function creercompte($nom,$prenom,$login,$password,$confirmpwd,$statut){
	    $this->db->insert('users', array('nom' => $nom,'prenom' => $prenom,'login' => $login ,'pwd' => $password ,'confirm_pwd' => $confirmpwd , 'statut'=> 0 ));}


}
