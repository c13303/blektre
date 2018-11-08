<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 ?>
<div id="texte"> 
  <p>Vous commencez &agrave; &eacute;laborer des plans d'avenir mais vous sentez que Josiane est parfois un peu distante. </p>
  <p>- T'es super mignon tu sais, <b><?php echo $nom; ?></b>. Tu sais ce qui me ferait plaisir ? </p>
  <p>- Un godemichet "Hello Kitty"?, dites vous innocemment.</p>
  <p>- Tu commences &agrave; bien me conna&icirc;tre !! dit elle en souriant. <?php
 
 

$gode=check_point($id,'gode');
if($gode)
{
	echo "- Et bien chérie, ça tombe bien ..";
	$m1="Je lui donne le gode 'Hello Kitty' que j'ai acheté";
	$v1="paris/josiane/chezjosiane1_gode_giving";
}
$m2="Cette petite conne n'a pas appris le respect. Je la fume";
$v2="paris/josiane/chezjosiane_fume";
$m3="Je prends un air t&eacute;n&eacute;breux et je me casse";
$v3="paris/_street/streetnord";
  
    ?>
    

    
  </p>
  </form>
    </p>
 
<?php  ?>

 
























