<!DOCTYPE html>
<html>
<head>
    <title>titre</title>
    <link rel="stylesheet" href="head.css" />
    
</head>

<body>
    <header>
        <nav>
            <span>titre</span>
            <div class="menuCategory">
  <button class="tablinks" onclick="window.location.href='search.php'">search</button>
  <button class="tablinks" onclick="openCity(event, 'Recipe')">product page</button>
  <button class="tablinks" onclick="window.location.href='account_page.php'">crée un compte</button>
  <button class="tablinks" onclick="openCity(event, 'Recipe')">cart page</button>
        </nav>

        <div class login_box>
        <form class="identify">
        <table>
        <tr>
        <td>Username</td>
        <td>Password</td>
        </tr>
        <tr>
        <td><div class="textbox">
            <input type="text" placeholder="Username" name="" value="">
            </div>
        </td>
        <td>
            <div class="textbox">
            <input type="password" placeholder="Password" name="" value="">
            </div>
        </td>
        <td>
        <input type="submithead" name="" value="envoyer">
        </td>
        </tr>
        <tr>
        <td>
        <div><a href="account_page.php">crée un compte</a></div>
        </td>  
        </tr>



</table>
</form>


</div>
    </header>

</body>
</html>