<?php header("content-type:text/html; charset=UTF-8"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Public/images/favicon.png" />
		<title>Liste du Matériel - [GMN]</title>
        <script type="text/javascript" src="Public/bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="Public/bootstrap/js/bootstrap.js"></script>
		<link rel="stylesheet" href="Public/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="Public/css/ancienstyle.css" />
		<link rel="stylesheet" href="Public/css/style.css" />
        <link rel="stylesheet" href="Public/css/accordeon.css" />
	</head>
    <body>
        <?php 
            if($_SESSION['Rang'] == 'user')
			{
				require_once 'Includes/navbar.php';
			}
			else if($_SESSION['Rang'] == 'admin')
			{
				require_once 'Includes/navbar_admin.php';
            }
        ?>

        <div class="table-responsive Dispo">
            <table class="table table-responsive table-bordered table-condensed tableIndex">
                <tr>
                    <th>Matériel Disponible</th>
                </tr>
                <tr>
                <td>
                <?php
                    require_once 'Includes/BDD.php';
                
                    $Categorie = $pdo->query('SELECT Nom_Categorie FROM categorie ORDER BY Nom_Categorie');
                    
                    $TabCategorie; $i=0;

                    while($ListeCategorie = $Categorie->fetch())
                    {
                        $TabCategorie[$i] = $ListeCategorie['Nom_Categorie'];
                        $i++;
                    }
                ?>
                <ul class="navigation">
                    <?php
                        foreach($TabCategorie as $LigneCategorie)
                        {
                            echo '<li class="toggleSubMenu"><span>'.$LigneCategorie.'</span>';

                            $materiel = $pdo->query('SELECT * FROM materiel WHERE emprunte="0" AND categorie="'.$LigneCategorie.'" ORDER BY materiel.modele');
                            
                                echo '<ul class="subMenu" style="list-style-type:none">';

                                    while($ListeMateriel = $materiel->fetch())
                                    {
                                        echo '<li>' . $ListeMateriel['Modele'] .'</li>';
                                    }
                                    
                                echo '</ul>';
                            echo '</li>';
                        }
                    
                    $pdo = null;
                ?>
                </td>
                </tr>
            </table>
        </div>

        <div class="table-responsive Pris">
        <table class="table table-bordered table-condensed tableIndex">
                <tr>
                    <th colspan="4">Matériel Emprunté</th>
                </tr>

                <tr>
                    <th>Modèle</th>
                    <th>Emprunteur</th>
                    <th>Date d'Emprunt</th>
                    <th>Date de Retour</th>
                </tr>
        
                <?php
                    include('Includes/BDD.php');
                
                        $reponse = $pdo->query('SELECT Modele,Emprunteur,DateEmprunt,DateRetour FROM materiel WHERE emprunte="1"');      
                        while($donnees = $reponse->fetch())
                        {
                            echo '<tr>';
                            echo '<td>' . $donnees['Modele'] . '</td>';
                            echo '<td>' . $donnees['Emprunteur'] . '</td>';
                            echo '<td>' . $donnees['DateEmprunt'] . '</td>';
                            echo '<td>' . $donnees['DateRetour'] . '</td>';
                            echo '</tr>';
                        }
                    
                    $pdo = null;
                ?>
        
            </table>
        </div>

        <script type="text/javascript" href="Public/bootstrap/js/jquery.js" ></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script type="text/javascript" src="Public/bootstrap/js/jquery-ui.js"></script>
		<script type="text/javascript" src="Public/js/datepicker.js"></script>
        <script type="text/javascript" href="Public/bootstrap/js/bootstrap.js" ></script>

        <script type="text/javascript">
            $(document).ready( function () {
                // On cache les sous-menus :
                $(".navigation ul.subMenu").hide();
                // On sélectionne tous les items de liste portant la classe "toggleSubMenu"

                // et on remplace l'élément span qu'ils contiennent par un lien :
                $(".navigation li.toggleSubMenu span").each( function () {
                    // On stocke le contenu du span :
                    var TexteSpan = $(this).text();
                    $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '<\/a>') ;
                } ) ;

                // On modifie l'évènement "click" sur les liens dans les items de liste
                // qui portent la classe "toggleSubMenu" :
                $(".navigation li.toggleSubMenu > a").click( function () {
                    // Si le sous-menu était déjà ouvert, on le referme :
                    if ($(this).next("ul.subMenu:visible").length != 0) {
                        $(this).next("ul.subMenu").slideUp("normal");
                    }
                    // Si le sous-menu est caché, on ferme les autres et on l'affiche :
                    else {
                        $(".navigation ul.subMenu").slideUp("normal");
                        $(this).next("ul.subMenu").slideDown("normal");
                    }
                    // On empêche le navigateur de suivre le lien :
                    return false;
                });    

            } ) ;
        </script>
    </body>
</html>