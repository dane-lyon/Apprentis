<?php
function erreur($err='')
{
   $mess=($err!='')? $err:'Vous êtes déja connecté';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
?>
