<?php include_once 'database.php';

?>
<!DOCTYPE html>

<html>
<head>
    <title>SOS</title>
    <link rel="stylesheet" href="head.css" />
    
</head>

<body>
    <header>
        <nav>
            <span>SOS</span>
            <div class="menuCategory">
  <button class="tablinks" onclick="window.location.href='search.php'">Search</button>
  <div class="dropdown">
  <button class="tablinks" onclick="window.location.href='product_page.php'">product page</button>
  <div class="dropdown-content">
    <?php foreach (getAllRange() as $range) {?>
    <a id="linkhead" href="product_page.php#cat_<?php echo $range['id'] ?>"> <?php echo $range["name"];?></a>
<?php }?>
    
  </div>
  </div>
  <button class="tablinks" onclick="window.location.href='account_page.php'">Create account</button>
  <button class="tablinks" onclick="window.location.href='cart_page.php'">cart page</button>
   </nav>
        <div class login_box>
        <form class="identify" >
        <table>
            
        <tr>
        <td>Username</td>
        <td>Password</td>
        </tr>

        <tr>
        <td>
            <input id="textbox" type="text" placeholder="Username" name="identifiant" value="">
        </td>
        <td>
            <input id="textbox" type="password" placeholder="Password" name="mdp" value="">
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