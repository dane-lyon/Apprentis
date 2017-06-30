<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		
		<center>
		 	<img src="logo.png"> <br><br><br>
		</center>
		<div class="center-div">
							
		<center>
			
			<form action="/ma-page-de-traitement" method="post">
				
    			<div>
        			Titre :	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        			<input type="text" readonly id="titre" />
    			</div>
    			<div>
        			Etablissement : &nbsp
        			<input type="text" readonly id="etablissement" />
    			</div>
    			<div>
					Date : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        			<input type="text" readonly id="etablissement" /><br><br><br>
					
					Problème(s) rencontré(s) : <br>
					<textarea name="probleme" rows=10 cols=70 readonly></textarea><br><br><br>
					
					Action(s) réalisée(s) <br>
					<textarea name="action" rows=10 cols=70 readonly></textarea><br><br><br>
					
					Information(s) complémentaire(s) <br>
					<textarea name="comentaire" rows=5 cols=70 readonly></textarea><br><br><br>
					
					Problème(s) résolu(s) ? <br>
					<input type="radio" id="problemeok" readonly/> Oui
					<input type="radio" id="problemeoketnon" readonly/> Pas complètement
					<input type="radio" id="problemnon" readonly/> Non <br><br><br>
    			</div>
			</form>
		</center>
		</div>
		
	</body>
</html>

<?php
$titre = $_POST['titre'];

$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'dane6904!');
$titre = $bdd->query('SELECT titre FROM Tablette');
$donnees = $titre->fetch();
?>