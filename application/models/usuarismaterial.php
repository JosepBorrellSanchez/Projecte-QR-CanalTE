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
