

<html>
<link rel="stylesheet" href="quantityToAdd.css"/>
<?php
include_once 'database.php';

$pId = $_GET["idProd"];
$quantityToAdd=0;
$quantityToAdd= $_POST['quantite']; 
$tampon=0;


setcookie('product_id', $pId, time() + 365*24*3600, null, null, false, true); 


$bdd=loadBDD();
$reponse = $bdd->prepare("SELECT * FROM order_products WHERE order_id = $user_id and product_id=$pId");
$reponse->execute(array(
	));
$data=$reponse->fetch();
$reponse->closeCursor() ;

if(empty($data)) 						/*Si l'utilisateur n'a pas de panier :*/
{
  $reponse=$bdd->prepare("SELECT unit_price from products WHERE id = $pId");	
	$reponse->execute(array(
	));
	$data_products=$reponse->fetch();
  $unit_price=$data_products[0];
  
  $reponse->closeCursor();
                $requete = $bdd->prepare('INSERT INTO order_products(order_id, product_id, quantity,unit_price) VALUES(:order_id, :product_id, :quantity, :unit_price)');
                                $requete->execute(array(
                                        'order_id' => $user_id,
                                        'product_id' => $pId,
                                        'quantity' => $quantityToAdd,
                                        'unit_price' =>$unit_price
                                ));
                              }      

else{
$test = $bdd->query("SELECT quantity FROM `order_products`
where product_id= '".$pId."' and order_id='".$user_id."'");
$result = $test->fetchAll();
$oldQuantity=(int)$result[0][0];
$newQuantity=$oldQuantity+(int)$quantityToAdd;
$request="UPDATE order_products set quantity='".$newQuantity."' where product_id=$pId and order_id=$user_id";
$response = $bdd->exec($request);

$reponse = $bdd->prepare("SELECT * FROM orders_products WHERE order_id = $user_id AND product_id=$pId");
$reponse->execute(array(
  ));
$reponse->closeCursor() ;
$data=$reponse->fetch();
}
if ($quantityToAdd == 0){
    print("<center>Vous n'avez pas ajouté de produit à votre panier</center>");
} else {
    print("<center>Vous avez ajouté $quantityToAdd produit(s) à votre panier</center>");
}
?>

<div class="bouton">
  <p>
   <a id=kl href="index.php?page=product_page.php">Retour à la liste des produits</a>
 </p>
</div>
<div class="bouton">
  <p>
   <a id=kl href="index.php?page=cart_page.php">Aller à votre panier</a>
 </p>
</div>
</html>