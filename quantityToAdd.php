<html>
<link rel="stylesheet" href="quantityToAdd.css"/>
<?php
include_once 'database.php';
$quantityToAdd=0;
$quantityToAdd= $_POST['quantite']; 
$oldQuantity=getQuantityByProduct(1, 1, $quantityToAdd)[0][0];
$oldQuantity=(int)$oldQuantity;
$newQuantity=$oldQuantity+(int)$quantityToAdd;
$request="UPDATE order_products set quantity='".$newQuantity."' where product_id= 1 and order_id=1";
$bdd = new PDO('mysql:host=localhost;dbname=sos', 'root','') ;
$response = $bdd->exec($request);

if ($quantityToAdd == 0){
    print("<center>Vous n'avez pas ajouté de produit à votre panier</center>");
} else {
    print("<center>Vous avez ajouté $quantityToAdd produit(s) à votre panier</center>");
}
?>

<div class="bouton">
  <p>
   <a href="product_page.php">Retour à la liste des produits</a>
 </p>
</div>
<div class="bouton">
  <p>
   <a href="cart_page.php">Aller à votre panier</a>
 </p>
</div>
</html>