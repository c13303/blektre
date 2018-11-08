<?php
$nom=mysqli_fetch_assoc(requete('SELECT char3 FROM accounts WHERE nom="'.$noma.'";'));
$nom=$nom['char3'];
require('reset_prereset.php');
require('check_player.php');
?>