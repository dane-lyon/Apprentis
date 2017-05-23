<!DOCTYPE html>
<html> 
	<body>
		<div class="element3">
			<div class="element">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						    	<div class="caption">
						      		<center>
										<form action="index.php?tkn=Questionnaire" method="post">
											<p for="ex2">Entrez l'adresse IP du scribe de votre établissement :</p>
											<br>
										<!-- Créer un des Textbox pour chaque octet de l'adresse IP du scribe à rentrer et limite les valeurs autorisé (pattern) -->
											<!-- Première Octet limité à 172 -->
											<input class="taille" name="TextBox1" type="text" placeholder='172' pattern="[1-1][7-7][2-2]" required> .
											<!-- Deuxième Octet limité de 16 à 23 -->
											<input class="taille" name="TextBox2" type="text" placeholder='X' pattern="^(12[0-2]|[1-1][6-9]|[2-2][0-3])$" required> .
											<!-- Troisième Octet limité de 0 à 255 -->
											<input class="taille" name="TextBox3" type="text" placeholder='Y' pattern="(?!256|257|258|259)^(12[0-5]|1[01][0-9]|[0-1][0-9][0-9]|[1-2][0-5][0-9]|[0-9][0-9]|[0-9]|)$" required> .
											<!-- Quatrième Octet limité à 241 ou 245 -->
											<input class="taille" name="TextBox4" type="text" placeholder='241-245' pattern="^([2-2][4-4][1-1]|[2-2][4-4][5-5])" required>
											
											<p><input type="submit" class="btn btn-primary" Value="Valider !" role="button" name="BoutonValiderIP"></p>
										</form>
									</center>
						    	</div>
						    </div>
						</div>
					</div>
					<!-- Bouton qui ouvre une Modal (pop_up) -->
					<button type="buttonIP" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Je ne connais pas mon adresse Scribe !</button>
				</div>
			</div>
		</div>
		<!-- Modal (pop-up) qui explique comment trouver l'adresse Scribe -->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  					<div class="modal-dialog modal-sm" role="document">
    					<div class="modal-content">
    						<center>
      						<p> Vous pouvez trouver l'adresse IP de votre Scribe en ouvrant la console windows 
      						<br>(cmd dans la barre de recherche windows) puis en entrant la commande "ping srv-scribe". </p>
      							<!-- Spoil 2 images -->
	      						<details close>
								   <summary>[Image 1 - Trouver cmd]</summary>
								   <table>
								      <tr>
								      	<img src="Model/Recherche_CMD.png">
								      </tr>
								   </table>
								</details>
								<details close>
								   <summary>[Image 2 - Commande "ping srv-scribe"]</summary>
								   <table>
								      <tr>
								      	<img src="Model/ping_srv_scribe.png">
								      </tr>
								   </table>
								</details>
      						</center>
    					</div>
  					</div>
				</div>
    </body>
</html>