<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" >
<head>
	<title>Blektre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta name="description" content="Simulateur de vraie vie: BLektre" />
	<meta name="keywords" content="Simulateur de vraie vie: BLektre" />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
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
		background:#eee;

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
		background:#eee;		/* right column background colour */
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
   
   
   

   
   
   
   
$quete=requete('SELECT player_name FROM log ORDER BY id desc');
$cc=1;
while($intro=mysqli_fetch_assoc($quete))
{

	$pile=$intro['player_name'];

if($pile==$perso1||$pile==$perso2||$pile==$perso3||$pile==$perso4)
{

}
else
{
		$perso='perso'.$cc;
		$$perso=$intro['player_name'];
		$cc++;
		if($cc>4)
			{
			break;
			}
}
}

$nom=$perso2;
$id=get_id($nom);

  $v='intro';
   require('flashintro.php');
  
  ?>
    </div>
    <p id="layoutdims">beta 0.9<strong></strong></p>
</div>
<div class="colmask doublepage">
	<div class="colleft">
	  <div class="col1">
	    <p>&nbsp;</p>
	    <form method="post" action="zchars/startmenu.php"><div align="center">
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
            <?php 
  

  
?>
            <input type="hidden" name ="money" id="money" value="<?php echo $money; ?>" />
            <input type="hidden" name ="life" id="life" value="<?php echo $life; ?>" />
            <input type="hidden" name ="karma" id="karma" value="<?php echo $karma; ?>" />
            <input type="hidden" name ="sex" id="sex" value="<?php echo $sex; ?>" />
            <input name="submit" type="submit" id="Submit" value="Goldorak Go!" />
          </p>
	      <p align="center">Nouveau joueur ? <a href="_register.php">Creer un compte !</a></p>
	      <p align="center">B&ecirc;ta version</p>
	      <p align="center">_________________________________________________<br />
              <a href="00_aide.php">explications </a>|<a href="mailto:erreur-ate-autiste.org"> author</a> | <a href="http://www.ardkor.com">sponsor</a> </p>
        </form>
	    <p align="center" class="Style1">charles torris 2008</p>
	    <p align="center" class="Style1"><a href="0_blektre_au_theatre.php">--&gt; [ Blektre: la pi&egrave;ce de th&eacute;&acirc;tre] &lt;--</a></p>
	  </div>
	  <div class="col2">
	    <p align="center"><a href="toolz/fame.php" class="style6 Style7">--&gt; visitez le hall of fame ! &lt;--</a></p>
	    <?php
  $cunt=mysqli_fetch_assoc(requete('SELECT count(*) FROM players'));
  $cunt=$cunt['count(*)'];
  
  ?>
        <p>Hello world. <?php echo $cunt; ?> personnages vivent des aventures path&eacute;tiques en jeu.</p>
        <p>&gt; <a href="http://www.netvibes.com/ukjeusqstmetp#BLEKTRE_ACTIVITY">Blektre developpement blog</a></p>
        <p align="left" class="Style1">Derniers evenements (<a href="rss.php">fil rss</a>)</p>
        <p align="left" class="Style1">
          <?php
  
  

  $verif='SELECT * FROM log ORDER BY id DESC LIMIT 0,10;'; 
  $req=requete($verif);
  $bite=0;
  while ($data = mysqli_fetch_assoc($req))
  {

  echo '<a href="toolz/fame2.php?nom='.($data['player_name']).'">'.($data['player_name']).'</a> : '.$data['objet'];
  echo "<br>";
 

  }
  
  
  
  ?>
        </p>
        <p align="left" class="Style1"><a href="toolz/glog.php">(plus)</a></p>
	  </div>
  </div>
</div>
<div id="footer">

    <p>BLEKTRE</p>
</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>

<script type="text/javascript">
_uacct = "UA-1848067-8";
urchinTracker();
</script>

</body>
</html>
