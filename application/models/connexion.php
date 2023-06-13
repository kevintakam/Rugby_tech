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
    public function creercompte($nom,$prenom,$username,$password,$confirmpwd){
	    $this->db->insert('compte', array('nom' => $nom,'prenom' => $prenom,'nom_utilisateur' => $username,'mot_de_passe' => $password,'conf_mot_de_passe' => $confirmpwd  ));}
    //recuperer les joueurs
    public function recuperertouslesjoueurs(){
        return $this->db->select("*")
                       ->from("joueur J")                   
                        ->get() 
                         ->result(); 
                        
    }
    public function recupererjoueurparid($id){
        return $this->db->select("*")
                       ->from("joueur J")
                       ->where("J.id",$id)                
                        ->get() 
                         ->result(); 
                        
    }
    public function recuperertousleschallenges(){
        return $this->db->select("*")
                       ->from("challenge J")                   
                        ->get() 
                         ->result(); 
                        
    }
    public function recupererchallengeparid($id){
        return $this->db->select("*")
                       ->from("challenge C")
                       ->where("C.id",$id)               
                        ->get() 
                         ->result(); 
                        
    }
}
