<?php
$params = array('ProductID' => $productId,'OrderID' => $orderId);
$query = 'SELECT quantity FROM `order_products`
where product_id= :productID and order_id=:orderID';
$bdd = new PDO('mysql:host=localhost;dbname=sos','root','');
$oldQuantity=executeQuery($query, $params);
$newQuantity=0;
$newQuantity=$oldQuantity;
$request="UPDATE order_products set quantity='".$newQuantity."' where product_id= :productID and order_id=:orderID";
$response = $bdd->exec($request);

var_dump($response);
?>