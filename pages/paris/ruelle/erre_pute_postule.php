
<?php

 $action1='place ="rue des voyous"';
include("include/panel.php");

 $pute=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="prostituee";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));
 
 $dealer=check_special('dealer');
$pute_carac=mysqli_fetch_assoc(requete('SELECT * FROM players WHERE nom="'.$pute['player'].'";'));
$sexpute=$pute_carac['sex'];
$lifepute=$pute_carac['life'];


?>

<div id="texte">


<p><?php echo $mac['player']; ?> vous observe de haut en bas, et t&acirc;te vos fesses.</p>
<p>- Hmmm, dit il.</p>
<p>  <?php echo $pute['title']; ?> vous regarde de haut. </p>
<p>- Qu'est ce que tu lui trouves &agrave; cette pouffiasse ? dit-elle &agrave; <?php echo $mac['player']; ?>
  <?php

  if($lifepute<1)
  {
  echo '<br>Vous vous rendez compte qu`en vérité, la pute n`est qu`un vieux cadavre débordant de foutre.';
  }

if ($sex>$sexpute&&$nom!=$dealer||$lifepute<1&&$nom!=$dealer)
{
echo "<br>- Je trouve qu'elle est plus bandante que toi en tout cas. Allez, dégage pouffiasse, dit il sèchement à ".$pute['title']."
en lui arrachant sa perruque";
echo "<br><br>Vous posez la perruque sur la tête et vous vous sentez tout chose.";
echo "<br><br>- Bon, t'as intérêt à me ramener de la tune, dit ".$mac['player']." avant de s'éloigner.";
echo "<br><br>Votre blaze de pute:";


in_log($nom, "Vous devenez pute", "");
in_log($pute['player'], "Votre mac vous a remplacé", "Vieille pute moisie");

requete('UPDATE `special` SET player="'.$nom.'" WHERE nom = "prostituee" LIMIT 1;');



$entree="Cecilia";
$m1="Yes.";
$v1="paris/ruelle/erre_pute_postule2";


}
else
{
echo "<br> - Rien, justement.";
$m1="Je me tire en chialant";
   $v1="paris/ruelle/erre";

}

?>








    <?php





    ?>
</p>
 
<?php
$perso4=$pute['player'];
$perso3=$mac['player'];
 ?>

 
