<?php session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" >
    <head>
        <title>Blektre</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <meta name="description" content="Simulateur de vraie vie: BLektre" />
        <meta name="keywords" content="Simulateur de vraie vie: BLektre" />   
        <meta http-equiv='pragma' content='no-cache'>

            <meta name="robots" content="index, follow" />
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
            <link rel="stylesheet" type="text/css" href="style/blektre.css" />
            <script type="text/javascript" src="scripts/utils.js"></script>


            <style type="text/css">

            </style>
    </head>
    <body>
        <div id="global">
            <div id="one">
                <div id="whole"><?php $v = 'pages/1.php';
require('filtre.php'); ?></div></div></div>



        </div>
        <div id="three">
            <div id="picture"><?php $furl = "FUCK/map.swf";
$flush = 'FUCK/_BLEKTRE.swf?sene=' . $f . '&var1=' . $nom . '&skin1=' . $skin1;
require("include/flash.php"); //require('toolz/chatte.php');
?></div>
        </div>		
        </div>

    </body>
</html>
