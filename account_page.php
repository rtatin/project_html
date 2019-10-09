
<?php require "header.php";?>



<html>
<div style="width:25px;height:700px;overflow:auto; margin:auto;"> 
    <head>
        <title>creation de compte</title>
        <link rel="stylesheet" href="account_page.css" />
    </head>
<body>
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

<input id="submitinfo" type="submit" name="signup-button" value="Sign up"/>

</form>
</body>
<?php include 'footer.php';?>
</div>
</html>