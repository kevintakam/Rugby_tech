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

	public function insertiondonnee(){
		// Charger le modèle de données
        $this->load->model("connexion","con");
		$data['joueurs']=$this->con->recuperertouslesjoueurs();
	
        // Chemin vers le fichier à importer
        $filepath = 'text.txt'; // Remplacez par le chemin réel de votre fichier

        // Lire le fichier
        $file = fopen($filepath, 'r');

        // Parcourir les lignes du fichier
        while (($data = fgetcsv($file)) !== FALSE) {
            // Insérer les données dans la base de données
			$dataarray[]=$data;
        }
		var_dump($dataarray);
        // Fermer le fichier
        fclose($file);

		// Insérer les données dans la base de données
		foreach ($dataarray as $value) {
			$distance = str_replace('Distance: ', '', $value[0]);

			  // Compter le nombre d'éléments dans la valeur de distance
			  $count = strlen($distance);

		  $this->con->insertData($distance);
	  }
	  $this->con->insertSquad($count);
        // Afficher un message de succès
        echo 'Données importées avec succès !';
	}
}
