<?php
			
            $identifiant = $_POST['identifiant'] ;
            $mdp = $_POST['mdp'] ;
            $result = $bdd->query('SELECT * FROM users');
            $donnee = $result->fetch();
            while($donnee != null){
                if($donnee['username']==$identifiant AND $donnee['password']==$mdp){
                    $user_id = $donnee['id'];
                    $_SESSION['user_id'] = $user_id;
                    $isConected=true;
                }
                $donnee = $result->fetch();
            } 
            $result->closeCursor();
        
    ?>