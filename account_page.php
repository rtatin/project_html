
<?php require "header.php";?>



<html>
<div id="create_account" > 
    <head>
        <title>creation de compte</title>
        <link rel="stylesheet" href="account_page.css" />
    </head>
<body id="body2">
<form class="formulaire">
<h1>Create account</h1>
<p>Username</p>
<input id="useninfo" type="text" name="Username" placeholder="Enter Username"/>
<p>E-mail</p>
<input id="useninfo"type="text" name="email" placeholder="E-mail"/>
<p>Password</p>
<input id="useninfo" type="password" name="password" placeholder="Enter password"/>
<p>Check your password</p>
<input id="useninfo" type="password" name="password2" placeholder="Enter again password"/>
<p>numero</p>
<input id="useninfo"type="text" name="biling_adress_id" placeholder="numero"/>
<p>adresse de livraison</p>
<input id="useninfo"type="text" name="delivery_adress_id" placeholder="adresse de livraison"/>

<input id="submitinfo" type="submit" name="signup-button" value="Sign up"/>
</form>


</body>

</div>
<?php include 'footer.php';?>
</html>