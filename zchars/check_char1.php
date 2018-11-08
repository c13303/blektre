 <?php
$nom=mysqli_fetch_assoc(requete('SELECT char1 FROM accounts WHERE nom="'.$noma.'";'));
$nom=$nom['char1'];
require('reset_prereset.php');
require('check_player.php');
?>