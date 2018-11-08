<?php
header('Content-Type: text/html; charset=iso-8859-1');
require("include/connexion.php");
require("include/fonctions.php");

$in_fame = 1;
$nom     = filter_input(INPUT_GET,'nom',FILTER_SANITIZE_STRING);

if(!$nom)exit('Lol');



$verif2 = 'SELECT id,nom,best,road1,retour,road3,road4,life,karma,money,frakass,sex,place,fume,time FROM players WHERE nom="' . $nom . '" LIMIT 0,1;';
$req2   = requete($verif2);
$data2  = mysqli_fetch_assoc($req2);
$id       = $data2['id'];
if(!$id)exit('LOLLLLLLLLLLLLLLLLLL');


$verif = 'SELECT objet FROM log WHERE id_player='.$id.' ORDER BY id DESC LIMIT 0,50;';
$req    = requete($verif);
$enceinte = check_point($id, 'enceinte');

$player  = $data2['nom'];
$score   = $data2['best'];
$road1   = $data2['road1'];
$retour  = $data2['retour'];
$road3   = $data2['road3'];
$road4   = $data2['road4'];
$life    = $data2['life'];
$karma   = $data2['karma'];
$money   = $data2['money'];
$frakass = $data2['frakass'];
$sex     = $data2['sex'];
$place   = $data2['place'];
$fume    = $data2['fume'];
$time    = $data2['time'];

if ($id)
    $bio = check_bio($nom);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Blektre</title>
     <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   
    <meta content="Simulateur de vraie vie: BLektre" name="Description" />
    <meta content="Simulateur de vraie vie: BLektre" name="Keywords" />
    <meta content="index, follow" name="robots" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="style/blektre.css" rel="stylesheet" type="text/css" />
    <style media="screen" type="text/css">
/*<![CDATA[*/
      /* <!-- */
      /* General styles */
      body {
          margin:0;
          padding:0;
          border:0;         /* This removes the border around the viewport in old versions of IE */
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
          width:80%;            /* width of whole page */
          overflow:hidden;  /* This chops off any overhanging divs */
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
          right:50%;                /* right column width */
          background:#fff;      /* left column background colour */
      }
      .doublepage .col1 {
          width:46%;                /* left column content width (column width minus left and right padding) */
          left:52%;             /* right column width plus left column left padding */
      }
      .doublepage .col2 {
          width:46%;                /* right column content width (column width minus left and right padding) */
          left:56%;             /* (right column width) plus (left column left and right padding) plus (right column left padding) */
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
      .col21 {      float:left;
          position:relative;
          padding:0 0 1em 0;
          overflow:hidden;
    }
    /*]]>*/
    </style>
</head>

<body>
    <div id="header">
        <a href="famous.php">Retour</a>

        <p>&nbsp;</p>

        <p id="layoutdims">Blektre simulateur de vret vie</p>
    </div>

    <div class="colmask doublepage">
        <div class="colleft">
            <div class="col1">
                <?php
                echo '<h1>' . $nom . '</h1> <br/> (' . $place . ')<br/>';
                echo $bio;
                ?>
                &nbsp;

                <table border="0" cellpadding="0" cellspacing="5" width="450">
                    <tr>
                        <td style="background-color: #E9E9E9">
                            <div style="text-align: left">
                                ACTION
                            </div>
                        </td>

                        <td style="background-color: #E9E9E9">
                            <div style="text-align: left">
                                VALUE
                            </div>
                        </td>
                    </tr><?php



                    $fils2   = requete('SELECT nom,pere,mere FROM family WHERE nom="' . $nom . '";');
                    $parents = mysqli_fetch_assoc($fils2);
                    $mere    = $parents['mere'];
                    $pere    = $parents['pere'];

                    echo '<br><br>Fils de <a href="famous2.php?nom=' . $mere . '">' . $mere . '</a> et <a href="famous2.php?nom=' . $pere . '">' . $pere . '</a><br><br>';


                    while ($data = mysqli_fetch_assoc($req)) {
                        $data['objet'] = $data['objet'];
                        echo '<tr><td><div align="left">' . $data['time'] . '.' . $data['objet'] . '</td><td><div align="left">' . $data['value'] . '</td>
                      </tr>';
                    }




                    ?>
                    </table>
            </div>

            <div class="col2">
                <p><?php
                $road4 = check_stat($nom);
                $road4 = $road4['road4'];
                $v     = 'check';
                require('toolz/flash.php');


                ?>
                </p>

                <p style="text-align: center">SPECIAL RANKS</p>

                <p>&nbsp;</p>

                <table border="0" width="442">
                    <tr style="background-color: #E6E6E6">
                        <td>RANK</td>

                        <td>&nbsp;</td>

                        <td>VALUE</td>
                    </tr><?php
                    $ranks = requete('SELECT nom,title,value FROM special WHERE player="' . $nom . '";');
                    while ($rankdata = mysqli_fetch_assoc($ranks)) {
                        echo '<tr><td>' . $rankdata['nom'] . '</td><td>' . $rankdata['title'] . '</td><td>' . $rankdata['value'] . '</td></tr>';
                    }


                    ?>
                    </table>

                <p style="text-align: center">&nbsp;</p>

                <p style="text-align: center">FAMILY</p>

                <p style="text-align: center">&nbsp;</p><?php
                if ($enceinte) {
                    echo '[vous etes enceinte]';
                }

                $fils2 = requete('SELECT nom,pere,mere FROM family WHERE pere="' . $nom . '" AND nom<>"bebe" LIMIT 0,30;');
                $fils3 = requete('SELECT nom,pere,mere FROM family WHERE mere="' . $nom . '" AND nom<>"bebe" LIMIT 0,30;');


                ?>

                <div style="text-align: center">
                    <table border="0" width="442">
                        <tr style="background-color: #E6E6E6">
                            <td>FATHER</td>

                            <td>MOTHER</td>

                            <td>CHILD</td>
                        </tr><?php
                        while ($parents = mysqli_fetch_assoc($fils2)) {
                            
                            echo '<tr><td><a href="famous2.php?nom=' . $parents['pere'] . '">' . $parents['pere'] . '</a></td><td><a href="famous2.php?nom=' . $parents['mere'] . '">' . $parents['mere'] . '</a></td><td><a href="famous2.php?nom=' . $parents['nom'] . '">' . $parents['nom'] . '</a></td></tr>';
                        }
                        while ($parents = mysqli_fetch_assoc($fils3)) {
                            
                            echo '<tr><td><a href="famous2.php?nom=' . $parents['pere'] . '">' . $parents['pere'] . '</a></td><td><a href="famous2.php?nom=' . $parents['mere'] . '">' . $parents['mere'] . '</a></td><td><a href="famous2.php?nom=' . $parents['nom'] . '">' . $parents['nom'] . '</a></td></tr>';
                        }




                        ?>
                        </table><?php
                    // statoches

                    $timedscore = $score / $time;
                    echo "<br><br><br>Stats:<br><br><br>Rendement: " . $timedscore;
                    ?>
                    </div>
            </div>
        </div>

        <div id="footer">
            <p><a href="00_aide.php"><span class="Style1">charles torris
            2008</span></a> - <a href=
            "mailto:erreur-ate-autiste.org">author</a> - <a href=
            "http://www.ardkor.com">sponsor</a> - <a href=
            "0_blektre_au_theatre.php">Blektre: la pi&egrave;ce de th&eacute;&acirc;tre</a> -
            <a href=
            "http://www.netvibes.com/ukjeusqstmetp#BLEKTRE_ACTIVITY">Blektre
            developpement blog</a></p>
        </div>
    </div>
</body>
</html>