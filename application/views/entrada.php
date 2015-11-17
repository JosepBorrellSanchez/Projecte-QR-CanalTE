<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sortida de material</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Sortida de material</a></h1>
		<?php echo validation_errors(); ?>

		<?php echo form_open('crearentrada'); ?>

		<div class="form_description">
			<p>Selecciona usuari</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Usuari </label>
		<div>
		<?php echo form_dropdown('Noms', $usuaris, 'Qui ets?', 'id="ID_usuari"');?>
	
		
		</div> 
		<br>
			    
				<input id="saveForm" class="button_text" type="submit" name="acceptar" value="Acceptar" />
		</li>
			</ul>
		</form>
	</div>
	</body>
</html>
