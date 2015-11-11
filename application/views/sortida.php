<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sortida de material</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Sortida de material</a></h1>
		<form id="form_1070892" class="appnitro"  method="post" action="crearsortida">
					<div class="form_description">
			<p>Selecciona usuari i equips</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Usuari </label>
		<div>
		<?php echo form_dropdown('Noms', $usuaris, 'Qui ets?', 'id="ID_usuari"');?>

		</select>
		</div> 
		<br>
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Equips </label>
		<span>
			<input id="element_2_1" name="element_2_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_2_1">1</label>
<input id="element_2_2" name="element_2_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_2_2">2</label>
<input id="element_2_3" name="element_2_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_2_3">3</label>
<input id="element_2_4" name="element_2_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_2_4">4</label>
<input id="element_2_5" name="element_2_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_2_5">Reflex</label>

		</span> 
		</li>
			
					<br>
			    <input type="hidden" name="form_id" value="1070892" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>
	</div>
	</body>
</html>
