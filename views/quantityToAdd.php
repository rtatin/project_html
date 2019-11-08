<html>
<link rel="stylesheet" href="quantityToAdd.css"/>
<?php
include_once 'database.php';
$reponse = $bdd->prepare("SELECT * FROM orders WHERE user_id = :user_id AND status = :status");
$reponse->execute(array(
		'user_id'=>$user_id,
		'status'=>'CART'
	));
$data=$reponse->fetch();

if(empty($data)) 						/*Si l'utilisateur n'a pas de panier :*/
{ 
$pId = $_GET["idProd"];
var_dump($pId);
var_dump($user_id);
$quantityToAdd=0;
$quantityToAdd= $_POST['quantite']; 
$test = $bdd->query("SELECT quantity FROM `order_products`
where product_id= '".$pId."' and id='".$user_id."'");
$result = $test->fetchAll();
$oldQuantity=(int)$result[0][0];
$newQuantity=$oldQuantity+(int)$quantityToAdd;
$request="UPDATE order_products set quantity='".$newQuantity."' where product_id=$pId and id=$user_id";
$response = $bdd->exec($request);

if ($quantityToAdd == 0){
    print("<center>Vous n'avez pas ajouté de produit à votre panier</center>");
} else {
    print("<center>Vous avez ajouté $quantityToAdd produit(s) à votre panier</center>");
}
?>

<div class="bouton">
  <p>
   <a href="index.php?page=product_page.php">Retour à la liste des produits</a>
 </p>
</div>
<div class="bouton">
  <p>
   <a href="index.php?page=cart_page.php">Aller à votre panier</a>
 </p>
</div>
<?php } ?>
</html>