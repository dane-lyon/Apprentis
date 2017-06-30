<!DOCTYPE html>
<html>
	<head>
		<title>Creation fiche</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		 <img src="logo.png" class="logo">
		<center><div class="center-div">
			<h1>Formulaire de création de fiches de procédures</h1>
			
			<form action="recuperation.php" method="post">
				
				<table>
					<tr>
						<th colspan="3">Informations générales</th>		<!-- Section infos générales -->
					</tr>
					<tr>
						<td>Titre :	<input type="text" name="titre" id="titre" /></td>
        				<td>Etablissement : <input type="text" name="etablissement" id="etablissement" /></td>
						<td>RNE : <input type="text" name="RNE" id="RNE" /></td>
					</tr>
				</table>
				
				<br/>
					
				<table>
					<tr>
						<th colspan="3">Description</th>		<!-- Section description -->
					</tr>
					<tr>
						<td>Problème(s) rencontré(s) : <br/><textarea name="probleme" id="probleme" rows=5 cols=70 placeholder="Description des problèmes"></textarea></td>
					</tr>
					<tr>
						<td>Action(s) réalisée(s) <br><textarea name="resolution" id="resolution" rows=5cols=70 placeholder="Les manipulations effectuées par le dépanneur"></textarea></td>
					</tr>
				</table>
			
				<br/>
					
				<table>
					<tr>
						<th colspan="3">Information(s) complémentaire(s)</th>		<!-- Section infos sup -->
					</tr>
					<tr>
						<td><textarea name="commentaire" id="commentaire" rows=5 cols=70></textarea></td>
					</tr>
				</table>
				
				<br/>
				
				<table>
					<tr>
						<th colspan="3">Résolu ?	<input type="text" name="etat" id="etat" /></th>		<!-- Section infos générales -->
					</tr>
				</table>
					
				<br/>
		
					<input type="submit" name="envoi" value="Confirmer l'envoi de la fiche">
			</form>
	</div>
		<div class="bouton">
  			<p>
   				<a href="./page1.html">Retour</a>
 			</p>
		</div>
</center>
	</body>
</html>


