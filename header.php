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
  <div class="dropdown">
  <button class="tablinks" onclick="window.location.href='product_page.html'">product page</button>
  <div class="dropdown-content">
    <a id="linkhead" href="#">Link 1</a>
    <a id="linkhead" href="#">Link 2</a>
    <a id="linkhead" href="#">Link 3</a>
  </div>
  </div>
  <button class="tablinks" onclick="window.location.href='account_page.php'">Create account</button>
  <button class="tablinks" onclick="window.location.href='cart_page.php'">cart page</button>
   </nav>
        <div class login_box>
        <form class="identify">
        <table>
            
        <tr>
        <td>Username</td>
        <td>Password</td>
        </tr>

        <tr>
        <td>
            <input id="textbox" type="text" placeholder="Username" name="" value="">
        </td>
        <td>
            <input id="textbox" type="password" placeholder="Password" name="" value="">
        </td>
        <td>
            <input id="submithead" type="submit"  name="" value="send">
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