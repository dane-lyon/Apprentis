<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Images/favicon.png" />
		<title>Gestion du Matériel</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		
	</head>
	
	<body onload="CacherDiv();">
		<div class="menu bouton">
			<ul>
				<li><a href="#">Menu</a>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="liste.php">Matériel</a></li>
						<li><a href="emprunt.php">Emprunt</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		<div class="bandeau"><center><p class="titre">Gestion du Matériel Numérique</p></center></div>
		<br/>
		
		<center>
			<select id="TypeAjout">
				<option value="0" onclick="CacherDiv();">Type d'ajout</option>
				<option value="1" onclick="AfficherMateriel();">Matériel</option>
				<option value="2" onclick="AfficherFormateur();">Formateur</option>
			</select>
		</center>
			
		<div id="materiel" style="visibility: hidden"> 
			<fieldset>
				<legend>Matériel</legend>
				<label>Modèle: &nbsp&nbsp <input type="text" name="modele" /></label><br/>
				<label>Ref: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="ref" /></label><br/>
				<label>RefDane: <input type="text" name="refdane" /></label>
			</fieldset>
		</div>
			
		<div id="formateur" style="visibility:hidden"> 
			<fieldset>
				<legend>Formateur</legend>
				<label>Nom: <input type="text" name="nom" placeholder="Aurelien_GEOFFRAY" /></label>
			</fieldset>
		</div>
	<script src="bootstrap/js/jquery.js"></script>
	</body>
</html>

<script type='text/javascript'> 
	var materiel = document.getElementById("materiel");
	var formateur = document.getElementById("formateur");
	function CacherDiv()
	{
		materiel.style.visibility = "hidden";
		formateur.style.visibility = "hidden";
	}

	function AfficherMateriel()
	{
		materiel.style.visibility = "visible";
		formateur.style.visibility = "hidden";
	}
	
	function AfficherFormateur()
	{
		materiel.style.visibility = "hidden";
		formateur.style.visibility = "visible";
	}
</script>