<?php 

	//TODO include database.php file
	include 'database.php' ;
	try	{			$bdd = new PDO('mysql:host=localhost;dbname=sos;charset=utf8', 'root', '');		}
	catch (Exception $e)	{	        die('Erreur : ' . $e->getMessage());		}
	//TODO start session
	session_start ();



	$user_id = '';
	$isConected=false;
	$page='index'; 
	

	if (isset($_POST['stop']) ){			echo "SALUT";}

	
	if (isset($_SESSION['user_id'])) {		$isConected=true;		}

	if(isset($_POST['identifiant']) AND isset($_POST['mdp'])  ){    include 'conexion.php';    }

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
		else {	include ('views/acceueil.php');	}

		?> 


		<?php 
		if ($page != 'account_page.php'){		include('views/footer.php');		}

		?> 

</html>