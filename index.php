<?php
session_start();
header('Content-Type: text/html; charset=iso-8859-1');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$perso1 = $perso2 = $perso3 = $perso4 = $hapen = $fapen = $opt1 = $opt2 = $opt3 = null;
$life = $sex = $karma = $frakass = $money = null;
$opt3 = $go = $entree = $entree2 = $m1 = $m2 = $m3 = $m4 = $m5 = $ids = $fplace = null;





if(empty($_GET['foutre'])){
    $_GET['foutre'] = null;
}

if ($_GET['foutre'] == 'oui')
    $_SESSION['admin'] = 1;
if ($_GET['foutre'] == 'non')
    $_SESSION['admin'] = 0;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" >
    <head>
        <title>Blektre</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="Simulateur de vraie vie: BLektre" />
        <meta name="keywords" content="Simulateur de vraie vie: BLektre" />
        <meta name="robots" content="index, follow" />
        <meta property="og:image" content="icone.png" />
        <meta property="og:image:width" content="532" />
        <meta property="og:image:height" content="491" />
        <link rel="stylesheet" type="text/css" href="style/blektre.css" />
        <style media="screen" type="text/css">
            /* <!-- */
            /* General styles */
            body {
                margin:0;
                padding:0;
                border:0;			/* This removes the border around the viewport in old versions of IE */
                width:100%;
                background:#fff;
                min-width:600px;    /* Minimum width of layout - remove line if not required */
                /* The min-width property does not work in old versions of Internet Explorer */
                font-size:90%;
            }

            /* Header styles */
            #header {
                clear:both;
                float:left;
                width:100%;
            }
            #header {
                border-bottom:1px solid #CCCCCC;
            }

            /* 'widths' sub menu */
            #layoutdims {
                clear:both;

                margin:0;
                padding:6px 15px !important;
                text-align:right;
            }
            /* column container */
            .colmask {
                clear:both;
                float:left;
                width:100%;			/* width of whole page */
                overflow:hidden;	/* This chops off any overhanging divs */
            }
            /* common column settings */
            .colright,
            .colmid,
            .colleft {
                float:left;
                width:100%;
                position:relative;
            }
            .col1,
            .col2,
            .col3 {
                float:left;
                position:relative;
                padding:0 0 1em 0;
                overflow:hidden;
            }
            /* 2 Column (double page) settings */
            .doublepage {
                /* right column background colour */
            }
            .doublepage .colleft {
                right:50%;				/* right column width */
                background:#fff;		/* left column background colour */
            }
            .doublepage .col1 {
                width:46%;				/* left column content width (column width minus left and right padding) */
                left:52%;				/* right column width plus left column left padding */
            }
            .doublepage .col2 {
                width:46%;				/* right column content width (column width minus left and right padding) */
                left:56%;				/* (right column width) plus (left column left and right padding) plus (right column left padding) */
            }
            /* Footer styles */
            #footer {
                clear:both;
                float:left;
                width:100%;
                border-top:1px solid #CCCCCC;
            }
            #footer p {
                padding:10px;
                margin:0;
            }
            /* --> */
            .col21 {		float:left;
                      position:relative;
                      padding:0 0 1em 0;
                      overflow:hidden;
            }
        </style>
    </head>
    <body>

        <div id="header">
            <p>&nbsp;</p>
            <div align="center">
                <?php
               
                require("include/connexion.php");
                require("include/fonctions.php");


                $quete = requete('SELECT player_name FROM log ORDER BY id desc');
                $cc = 1;
                while ($intro = mysqli_fetch_assoc($quete)) {

                    $pile = $intro['player_name'];

                    if ($pile == $perso1 || $pile == $perso2 || $pile == $perso3 || $pile == $perso4) {
                        
                    } else {
                        $perso = 'perso' . $cc;
                        $$perso = $intro['player_name'];
                        $cc++;
                        if ($cc > 4) {
                            break;
                        }
                    }
                }

                $nom = $perso2;
                $id = get_id($nom);

                $v = 'intro';
                require('flashintro.php');
                ?>
                <a href="http://www.tarteflure.com/" ><img style="border:none;" src="http://www.tarteflure.com/style/logo.png" alt="tarteflure.com" width="100" height="100" /></a></div>
            <p id="layoutdims"> Blektre 08.11.2018</p>
        </div>
        <div class="colmask doublepage">
            <div class="colleft">
                <div class="col1">
                    <p>Bienvenue sur Blektre, simulateur de vraie vie. </p>
                    <p>Kikoune 2016 !</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <form method="post" action="zchars/startmenu.php">
                        <div align="center">
                            <table width="387" border="0">
                                <tr>
                                    <td> ACCOUNT NAME</td>
                                    <td><input type="text" name="noma" id="noma" /></td>
                                </tr>
                                <tr>
                                    <td> PASSWORD </td>
                                    <td><input type="password" name="password" id="password6" /></td>
                                </tr>
                            </table>
                        </div>
                        <p align="center">
                            <?php ?>
                            <input type="hidden" name ="money" id="money" value="<?php echo $money; ?>" />
                            <input type="hidden" name ="life" id="life" value="<?php echo $life; ?>" />
                            <input type="hidden" name ="karma" id="karma" value="<?php echo $karma; ?>" />
                            <input type="hidden" name ="sex" id="sex" value="<?php echo $sex; ?>" />
                            <input name="submit" type="submit" id="Submit" value="Goldorak Go!" />
                        </p>
                        <p align="center">Nouveau joueur ? <br />
                            <a href="_register.php">Creez un compte et jouez sans attendre</a></p>
                        <p align="center">* * * </p>
                        <p align="center"><a href="00_aide.php">MODE D'EMPLOI ET CONSEILS</a></p>
                        <p align="left">&nbsp;</p>
                    </form>
                </div>
                <div class="col2">
                    <p align="left">&nbsp;</p>
                    <p align="center">
                        <?php
                        $cunt = mysqli_fetch_assoc(requete('SELECT count(id) FROM players'));
                        $cunt = $cunt['count(id)'];
                        ?>
                    </p>
                    <p>Hello world. <?php echo $cunt; ?> personnages vivent des aventures path&eacute;tiques en jeu.</p>
                    <p>&nbsp;</p>
                    <p align="left" class="Style1">Derniers evenements (<a href="rss.php">fil rss</a>)</p>
                    <p align="left" class="Style1">
                        <?php
                        $verif = 'SELECT player_name,objet FROM log ORDER BY id DESC LIMIT 0,5;';
                        $req = requete($verif);
                        $bite = 0;
                        while ($data = mysqli_fetch_assoc($req)) {

                            echo '<a href="famous2.php?nom=' . $data['player_name'] . '">' . $data['player_name'] . '</a> : ' . $data['objet'];
                            echo "<br>";
                        }
                        ?>
                    </p>
                    <p align="left" class="Style1"><a href="toolz/glog.php">(plus)</a></p>
                    <p align="center" class="Style1"><a href="famous.php" class="style6 Style7">-&gt; le hall of fame &lt;-</a></p>
                </div>
            </div>
        </div>
        <div id="footer">

            <p align="center">
                       <a href="mailto:erreure@gmail.com">     Charles Torris - 
                           2008</a>
                

 <p align="center" class="panelstyle2">&deg; &deg; &deg; &deg; &deg; &deg; &deg; &deg; &deg;</p>
 <p align="center"><a target="_blank" href="0_blektre_au_theatre.php">Blektre au th&eacute;&acirc;tre par Nathalie Quintane et Yves Noël Genod</a></p>
            <p align="center" class="panelstyle2">&deg; &deg; &deg; &deg; &deg; &deg; &deg; &deg; &deg;</p>
            <p align="center">    <a target="_blank"  href="CPCblektre_800.jpg">La presse en parle</a></p>
            <br/>
        
           
        </div>
        
    </body>
</html>
