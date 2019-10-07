<!DOCTYPE html>
<html>
<head>
    <title>bonsoir</title>
    <link rel="stylesheet" href="css/head.css" />
</head>

<body>
    <header>
        <nav>
            <div class="menu">
            <a href="main.php">OUI</a>
            </div>

            <div class="menuCategory">
				
		    	<span class="navtitle">Recipe</span>
		    	<div class="withSeveralLinks">
			    	<a href="chicken.html">Chicken</a>
			    	<a href="beef.html">Beef</a>
				</div>
            </div>
            <form class="form-inline my-2 my-lg-0" id="loginForm" action="index.php" method="POST">
	<input type="hidden" name="page" value="login" />
	<input class="form-control form-control-sm mr-sm-2" type="text" name="login" autocomplete="username" placeholder="login" aria-label="login" value=""/>
	<input class="form-control form-control-sm mr-sm-2" type="password" name="password" autocomplete="current-password" placeholder="password" />
	<button class="btn btn-sm btn-primary my-2 my-sm-0" type="submit" value="Login">Login</button>
</form>
        </nav>
    </header>

</body>
</html>