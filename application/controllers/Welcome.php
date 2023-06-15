<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		    // Vérifier si l'utilisateur est connecté
		if (!$this->session->userdata('login')) {
				// Rediriger vers la page de connexion ou afficher un message d'erreur
				redirect('login'); // Remplacez 'auth/login' par l'URL de votre page de connexion
		}else{
		$this->load->model("connexion", "con");
		$id= $this->input->get('id');
		$data['joueurs']=$this->con->recuperertouslesjoueurs();
		$data['joueursid']=$this->con->recuperertouslesjoueurs($id);
		$data['challengesid']=$this->con->recupererchallengeparid($id);
		$data['challenges']=$this->con->recuperertousleschallenges();
		$data['squad_totals'] = $this->con->squad_total();
		$data['distancesM'] = $this->con->DistancesStatus();
		$variable = $this->input->post('variable');
		if($variable==1)
		{
			$this->insertiondonnee();
		}
	
		$this->load->view('header');
		$this->load->view('index.php',$data);
		$this->load->view('footer');}
	}

	public function challenge()
	{
		$this->load->view('header');
		$this->load->view('challenge.php');
		$this->load->view('footer');
	}


	public function insertiondonnee() {
		// Charger le modèle de données
		$this->load->model("connexion", "con");
		$id = $this->input->get('id');
	
		$data['joueurs'] = $this->con->recuperertouslesjoueurs();
		$data['joueursid'] = $this->con->recuperertouslesjoueurs($id);
		$data['challenges'] = $this->con->recuperertousleschallenges();
	
		$data['challengesid'] = $this->con->recupererchallengeparid($id);
		$data['distances'] = $this->con->recupererdistancesid(1);
		$data['squad_totals'] = $this->con->squad_total();
		$data['distancesM'] = $this->con->DistancesStatus();
		// Chemin vers le fichier à importer
		$filepath = 'donnees_arduino.txt'; // Remplacez par le chemin réel de votre fichier
		 // Vider la table "distance"
		 $this->con->truncateDistanceTable();
		// Lire le fichier
		$file = fopen($filepath, 'r');
		// Parcourir les lignes du fichier
		
		while (($data = fgetcsv($file)) !== FALSE) {
			$distance = '';
			$squad = '';
	
			// Parcourir les données de la ligne
			foreach ($data as $value) {
				if (strpos($value, 'Distance: ') !== false) {
					$distance = str_replace('Distance: ', '', $value);

				} elseif (strpos($value, 'Nombre de squats : ') !== false) {
					$squad = str_replace('Nombre de squats : ', '', $value);				
				}
				if ($distance >= 1 && $distance <= 3) {
					$statut = "mauvais";
				} else {
					$statut = "bon";
				}
			}
			// Insérer la distance et l'angle dans la table "distance"
			
			// Ajoutez ici la logique pour déterminer le statut en fonction de la distance et de l'angle
			$distance_id = $this->con->insertData($distance, $squad, $statut); // Insérer la distance, l'angle et récupérer l'ID inséré
			$distance_ids[] = $distance_id; // Ajouter l'ID de distance au tableau
			$this->con->insertDistanceSquad($id, $distance_id); // Insérer l'ID du joueur et l'ID de la distance dans la table distance_squad
		}
	
		// Fermer le fichier
		fclose($file);
	
		// Afficher les ID des distances insérées (pour vérification)

	}
	
	
}
