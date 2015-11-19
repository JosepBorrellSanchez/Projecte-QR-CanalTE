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

		<?php echo form_open('crearsortida'); ?>

		<div class="form_description">
			<p>Selecciona usuari i equips</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Usuari </label>
		<div>
		<?php echo form_dropdown('Noms', $usuaris, 'Qui ets?', 'id="ID_usuari"');?>
		</li>
		<br>
		<li id="li_2" ><label class="description" for="element_2">Equips </label> <br>
		<br>
		
		<? foreach ($equips as $row => $value) { ?>
			<label class="description" for="element_2"><?php echo $value->ID_Equip ?>
			 <?php echo form_checkbox($value->ID_Equip, 'accept', FALSE);?> <br>
			
			<?php } ?>
			
			<?php if (sizeof($equips) == 0) { echo "No hi ha equips disponibles";} ?>
		</select>
		</div> 
		<br>
		</li>	
		<br>
		</li>
			
					<br>
			    <input type="hidden" name="form_id" value="1070892" />
			    
				<input id="saveForm" class="button_text" type="submit" name="acceptar" value="Acceptar" />
		</li>
			</ul>
		</form>
	</div>
	</body>
</html>
