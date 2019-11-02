

<!DOCTYPE html>

<html>

<header>
<head>
    <title>SOS</title>
    <link rel="stylesheet" href="head.css" />
    
</head>

<body>
    <nav>
    <span>SOS</span>


<?php 
	if ($co==false){
		echo '
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
        <div ><a href="index.php?page=account_page.php">Create account</a></div>
        </td>  
        </tr>
</table>
</form>
</div>

		' ;
	}
		
	else {
		echo '
		<a href="index.php?page=accueil">  <form action="index.php?page=accueil" id="deconnexion" method="post"> 
		     <input type="hidden" type="text" name="deco" value="decon"/>
	    	<input type="submit" value="Me déconnecter" /></form> </a>
		';
}?>
	</div>

</div>

<div class="menuCategory">
  <button class="tablinks" onclick="window.location.href='index.php?page=search.php'">Search</button>
  <div class="dropdown">
  <button class="tablinks" onclick="window.location.href='index.php?page=product_page.php'">product page</button>
  <div class="dropdown-content">
    <?php foreach (getAllRange() as $range) {?>
    <a id="linkhead" href="product_page.php#cat_<?php echo $range['id'] ?>"> <?php echo $range["name"];?></a>
<?php }?>
    
  </div>
  </div>
  <button class="tablinks" onclick="window.location.href='index.php?page=account_page.php'">Create account</button>
  <button class="tablinks" onclick="window.location.href='index.php?page=cart_page.php'">cart page</button>
   </nav>	

</header>

</html>