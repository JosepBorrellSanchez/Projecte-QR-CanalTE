<?php

class crearsortida extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Noms', 'Usuari', 'required');
		$this->load->model('usuarismaterial');
				

			$idusuari = $this->input->post('Noms');
			$contador=$this->usuarismaterial->getContador($idusuari);
			$equips = null;
			if ($this->input->post('1') == "accept") {
				$equips = array(1);
				
				$contador = $contador +1;
			}
		
			if ($this->input->post('2') == "accept") {
				if($equips != null){
					
				array_push($equips,2);
				
				}
				
				else{
					$equips = array(2);
				}
				$contador = $contador +1;
			}
		
			if ($this->input->post('3') == "accept") {
				if($equips != null){
					
				array_push($equips,3);
				
				}
				
				else{
					$equips = array(3);
				}
				$contador = $contador +1;
			}
		
			if ($this->input->post('4') == "accept") {
				if($equips != null){
					
				array_push($equips,4);
				
				}
				
				else{
					$equips = array(4);
				}
				$contador = $contador +1;
			}
		
			if ($this->input->post('5') == "accept") {
				if($equips != null){
					
				array_push($equips,5);
				
				}
				
				else{
					$equips = array(5);
				}
				$contador = $contador +1;
			}
			//var_dump($equips);
			
			$diahora=date('l jS \of F Y h:i:s A');
						
			if ($equips != NULL){			
				$this->usuarismaterial->insertarsortida($idusuari, $equips, $contador, $diahora);
				$usuari = $this->usuarismaterial->veurenomdusuari($idusuari);
				$this->load->view('gracies', $usuari);}
			
			else{
				$usuari = $this->usuarismaterial->veurenomdusuari($idusuari);
				$this->load->view('noequipseleccionat', $usuari);
				
			}
	}
}
?>
