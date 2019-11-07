
<?php
			session_start();
    		session_unset ();
			session_destroy ();
			$isConected=false;
			header('Location: index.php?');
?>
