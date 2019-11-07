<?php 

	//TODO include database.php file
	include 'database.php' ;
	try	{			$bdd = new PDO('mysql:host=localhost;dbname=sos;charset=utf8', 'root', '');		}
	catch (Exception $e)	{	        die('Erreur : ' . $e->getMessage());		}
	//TODO start session
	session_start ();



	$user_id = '';
	$isConnected=false;
	$page='index'; 
	

	if (isset($_POST['stop']) ){			echo "SALUT";}

	
	if (isset($_SESSION['user_id'])) {		$isConnected=true;	$user_id=$_SESSION['user_id'];	}

	if(isset($_POST['identifiant']) AND isset($_POST['mdp'])  ){    include 'connection.php';    }

	if (isset($_GET['page'])){		$page=$_GET['page'];	} 
?>

<html>
	
	<head>
		<title>SOS.com</title>
		<link rel="stylesheet" href="style.css" />
	</head>
		

		<?php 
		
		if (file_exists('actions/'.$page.'.php')){ 	include ('actions/'.$page.'.php');	
		}
		
		if ($page != 'account_page.php'){		include('views/Header.php');		}

		
		?> 


		<?php 
		if (file_exists('views/'.$page)){	include ('views/'.$page);	}
		else {	include ('views/accueil.php');	}

		?> 


		<?php 
		if ($page != 'account_page.php'){		include('views/footer.php');		}

		?> 

</html>