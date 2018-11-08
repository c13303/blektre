  <div id="texte">
  
   <?
	  unset($_COOKIE[session_name()]);

	  session_start();
	  $ids = session_id();

	$nom=$_POST['noma'];
	$password=clean($_POST['password']);
	$password2=clean($_POST['password2']);
$nom=clean($nom);


$nom=strtolower($nom);
$nom=ucfirst($nom);

$_SESSION['noma']=$nom;

require("../include/connexion.php");



// verifier l'account
  
  $verif='SELECT * FROM accounts WHERE nom="'.$nom.'";';
  $req=requete($verif);
  $data = mysqli_fetch_assoc($req);

	if ($password=='')
					{
					echo "entrez un password svp";
					exit;
					}
					
if($data['password']!=$password)
{
echo 'Wrong password baby';
exit();
}

require('check_account.php');

require('../include/go.php');


?>
</div>