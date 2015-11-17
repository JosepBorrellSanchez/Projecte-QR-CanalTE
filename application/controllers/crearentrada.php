<?php

class crearentrada extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Noms', 'Usuari', 'required');
		$this->load->model('usuarismaterial');
				

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('entrada');
		}
		else
		{
			$idusuari = $this->input->post('Noms');
			
			$diahora=date('l jS \of F Y h:i:s A');
			
			
			//primer tinc que agafar totes les dades de la taula temp de este usuari
			
			$equipsocupats = $this->usuarismaterial->getEquipsUsuari($idusuari);
						
			foreach ($equipsocupats as $row) {
				//agafo les dades
				$dades=$this->usuarismaterial->getEquipsOcupats($row);
				
				$id_usuari = $dades->ID_usuari;
				$id_equip = $dades->Equip;
				$horadesortida = $dades->Horadesortida;
				
				//inserto registres
				$this->usuarismaterial->insertarRegistre($id_usuari, $id_equip, $horadesortida, $diahora);
				
				//me carrego lo temporal
				
			}
						
			$this->usuarismaterial->insertarentrada($idusuari, $equips, $contador, $diahora);
			
			$this->load->view('gracies');
		}
	}
}
?>
