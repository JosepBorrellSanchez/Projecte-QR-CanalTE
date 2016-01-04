<?php
Class usuarismaterial extends CI_Model
{
 function llistarIDs()
 {
   $this->db->select('ID_usuari');
   $this->db->select('Nom');
   $this->db->from('Usuaris');

   $query = $this->db->get();
   
   foreach($query->result_array() as $row){
            $usuaris[$row['ID_usuari']]=$row['Nom'];
        }
   return $usuaris;
}

 function llistarEquipsDisponibles()
 {
	 //mirar a la taula temp los equips ocupats i retornar los que no ho estan
	 $this->db->select('ID_Equip');
	 $this->db->from('Equips');
	 $this->db->join('Sortides_temp', 'Equips.ID_equip = Sortides_temp.Equip', 'left');
	 $this->db->where('Sortides_temp.Equip', null);
	 
	 $query = $this->db->get();
	 
	 
//Select ID_Equip from Equips left join Sortides_temp on Equips.ID_equip=Sortides_temp.Equip where Sortides_temp.Equip is null;
	 return $query->result();
 }
 
 function mirarTemporal(){
	 $this->db->select('*');
	 $this->db->from('Sortides_temp');
	 return $this->db->get()->result(); }
	 
 
 function veurenomdusuari($idusuari)
 {
	 $this->db->select('Nom');
	 $this->db->from('Usuaris');
	 $this->db->where('ID_usuari', $idusuari);
	 
	 return $this->db->get()->row();
	 
 }
	 
 
 function insertarsortida($idusuari, $equips, $contador, $diahora){
	
	foreach ($equips as $row){
		$data=array(
			'ID_usuari' => $idusuari,
			'Equip' => $row,
			'Horadesortida' => $diahora);
			
		$this->db->insert('Sortides_temp', $data);
	}

		$datausuari=array(
			'Contador' => $contador);
	 
	
	$this->db->where('ID_usuari', $idusuari);
	$this->db->update('Usuaris', $datausuari);
	
	
 }

 function getContador($idusuari)
  {
   $this->db->select('Contador');
   $this->db->from('Usuaris');
   $this->db->where('ID_usuari', $idusuari);

   return $this->db->get()->row()->Contador;
 }

 function getEquipsUsuari($idusuari)
 {
	$this->db->select('Equip');
	$this->db->select('ID_usuari');
	$this->db->select('Horadesortida');
	$this->db->from('Sortides_temp');
	$this->db->where('ID_usuari', $idusuari);
	
	return $this->db->get()->result();
 }

 function insertarRegistre($id_usuari, $id_equip, $horadesortida, $diahora)
 {
	$data = array(
		'ID_usuari' => $id_usuari,
		'ID_equip' => $id_equip,
		'Horaentrada' => $diahora,
		'Horasortida' => $horadesortida);
	
	
	$this->db->insert('Registre', $data);
 } 
 
 function getUsuarisAmbEquips()
 {
	 $this->db->select('Usuaris.ID_usuari');
	 $this->db->select('Usuaris.Nom');
	 $this->db->from('Usuaris');
	 $this->db->join('Sortides_temp','Sortides_temp.ID_usuari = Usuaris.ID_usuari');
	 $this->db->distinct();
	 
	 $query = $this->db->get();
   
   foreach($query->result_array() as $row){
            $usuaris[$row['ID_usuari']]=$row['Nom'];
        }
   return $usuaris;
	 //SELECT DISTINCT Usuaris.Nom from Usuaris INNER JOIN Sortides_temp ON Sortides_temp.ID_usuari=Usuaris.ID_usuari'

 }
   
   
 function eliminarTemporal($id_usuari){
	$data = array(
		'ID_usuari' => $id_usuari);
	$this->db->delete('Sortides_temp', $data);
 	$this->db->where('ID_usuari', $id_usuari);
 	
 }    
  
		   
}
