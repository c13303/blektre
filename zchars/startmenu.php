<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head> 


        <title>BLEKTRE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

        <link rel="stylesheet" type="text/css" href="../style/blektre.css" />
        <script type="text/javascript" src="../scripts/utils.js">
        </script>

    </head>

    <body >

        <table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>  <?php
                    require('../include/fonctions.php');

                    // chope les identifiants de depart



                    $noma = $_POST['noma'];
                    $password = $_POST['password'];
                    $password2 = $_POST['password2'];
                    $noma = clean($noma);




                    $noma = strtolower($noma);
                    $noma = ucfirst($noma);

                    $_SESSION['noma'] = $noma;

                    require("../include/connexion.php");



// verifier l'account

                    $verif = 'SELECT * FROM accounts WHERE nom="' . $noma . '";';

                    $req = requete($verif);
                    $data = mysqli_fetch_assoc($req);
                    $my_id = $data['id'];
                    $_SESSION['pid'] = $my_id;

                    if ($password == '') {
                        echo "entrez un password svp";
                        exit;
                    }

                    if ($data['password'] != $password) {
                        echo 'Wrong password baby';
                        exit();
                    }

// afichie perso

                    require('check_account.php');


                    require('go.php');
                    ?></td>
                <td>&nbsp;</td>
            </tr>
        </table>







    </body>