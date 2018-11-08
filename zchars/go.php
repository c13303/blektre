<?php




if ($go == 'go') {
    echo '
  <p align="center">&nbsp;</p>
<form method="GET" action="../prefiltre.php">
<p align="center">
<input name="v" type="radio" id="sexe" value="1" onclick="javascript:submit(this.form)" />GOLDORAK GO</p>
  <input type="hidden" name="ids" id="ids" value="' . $ids . '" ></p>
  
</form>

';
}
?>

<form method="post" action="filtre.php">

    <?php
    $_SESSION['hapen'] = $hapen;


    if ($entree != '') {
        echo '
	<p align="center">
    <input name="entree" type="text" id="entree" value="' . $entree . '">';
    }

    if ($entree2 != '') {
        echo '
	<p align="center">
	<textarea name="entree2" cols="50" rows="10" id="message">' . $entree2 . '</textarea>';
    }



    if ($m1 != '') {

        echo '
	<p align="center">
    <input name="v" type="radio" id="sexe" value="' . $v1 . '" onclick="javascript:submit(this.form)" />' . $m1 . '</p>';
    }



    if ($m2 != '') {

        echo '
	<p align="center">
    <input name="v" type="radio" id="sexe" value="' . $v2 . '" onclick="javascript:submit(this.form)" />' . $m2 . '</p>';
    }
    if ($m3 != '') {

        echo '
	<p align="center">
    <input name="v" type="radio" id="sexe" value="' . $v3 . '" onclick="javascript:submit(this.form)" />' . $m3 . '</p>';
    }
    if ($m4 != '') {

        echo '
	<p align="center">
    <input name="v" type="radio" id="sexe" value="' . $v4 . '" onclick="javascript:submit(this.form)" />' . $m4 . '</p>';
    }

    if ($m5 != '') {

        echo '
	<p align="center">
    <input name="v" type="radio" id="sexe" value="' . $v5 . '" onclick="javascript:submit(this.form)" />' . $m5 . '</p>';
    }

    ////
    ?>




    <p align="center">
    </p>



    <div align="center">
        <p>
            <input type="hidden" name="ids" id="ids" value="<?php echo $ids; ?>" >
    <?php
    $_SESSION['nom'] = $nom;
    $_SESSION['noma'] = $noma;
    $_SESSION['hapen'] = $hapen;
    $_SESSION['fplace'] = $fplace;
    ?>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <noscript>
        <p>
            <input name="submit" type="submit" id="Submit" value="Goldorak Go!" />
        </p>
        </noscript> 
    </div>
</form>
