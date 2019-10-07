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
  <button class="tablinks" onclick="window.location.href='search.php'">Search</button>
  <button class="tablinks" onclick="openCity(event, 'Recipe')">Products page</button>
  <button class="tablinks" onclick="window.location.href='account_page.php'">Create account</button>
  <button class="tablinks" onclick="openCity(event, 'Recipe')">Cart</button>
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
        <div class="withSeveralLinks"><a href="account_page.php">Create account</a></div>
        </td>  
        </tr>



</table>
</form>


</div>
    </header>

</body>
<?php include 'footer.php';?>
</html>