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
/*
function getEquipsOcupats($row)
{
	$this->db->select('Equip');
	$this->db->from('Sortides_temp');
	
	
	return $this->db->get()->result();
}
* */

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
   
    
    
    
/*
 function registre($dades)
 {
	
  $this->db->insert('users', $dades);

 }
 
 function compusuari($usuari){
 	$this->db->where('username', $usuari);
	$query = $this->db->get('users');
if($query->num_rows >= 1)
{
//ya existeix
return false;
}  
//no existeix, es pot crear
else{
return true;}
}

function compemail($email){
 	$this->db->where('Email', $email);
	$query = $this->db->get('users');
if($query->num_rows >= 1)
{
//ya existeix
return false;
}  
//no existeix, es pot crear
else{
return true;}
}

function compassword($id){
	
	$this->db->select('password');
	$this->db->from('users');
 	$this->db->where('id', $id);
	$query = $this->db->get();
	return $query->row();
}

function modificarPassword($id, $password){
	$data=array(
	'password'=> $password);
	
 	$this->db->where('id', $id);
 	$this->db->update('users', $data);
}

function modificarEmail($id, $email){
	$data=array(
	'Email'=> $email);
	
 	$this->db->where('id', $id);
 	$this->db->update('users', $data);
}



function pujarFoto($file_name, $id) {
		//agafo els valors de la foto que s’ha pujat, i inserto a la base de dades. 
		 $data = array('foto'=> $file_name);
		  
		   $this->db->where('id',$id);
		   $this->db->update('users', $data); 
		   }
	
function getDades($id) {
	$this->db->where('id', $id);
	$query= $this->db->get('users');
	return $query->result_array();
	
}
*/
	
	

	
		   
}
