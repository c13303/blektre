<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Blektre</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta content="Simulateur de vraie vie: BLektre" name="description" />
        <meta content="Simulateur de vraie vie: BLektre" name="keywords" />
        <meta content="index, follow" name="robots" />
        <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="style/blektre.css" />
        <style media="screen" type="text/css">
            /*<![CDATA[*/
            /* <!-- */
            /* General styles */

            body {
                margin:0;
                padding:0;
                border:0;           /* This removes the border around the viewport in old versions of IE */
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
                width:100%;         /* width of whole page */
                overflow:hidden;    /* This chops off any overhanging divs */
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
                right:50%;              /* right column width */
                background:#fff;        /* left column background colour */
            }
            .doublepage .col1 {
                width:46%;              /* left column content width (column width minus left and right padding) */
                left:52%;               /* right column width plus left column left padding */
            }
            .doublepage .col2 {
                width:46%;              /* right column content width (column width minus left and right padding) */
                left:56%;               /* (right column width) plus (left column left and right padding) plus (right column left padding) */
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
            .col21 {        float:left;
                            position:relative;
                            padding:0 0 1em 0;
                            overflow:hidden;
            }
            /*]]>*/

            td{text-align:left;}
        </style>
    </head>

    <body>
        <div id="header">
            <p>&nbsp;</p>

            <div style="text-align: center">
                <p><a href="http://blektre.5tfu.org">BLEKTRE</a></p>
                <p>HALL OF PHOQUINE FAME</p>

                <p><?php
                    require("include/connexion.php");
                    require("include/fonctions.php");
                    ?>

                    <table border="0" cellpadding="0" cellspacing="5" width="800" style="margin:auto;">
                        <tr>
                            <td style="background-color: #EAEAEA">
                                <div style="text-align: center">
                                    RANK
                                </div>
                            </td>

                            <td style="background-color: #EAEAEA">
                                <div style="text-align: center">
                                    PLAYER
                                </div>
                            </td>

                            <td style="background-color: #E9E9E9">
                                <div style="text-align: center">
                                    SCORE
                                </div>
                            </td>

                            <td style="background-color: #E9E9E9">
                                <div style="text-align: center">
                                    KARMA
                                </div>
                            </td>

                            <td style="background-color: #E9E9E9">
                                <div style="text-align: center">
                                    SEX APPEAL
                                </div>
                            </td>

                            <td style="background-color: #E9E9E9">
                                <div style="text-align: center">
                                    MONEY
                                </div>
                            </td>

                            <td style="background-color: #E9E9E9">
                                <div style="text-align: center">
                                    LOCATION
                                </div>
                            </td>

                            <td style="background-color: #E9E9E9">
                                <div style="text-align: center">
                                    STATUS
                                </div>
                            </td>
                        </tr><?php
                    $rank = 0;

                    $verif2 = 'SELECT nom,sex,karma,best,money,place,id,life FROM players ORDER BY best DESC LIMIT 0,200;';
                    $req = requete($verif2);
                    while ($data = mysqli_fetch_assoc($req)) {

                        $rank = $rank + 1;
                        if ($data['life'] > 0)
                            $vie = 'Vivant';
                        else
                            $vie = 'Mort';

                        echo '<tr><td>' . $rank . '</td><td><a href="famous2.php?nom=' . $data['nom'] . '">' . $data['nom'] . '</a></td><td>' . $data['best'] . '</td><td>' . $data['karma'] . '</td>
                    <td>' . $data['sex'] . '</td><td>' . $data['money'] . 'e</td><td>' . $data['place'] . '</td><td>' . $vie . '</td></tr>';
                    }
                    ?>
                    </table>

                    <p>B&eacute;b&eacute;s en stock:</p><?php
                        $bebe = mysqli_fetch_assoc(requete('SELECT COUNT(child_id) FROM family WHERE nom="b&eacute;b&eacute;";'));
                        $bebe = $bebe['COUNT(child_id)'];
                        echo $bebe;
                        ?>

                    <p>&nbsp;</p>
            </div>

            <p id="layoutdims">Blektre simulateur de vret vie</p>
        </div>

        <div class="colmask doublepage">
            <div class="colleft">
                <div class="col1"></div>

                <div class="col2"></div>
            </div>
        </div>

        <div id="footer">
            <p><a href="00_aide.php"><span class="Style1">charles torris
                        2008</span></a> - <a href="mailto:erreur-ate-autiste.org">author</a> -
              </p>
        </div>

    </body>
</html>