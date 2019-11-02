<?php 
	//TODO start session
	session_start ();
	//TODO include database.php file
	include 'database.php' ;




	$user_id = '';
	$co=false;
	$page='index'; 
	
	if (isset($_POST['stop']) ){echo "SALUT";}

	if (isset($_POST['deco']) ){
    		session_unset ();
			session_destroy ();
    }

	if (isset($_SESSION['identifiant']) && isset($_SESSION['password'])) {		$co=true;		}

	if(isset($_POST['identifiant']) AND isset($_POST['mdp'])  ){    include 'connexion.php';    }

	if (isset($_GET['page'])){		$page=$_GET['page'];	} 

	if (file_exists('actions/'.$page.'.php')){	include ('actions/'.$page.'.php');	}

?>

<html>
	
	<head>
		<title>SOS.com</title>
		<link rel="stylesheet" href="style.css" />
	</head>


		<?php 
		include('C:\wamp64\www\projet_web\views\header.php');
		?> 


		<?php 
		if (file_exists('views/'.$page.'.php')){	include ('views/'.$page.'.php');	}
		else {	include ('C:\wamp64\www\projet_web\views\acceueil.php');	}

		?> 

		<?php 
		include('C:\wamp64\www\projet_web\views\footer.php');
		?> 

</html>