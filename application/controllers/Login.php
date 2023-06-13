
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$data['error']='Vérifiez les informations saisies !!! ';
		$this->load->model("connexion", "con");
		$this->form_validation->set_rules('username','','required');
		if ($this->form_validation->run())
		{
			$nom= $this->input->post('username');
			$password= $this->input->post('password');
			if($this->con->verifierinfo($nom,$password))
			{
				$this->session->set_userdata('login',$nom);
				$remember = $this->input->post('remember');

			if ($remember) {
    // Garder la session active plus longtemps
    		$this->session->sess_expiration = '86400'; // Exemple : 86400 secondes (24 heures)
			}
                redirect('welcome');
			}
			else
			{
				$this->load->view('login',$data);
			}
		}
	
		else{

			$this->load->view('login');

		}
		$this->load->view('login.php');
	}

	public function creercompte(){
		$this->load->model("connexion", "con");
		//$data['error']='vos données entrer sont incorrectes';
		$this->form_validation->set_rules('nom','', 'required');
		$this->form_validation->set_rules('prenom','', 'required');
		$this->form_validation->set_rules('username','', 'required');
		$this->form_validation->set_rules('password','', 'required');
		$this->form_validation->set_rules('confpassword','', 'required');
		if ($this->form_validation->run()){
			$nom= $this->input->post('nom');
			$prenom= $this->input->post('prenom');
			$username= $this->input->post('username');
			$password= $this->input->post('password');
			$confirmpwd= $this->input->post('confpassword');
			//var_dump($statut);
			if($password == $confirmpwd){
			 	 $this->con->creercompte($nom,$prenom,$username,$password,$confirmpwd);
				  $message = array(
					'status' => true,
					'title' => 'Inscription réussie',
					'message' => 'Votre compte a été créé avec succès!'
				);
				$json_message = json_encode($message);
				$this->session->set_userdata('login',$nom);
					 redirect('welcome',$json_message);
				}else{
					$data['error']='verifier les informations saisies!!! ';
			  
				$this->load->view('enregistrement.php',$data);
				}	
			
			echo json_encode($message);	
		}else{

			$this->load->view('enregistrement.php');	
		}
	}
	
	public function deconnexion(){
		$this->session->sess_destroy();
		redirect('login');

  }
}
