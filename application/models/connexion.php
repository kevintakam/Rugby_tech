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
    public function insertData($distance, $squad, $statut)
    {
        
        // Insérer la valeur dans la table "distance" de la base de données
        $insertData = array(
            'distance' => $distance,
            'Nombre_squats' => $squad,
            'statut' => $statut
        );
        $this->db->insert('distance', $insertData);
        return $this->db->insert_id(); // Retourne l'ID de l'enregistrement inséré
    }
    public function truncateDistanceTable()
{
    // Vider la table "distance"
    $this->db->truncate('distance');
    $this->db->truncate('distance_squad');
}

    public function insertsquad($count)
    {
        // Insérer la valeur dans la table "squad" de la base de données
        $insertData = array(
            'nombre_squad' => $count
        );
        $this->db->insert('squad', $insertData);
        return $this->db->insert_id(); // Retourne l'ID de l'enregistrement inséré
    }
    public function insertDistanceSquad($id_joueur, $distance_ids)
{
    $id_joueur=1;

    $data = array(
        'idjoueur' => $id_joueur,
        'iddistance' => $distance_ids
    );

    $this->db->insert('distance_squad', $data);
    return $this->db->insert_id(); // Retourne l'ID de l'enregistrement insér
}

public function recupererdistance(){
    return $this->db->select("*")
                   ->from("distance d")               
                    ->get() 
                     ->result(); 
                    
}

public function recupererdistancesid($id_joueur){
    return $this->db->select("*")
                   ->from("distance d")               
                    ->get() 
                     ->result(); 
                        
}
public function recupererdistanceid($id_joueur) {
    return $this->db->select("ds.id,ds.idjoueur, COUNT(DISTINCT ds.iddistance) as nombre_distances, d.*")
        ->from("distance_squad ds")
        ->join("distance d", "d.id = ds.iddistance")
        ->where("ds.idjoueur", $id_joueur)
        ->group_by("ds.id, d.id")
        ->get()
        ->result();
}
public function squad_total()
{
    $this->db->select('COUNT(*) as total')
             ->from('distance')
             ->where('Nombre_squats >', 0);
    $query = $this->db->get();
    $result = $query->row();

    return $result->total;
}
public function DistancesStatus()
{
    $this->db->select('*')
             ->from('distance')
             ->where('statut', 'mauvais');
    $query = $this->db->get();
    $result = $query->result();

    return $result;
}
}
