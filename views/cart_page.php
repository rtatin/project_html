
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
                    $bdd->query(" DELETE FROM `order_products` where id=".$_POST['delete']);
                }
                
                ?>
    <?php $total_order=0?>
     <!-- Pour l'instant, on prend que l'orderID qui est égal à 1 pour afficher dans le panier -->
    <?php foreach (getAllProductById($user_id) as $order_product) {?>
        <tr>
            <td width="25%"><?php echo($order_product['product_id'])?></td>
            <td width="25%"><?php echo($order_product['quantity'])?></td>
            <td width="25%"><?php echo($order_product['unit_price'])?>€</td>
            <?php $total_price=$order_product['unit_price']*$order_product['quantity']?>
            <?php $total_order=$total_order+$total_price?>
            <td width="15%"><?php echo $total_price?>€</td>
            <td><form method="POST">
            <button class="btn" name="delete" value="<?php echo $order_product['id']?>" type="submit">
                </form></td>
        </tr>
        <?php }?>
    </tbody>
</table>
Total order price:
        <?php echo $total_order?>€<br>
        <input type="button" width="10%" position="center" value="Place order">
</body>

</html>