
<!DOCTYPE html>
<html>
<div id="create_account" > 
    <head>
        <title>creation de compte</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="account_page.css" />
    </head>

<body id="body2">

			<form method="POST" action="index.php?page=creeCompte" class="formulaire login-form" required >
            <h1>Create account</h1>
				<br>
                <p>E-mail</p>
	  			<input id="useninfo" class="login-input" type="mail" name="mail" placeholder="Adresse mail" required>
	  			<br>
                  <p>Nom et prénom</p>
	  			<input id="useninfo" class="login-input" type="text" name="human_name" placeholder="Nom et prénom" required>
				<br>
                <p>Username</p>
	  			<input id="useninfo" class="login-input" type="text" name="username" placeholder="Identifiant" required>
	  			<br>
                <p>Password</p>
	  			<input id="useninfo" class="login-input" type="password" name="password" placeholder="Mot de passe" required>
	  			<br>
                <p>Check your password</p>
	  			<input id="useninfo" class="login-input" type="password" name="confirm-password" placeholder="Confirmer mot de passe" required>
	  			<br>
                <p>adresse de livraison</p>
	  			<input id="useninfo" class="login-input" type="number" name="numero_rue" placeholder="Numéro de rue" required>
	  			<br>
	  			<input id="useninfo" class="login-input" type="text" name="rue" placeholder="Rue" required>
	  			<br>
	  			<input id="useninfo" class="login-input" type="text" name="address_two" placeholder="Complément d'adresse" required>
	  			<br>
	  			<input id="useninfo" class="login-input" type="text" name="postal_code" placeholder="Code postal" required>
	  			<br>
	  			<input id="useninfo" class="login-input" type="text" name="city" placeholder="Ville" required>
	  			<br>
	  			<select id="useninfo" class="login-input" name="country" id="country">
	  				<optgroup label="Europe">
           				<option for="country" value="FRANCE">France</option>
           				<option for="country" value="ESPAGNE">Espagne</option>
          				<option for="country" value="ITALIE">Italie</option>
           				<option for="country" value="ROYAUME-UNI">Royaume-Uni</option>
           			</optgroup>
           			<optgroup label="Amérique du Nord">
           				<option for="country" value="CANADA">Canada</option>
           				<option for="country" value="ETATS-UNIS">États-Unis</option>
           			</optgroup>
           			<optgroup label="Asie">
           				<option for="country" value="CHINE">Chine</option>
           				<option for="country" value="JAPON">Japon</option>
           			</optgroup>
       			</select>
	  			<br><br>
	  			<input id="submitinfo" class="submit-input" type="submit" name="validation" value="Valider">
	  			<a id="useninfo" href="index.php?page=accueil">Connexion</a>
	  			<br>
			</form>

    
</body>

</div>

</html>