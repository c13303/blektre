  <?

// fonctions
require("../include/connexion.php");
require("../include/fonctions.php");

if(!$_SESSION['pid'])erreur('lost session');

$entree='';
$entree2='';



	$sess_hapen = $_GET['hapen'];

	$fplace=$_SESSION['fplace'];
	unset($_SESSION['hapen']);





//FLASH


?>

