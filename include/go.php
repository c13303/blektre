<br>
<SCRIPT language="javascript">

    function pouet()
    {
        if (document.getElementById("sene")) {
            doPassVar(document.getElementById("signal"), document.getElementById("sene"), document.getElementById("nom"), document.getElementById("skin1"), document.getElementById("fapen"), document.getElementById("hapenskin"), document.getElementById("perso2"), document.getElementById("skin2"), document.getElementById("perso3"), document.getElementById("skin3"), document.getElementById("perso4"), document.getElementById("skin4"), document.getElementById("opt1"), document.getElementById("opt2"), document.getElementById("opt3"), document.getElementById("bonus1"), document.getElementById("bonus12"), document.getElementById("bonus2"), document.getElementById("bonus22"), document.getElementById("malus1"), document.getElementById("malus12"), document.getElementById("malus2"), document.getElementById("malus22")
                    );
        } else {
            setTimeout("pouet()", 500);
        }
    }


</SCRIPT>

<div align='center'>



    <?php
    if (!$hapen)
        $hapen = 0;
    ?>
    <input type="hidden" id="hapen_put" value="<?php echo $hapen; ?>" >

    <?php
    $url = 'filtre.php';
    $cont = 'whole';
    $msg = 'lodine..';





    if ($entree != '')
        $typ1 = 'text';
    else
        $typ1 = 'hidden';

    echo '	<p align="center">    <input name="entree" type="' . $typ1 . '" id="entree" value="' . $entree . '"></p>';

    if ($entree2 != '')
        echo '	<p align="center">	<textarea name="entree2" cols="50" rows="10" id="entree2">' . $entree2 . '</textarea></p>';
    else
        echo '	<p align="center">    <input name="entree" type="hidden" id="entree2" value="0"></p>';

    $buttonstyle = "style='border:0px;
border-style:none;
color:#222222;
background: #D7DBDF;
cursor:hand; 
white-space:normal;
font-family: fixedsys, system,arial;
width:410px;
'";


    if ($m1 != '') {
        $_SESSION['autorized'][] = $v1;

        echo "<p align='center'><button " . $buttonstyle . " onclick=\"setTimeout('pouet()', 500);
	this.disabled=true;loadXMLdoc('$url', '$cont', '$msg','$v1','$ids');	
	\">" . $m1 . "</button></p>";
    }



    if ($m2 != '') {
        $_SESSION['autorized'][] = $v2;
        echo "<p align='center'><button " . $buttonstyle . " onclick=\"setTimeout('pouet()', 500);

	this.disabled=true;loadXMLdoc('$url', '$cont', '$msg','$v2','$ids');

	
	\">" . $m2 . "</button></p>";
    }
    if ($m3 != '') {
        $_SESSION['autorized'][] = $v3;
        echo "<p align='center'><button " . $buttonstyle . " onclick=\"setTimeout('pouet()', 500);this.disabled=true;loadXMLdoc('$url', '$cont', '$msg','$v3','$ids') \">" . $m3 . "</button></p>";
    }
    if ($m4 != '') {
        $_SESSION['autorized'][] = $v4;
        echo "<p align='center'><button " . $buttonstyle . " onclick=\"setTimeout('pouet()', 500);this.disabled=true;loadXMLdoc('$url', '$cont', '$msg','$v4','$ids') \">" . $m4 . "</button></p>";
    }

    if ($m5 != '') {
        $_SESSION['autorized'][] = $v5;
        echo "<p align='center'><button " . $buttonstyle . " onclick=\"setTimeout('pouet()', 500);this.disabled=true;loadXMLdoc('$url', '$cont', '$msg','$v5','$ids') \">" . $m5 . "</button></p>";
    }

    ////





    $_SESSION['nom'] = $nom;
    $_SESSION['noma'] = $noma;
    $_SESSION['hapen'] = $hapen;
    $_SESSION['fplace'] = $fplace;
    ?> <div id="bonuses"><div id="bonus">
    <?php
    if ($bonus1)
        echo '+' . $bonus1;
    if ($bonus12)
        echo '+' . $bonus12;
    //if($bonus2) echo '+'.$bonus2;
    //if($bonus22) echo '+'.$bonus22;
    ?>
        </div>
        <div id="malus">
    <?php
    if ($malus1)
        echo '-' . $malus1;
    if ($malus12)
        echo '-' . $malus12;
    //if($malus2) echo '-'.$malus2;
    //if($malus22) echo '-'.$malus22;
    ?>
        </div>
    </div>