<?php

if($hapen)
{
$fapen=$hapen;
}

if($nom){
$skin1=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$nom.'";'));
$skin1=$skin1['road4'];
}
if($noname)
{
$skin1='';
}

if($perso2){
$skin2=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso2.'";'));
$skin2=$skin2['road4'];
$perso2='&perso2='.$perso2.'&skin2='.$skin2;
}
if($perso3){
$skin3=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso3.'";'));
$skin3=$skin3['road4'];
$perso3='&perso3='.$perso3.'&skin3='.$skin3;
}
if($perso4){
$skin4=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso4.'";'));
$skin4=$skin4['road4'];
$perso4='&perso4='.$perso4.'&skin4='.$skin4;
}

$skinhapen=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$fapen.'";'));
$skinhapen=$skinhapen['road4'];

$flush='FUCK/_BLEKTRE.swf?sene='.$v.'&var1='.$nom.'&skin1='.$skin1.'&fapen='.$fapen.'&hapenskin='.$skinhapen.'&opt1='.$opt1.'&opt2='.$opt2.'&opt3='.$opt3.'&malus1='.$malus1.'&bonus1='.$bonus1.'&malus2='.$malus2.'&bonus2='.$bonus2.'&malus12='.$malus12.'&bonus12='.$bonus12.'&malus22='.$malus22.'&bonus22='.$bonus22;
$flush=$flush.$perso2.$perso3.$perso4;
//while ($tous=mysqli_fetch_assoc($keut))
//{
//$cont++;
//$nvar='var'.$cont;
//$nskin='skin'.$cont;
//$$nvar=$tous['nom'];
//$$nskin=$tous['road4'];

//$opt=$nvar.'='.$$nvar.'&'.$nskin.'='.$$nskin;

//$flush=$flush.'&'.$opt;

//}

$flush=str_replace(" "," ",$flush);
$flush=utf8_encode($flush);

if($nom=="Hugo")
{
echo $flush;
}


?>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="550" height="400"> 
<param name="movie" value="<?php echo $flush; ?>">
<param name="quality" value="high" />
<embed src="<?php echo $flush; ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="550" height="400"></embed>
</object>
<table width="450" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <td width="135" bgcolor="#F3F3F3"><?php if($hiliscore==1)
	{
	echo '<span class="style1">Score:'.$score.'</span>';
	}
	else
	{	
	echo "Score: ".$score; 
	}
	
	?></td>
    <td width="131" bgcolor="#F3F3F3"><?php 
	if($life<20||$hililife==1)
	{
	echo '<span class="style1">Life:'.$life.'</span>';
	}
	else
	{
	echo "Life:".$life;
	}
	
	 ?></td>
	<td width="144" bgcolor="#F3F3F3"><?php if($hilimoney==1)
	{
	echo '<span class="style1">Money:'.$money.' e</span>';
	}
	else
	{	
	echo "Money: ".$money." e";
	}
	
	?></td>
  </tr>
  <tr>
    <td bgcolor="#F3F3F3"><?php if($hilisex==1)
	{
	echo '<span class="style1">Sex-appeal:'.$sex.'</span>';
	}
	else
	{	
	echo "Sex-appeal:".$sex; 
	}
	
	?></td>
    <td bgcolor="#F3F3F3"><?php if($hilifrakass==1)
	{
	echo '<span class="style1">Frakass:'.$frakass.'</span>';
	}
	else
	{	
	echo "Frakass:".$frakass; 
	}
	
	?></td>
	<td bgcolor="#F3F3F3"><?php if($hilikarma==1)
	{
	echo '<span class="style1">Karma:'.$karma.'</span>';
	}
	else
	{	
	echo "karma:".$karma; 
	}
	
	?></td
  ></tr>
</table>

<?php
if(check_point($id,'message'))
{
echo "<span class='style1'>Vous avez un message sur votre repondeur.</span>";
}
echo "<br>";

?>