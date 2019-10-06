<!DOCTYPE html>
<html>
<head>
    <title>titre</title>
    <link rel="stylesheet" href="head.css" />
</head>

<body>
    <header>
        <nav>
            <div class="menu">
            <a href="main.php">OUI</a>
            </div>

            <div class="menuCategory">
            <div class="tab">
  <button class="tablinks" onclick="window.location.href='search.php'">search</button>
  <button class="tablinks" onclick="openCity(event, 'Recipe')">product page</button>
  <button class="tablinks" onclick="window.location.href='account_page.php'">crée un compte</button>
  <button class="tablinks" onclick="openCity(event, 'Recipe')">cart page</button>
</div>
		    	

<p id="identification" onclick="pannaux()">s'identifier</p>



<input type="text" name="username" placeholder="Nom d utilisateur"/>
<input type="password" name="password" placeholder="mots de passe"/>
            </div>
            
        </nav>
    </header>

</body>
</html>