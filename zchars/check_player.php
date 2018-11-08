<?php
require('panel_account.php');
?>
<div align="center">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="200" height="200">
        <param name="movie" value="../FUCK/check.swf?sene=account&var1=<?php echo $nom; ?>&skin1=<?php echo $road4; ?>" />
        <param name="quality" value="high" />
        <embed src="../FUCK/check.swf?sene=account&var1=<?php echo $nom; ?>&skin1=<?php echo $road4; ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="200"></embed>
    </object>
    <?php
/// AFFICHAGE 

    $fils2 = requete('SELECT * FROM family WHERE nom="' . $nom . '";');
    $parents = mysqli_fetch_assoc($fils2);
    echo "<p>Fils de " . $parents['mere'] . " et " . $parents['pere'];

    $bio = mysqli_fetch_assoc(requete('SELECT bio FROM bio WHERE id_player=' . $id . ';'));
    $bio = $bio['bio'];
    echo '<br><br>"' . $bio . '"';

    if ($road1) {
        echo "<br/><br/><b>Vous vous réveillez, avec le désagréable souvenir d'avoir été " . ($road1) . "</b>";
        requete('UPDATE `players` SET road1="" WHERE nom = "' . $nom . '" LIMIT 1;');
    }

/// IF DEAD, RESET ?
    if ($life < 1) {
        echo "<br><br><br><br> RESET </br></br>";
        $m1 = "ok";
        $v1 = "reset";

        require('../include/exit.php');
    }


    $v = 'check';

/// FLASH
    $flush = 'FUCK/' . $v . '.swf?var1=' . $nom . '&skin1=' . $road4;
    $flush = str_replace(" ", " ", $flush);
    $flush = utf8_encode($flush);

    $go = 'go';

    $m5 = 'Ah non pas lui';
    $v5 = 'check_account2';
    $m3 = 'Modifier ma biographie';
    $v3 = 'char_bio_modif';
    if ($nom != 'Guest') {
        $m4 = 'Effacer ce foutu personnage';
        $v4 = 'char_delete';
    }
    ?>
</div>
</div>
<div id="picture">

</div>
