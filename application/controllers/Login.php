
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
	public function creercompte()
	{
		$this->load->view('enregistrement.php');
	}
	
	public function deconnexion(){
		$this->session->sess_destroy();
		redirect('login');

  }
}
