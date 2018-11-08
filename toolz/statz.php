<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Stats BLEKTRE</title>
</head>

<body>
<style type="text/css" media="screen">
body {font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px;}
table {	border-collapse:collapse; margin-bottom:20px;}
td { padding:3px 0; }
.one { background:#EEE;  }
.two { background:#DFD;  }
a.other { color:#FF0000; }
</style>
<?php include('stats.php');

$a='';
if($_GET['archive']!='') {
	$a = '-'.$_GET['archive'];
} 
$file = '../log'.$a.'.txt';
$f = fopen($file,'a+'); 
if($f) {
	$ik=0;
   	while (!feof($f)) {		
       	$buffer = fgets($f, 4096);
       	$v = new visite($buffer);
		$tab[$ik] = $v;			
		$ik++;
   	}
  	fclose($f);
	sort($tab);
} 
?>
<table width="100%" border="0">
<thead><td>Site</td><td>Origine</td><td>Arrivee</td></thead>
<?php 
$i=0;
foreach($tab as $key => $v) { 
	if($v->se!='') {
		$class = ($class=='one') ? 'two' : 'one' ; 
		$cla = ($v->kw == '>>> lien <<<') ? 'other' : 'search';  	?>
		<tr class="<?=$class ?>">
			<td>				<?=$v->ndd ?>																</td>
			<td>	<a href="<?=$v->url ?>" class="<?=$cla ?>"><?=$v->kw ?></a>					</td>
			<td>				<a href="http://wiki.ardkor.com/<?=$v->res ?>"><?=$v->cleanRes()  ?></a>	</td>
		</tr>
	<?php if($cla=='search') {
		$keywords[$i++] = strtolower($v->kw);
		}
	 }
} ?>
</table>

<div id="keywords">
	<?php $aff=array_unique($keywords);
	sort($aff);
	foreach($aff as $mot){
		echo $mot.'<br/>';
	} ?>

</div>


</body>
</html>
