<?php

$nom=mysqli_fetch_assoc(requete('SELECT char2 FROM accounts WHERE nom="'.$noma.'";'));
$nom=$nom['char2'];
require('reset_prereset.php');
require('check_player.php');

?>