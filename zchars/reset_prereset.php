<?php

$life = check_stat($nom);
$life = $life['life'];
if ($life < 1) {
    echo "<div id='texte'><p>Vous etes mort.</p><p> Voulez vous recommencer ? (Perte de votre score et de tous vos objets. Autrement, vous pourriez eventuellement vous faire ressuciter par un tiers)</p>";
    $m1 = 'Recommencer à zero';
    $v1 = 'reset';
    $m2 = 'Je prefere aller me faire foutre';
    $v2 = 'check_account';


    require('go.php');
    exit;
}
?>