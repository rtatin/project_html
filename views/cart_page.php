
<head>
<link rel="stylesheet" href="cart_page.css" />
</head>
<html>
<body>


<table class="tableCart">
    <thead>
        <tr>
        <th style="text-align:left;" width="15%">Product ID</th>
        <th style="text-align:left;" width="5%">Quantity</th>
        <th style="text-align:left;" width="10%">Unit Price</th>
        <th style="text-align:left;" width="10%">Total</th>
        </tr>
    </thead>
    <tbody> 
    <?php if (isset($_POST['delete'])){
        $bdd=loadBDD();
                $bdd->query(" DELETE FROM `order_products` where product_id=".$_POST['delete']);
                }
                
                ?>
    <?php if (isset($_POST['decrease'])){
        $bdd=loadBDD();
            $test = $bdd->query("SELECT quantity FROM `order_products` where order_id=$user_id and product_id=".$_POST['decrease']);
            $result = $test->fetchAll();
            $quantity=(int)$result[0][0];
            if($quantity>1){
                $quantity=$quantity-1;
                $request="UPDATE order_products set quantity='".$quantity."' where order_id=$user_id and product_id=".$_POST['decrease'];
                $response = $bdd->exec($request);
            }
    }                
                ?>
    <?php if (isset($_POST['increase'])){
      $bdd=loadBDD();
      $test = $bdd->query("SELECT quantity FROM `order_products` where order_id=$user_id and product_id=".$_POST['increase']);
      $result = $test->fetchAll();
      $quantity=(int)$result[0][0];
      $quantity=$quantity+1;
      $request="UPDATE order_products set quantity='".$quantity."' where order_id=$user_id and product_id=".$_POST['increase'];
      $response = $bdd->exec($request);
}              
          ?>
    <?php if (isset($_POST['place_order'] )){
        if ($_POST['place_order']!=0){
      $bdd=loadBDD();
      $requete = $bdd->prepare('INSERT INTO orders (user_id,type,status,amount,billing_adress_id,delivery_adress_id) VALUES (:user_id, :type, :status, :amount, :billing_adress_id, :delivery_adress_id)');
      $requete->execute(array(
              'user_id' => $user_id,
              'type' => "ORDER",
              'status' => "BILLED",
              'amount' => $_POST['place_order'],
              'billing_adress_id' => $billing_adress_id,
              'delivery_adress_id' => $delivery_adress_id
              
      ));
      echo('ORDER IS PLACED');

      $bdd->query(" DELETE FROM `order_products` where order_id=$user_id");}
      else{
        echo('ERROR, EMPTY CART');
      }
}   ?>         

    <?php $total_order=0?>
    <?php foreach (getAllProductById($user_id) as $order_product) {?>
        <tr>
            <td width="25%">
            <?php 
                        $image=$order_product['product_id'];
                        echo '<img src="Images/'.$image.'"png width="25%">';?>
            </td>
            <td width="25%"><form method="POST"><button class="btn" value="<?php echo $order_product['product_id']?>" width="3%" name="decrease">-</button></form><?php echo($order_product['quantity'])?><form method="POST"><button class="btn" value="<?php echo $order_product['product_id']?>" width="3%" name="increase">+</button></form></td>
            <td width="25%"><?php echo($order_product['unit_price'])?>€</td>
            <?php $total_price=$order_product['unit_price']*$order_product['quantity']?>
            <?php $total_order=$total_order+$total_price?>
            <td width="15%"><?php echo $total_price?>€</td>
            <td><form method="POST">
            <button class="btn" width="10%" position="center" name="delete" value="<?php echo $order_product['product_id']?>" type="submit">Delete</button>
                </form></td>
        </tr>
        <?php }?>
    </tbody>
</table>
Total order price:
        <?php echo $total_order?>€<br>
</body>
<form method="POST">
<button class="btn" width="10%" position="center" name="place_order" value="<?php echo $total_order?>" type="submit">Placer order</button>
</form>
</html>