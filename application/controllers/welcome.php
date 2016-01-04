<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
parent::__construct();
	$this->load->database(); // Carreguem la base de dades
	$this->load->library('form_validation'); // La llibreria per fer els camps requerits
	$this->load->model('usuarismaterial');
	$this->load->helper('url');
	
}
	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		
		// que mire si hi ha algun usuari per fer una entrada, si no hi ha cap redirect cap a sortida
	 $users=$this->usuarismaterial->mirarTemporal();
	 //var_dump($users);
	 	if($users == null) {
			redirect('/welcome/sortida/', 'refresh');
			}
		else{	
	 $this->load->view('inicial');}
	}

	public function sortida()
	{
		$data = array(
               "usuaris" => $this->usuarismaterial->llistarIDs(),
               "equips" => $this->usuarismaterial->llistarEquipsDisponibles()
            );
            //var_dump($data['equips']);
		$this->load->view('sortida', $data);
	}
	
	public function entrada()
	{
		$ids = array(
               "usuaris" => $this->usuarismaterial->getUsuarisAmbEquips()
            );
		$this->load->view('entrada', $ids);
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
