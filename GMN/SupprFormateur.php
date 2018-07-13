<?php header("content-type:text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Public/images/favicon.png" />
		<title>Gestion du Matériel Numérique</title>
        <script type="text/javascript" src="Public/bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="Public/bootstrap/js/bootstrap.js"></script>
		<link rel="stylesheet" href="Public/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="Public/css/ancienstyle.css" />
		<link rel="stylesheet" href="Public/css/style.css" />
    </head>
    <body>
        <?php require 'Includes/navbar_admin.php'; ?>
        <center>
            <div>
                <table border="1" class="table table-responsive tableIndex">
                    <tr>
                        <th>Nom</th>
                        <th>Mail</th>
                        <th>Actions</th>
                    </tr>
            
                    <?php 
                        require_once "Includes/BDD.php";

                        $reponse = $pdo->query('SELECT Nom,Mail,mdp,rang FROM formateurs ORDER BY formateurs.Nom');

                        while($donnees = $reponse->fetch())
                        {
                            $Nom = $donnees['Nom'];
                            $Nom = str_replace('_', ' ', $Nom);
                            echo '<tr>';
                            echo '<td>' . $Nom . '</td>';
                            echo '<td>' . $donnees['Mail'] . '</td>';
                            echo '<td style="padding-left: 9%;">
                                    <button
                                        data-toggle="modal"
                                        data-target="#Confirmation_Modification"
                                        onclick="envoi(`'. $donnees["Nom"] .'`);"
                                        class="btn btn-warning">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button 
                                        data-toggle="modal" 
                                        data-target="#Confirmation_Suppression"
                                        onclick="afficher_formateur(`'.$donnees["Nom"].'`);" 
                                        class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>';
                            
                            echo '</tr>';
                        }

                        //$pdo = null;
                    ?>
                </table>
            </div>
        </center>

        <form method="post" action="Includes/supprformateur.php">
            <div class="modal fade" id="Confirmation_Suppression" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Voulez-vous vraiment supprimer?</h4>
                        </div>
                        <div class="modal-body">
                            <b><div id="aff_vformation_2"></div></b>
                            <input id="nom_formateur" name="nom_formateur" value="" hidden/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        <form method="post" action="Includes/modifformateur.php">
            <div class="modal fade" id="Confirmation_Modification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Que voulez-vous modifier?</h4>
                        </div>
                        <div class="modal-body"><center>
                            <div id="reponse_ajax_liste_reponses">
                        </div></center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-danger">Modifier</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    <script>
        function afficher_formateur(pNom)
        {
            document.getElementById("nom_formateur").value = pNom;
            document.getElementById("aff_vformation_2").innerHTML = pNom;
        }

        function envoi(pNom) 
        {
            $.ajax({
                url: "editformateurs.php",
                type: "POST",
                data: "nom_formateur="+pNom,
                dataType : 'html',
                success : function(code_html, statut) {
                    document.getElementById("reponse_ajax_liste_reponses").innerHTML = code_html;
                },
                error : function(resultat, statut, erreur){
                    console.log("Erreur : " + erreur);
                }
            });
        }
    </script>

    </body>
</html>