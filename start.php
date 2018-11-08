  <div id="texte">
  
   <?php
	  unset($_COOKIE[session_name()]);

	  session_start();
	  $ids = session_id();

	$nom=$_POST['noma'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$nom=clean($nom);
	$noma=$nom;



$noma=ucfirst($noma);

$_SESSION['noma']=$noma;

require("include/connexion.php");



// verifier l'account
  
  $verif='SELECT * FROM accounts WHERE nom="'.$noma.'";';
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

require('pages/check_account.php');

require('include/go.php');


?>
</div>