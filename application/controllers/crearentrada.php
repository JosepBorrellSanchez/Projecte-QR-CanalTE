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
			//var_dump($equipsocupats);
						
			foreach ($equipsocupats as $row) {
				//agafo les dades
				//$dades=$this->usuarismaterial->getEquipsOcupats($row);
				
			//	var_dump($row->ID_usuari);
				$id_usuari = $row->ID_usuari;
				$id_equip = $row->Equip;
				//var_dump($id_equip);
				$horadesortida = $row->Horadesortida;
				
				//inserto registres
				$this->usuarismaterial->insertarRegistre($id_usuari, $id_equip, $horadesortida, $diahora);
				
				//me carrego lo temporal
				//nomes me falta aixo!!
				
				
			}
			$this->usuarismaterial->eliminarTemporal($id_usuari);
			
			$usuari = $this->usuarismaterial->veurenomdusuari($id_usuari);
			$this->load->view('gracies', $usuari);
		
		}
	}
}
?>
