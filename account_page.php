<!DOCTYPE html>
<?php include 'header.php';?>




<html>
    <head>
        <title>creation de compte</title>
        <link rel="stylesheet" href="account_page.css" />
    </head>
<body>
<div id="login-box"></div>
<div class="box"></div>

<form class="formulaire">
<h1>crée un compte</h1>
<p>username</p>
<input type="text" name="username" placeholder="Nom d utilisateur"/>
<p>email</p>
<input type="text" name="email" placeholder="Email"/>
<p>password</p>
<input type="password" name="password" placeholder="mots de passe"/>
<p>check your password</p>
<input type="password" name="password2" placeholder="mots de passe"/>

<input type="submitinfo" name="signup-button" placeholder="envoyer"/>
</form>
</body>
<?php include 'footer.php';?>
</html>