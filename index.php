<?php 
	//TODO start session
	session_start ();
	//TODO include database.php file
	include 'database.php' ;




	$user_id = '';
	$co=false;
	$page='index'; 
	

	if (isset($_GET['page'])){		$page=$_GET['page'];	} 



?>

<html>
	
	<head>
		<title>SOS.com</title>
		<link rel="stylesheet" href="style.css" />
	</head>


		<?php 
		include('views/header.php');
		?> 


		<?php 
		if (file_exists('views/'.$page)){	include ('views/'.$page);	}
		else {	include ('views/acceueil.php');	}

		?> 

		<?php 
		include('views/footer.php');
		?> 

</html>