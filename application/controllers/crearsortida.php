<?php

class crearsortida extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Noms', 'Usuari', 'required');
				

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('sortida');
		}
		else
		{
			$idusuari = $this->input->post('Noms');
			$contador = 0;
			if ($this->input->post('1') == "accept") {
				$equips = "1";
				$contador = $contador +1;
			}
		
			if ($this->input->post('2') == "accept") {
				$equips = $equips.", 2";
				$contador = $contador +1;
			}
		
			if ($this->input->post('3') == "accept") {
				$equips = $equips.", 3";
				$contador = $contador +1;
			}
		
			if ($this->input->post('4') == "accept") {
				$equips = $equips.", 4";
				$contador = $contador +1;
			}
		
			if ($this->input->post('5') == "accept") {
				$equips = $equips.", 5";
				$contador = $contador +1;
			}
			
			
			
			//ara simplement pasem $idusuari $equips i $contador, apart de la $data
			
			
			
			
			
			
			
		
			$this->load->view('gracies');
		}
	}
?>
