
<html>
<head>
    <meta charset="utf-8" />
    <title>Nos Produits</title>
    <link rel="stylesheet" href="product_page.css" />

</head>
<body id="body1">
<center><caption><font size="25" face="Calibri"><b>Nos Produits</b></font></caption></center>
<br>
<?php foreach (getAllRange() as $range) {?>
        <h1 id="cat_<?php echo $range["id"] ?>"> <?php echo $range["name"];?> </h1>

<?php foreach (getAllProductByRange($range["id"]) as $products) {?>
    <center>
<table id="table1" border>
    <thead><tr>
        <th colspan="2", height="70">
            <p id="cat_<?php echo $products["name"] ?>"> <?php echo $products["name"];?></p>
        </th>
    </tr></thead>
    <tbody><tr>
    
        <td id="image" >
                    <?php 
                        $image=$products["id"];
                        echo '<img src="Images/'.$image.'"png width="100%">';
                    ?>
        </td>
        <td id="tableau">
            <br>
            <br>
            
            
            <dd>
            <a style="border-style: none;" cols = 80 rows = 5>
            description:
            <?php echo $products["description"];?>
            </a>
            </dd>
            <br>
            <br>
            <dd>
            <a style="border-style: none;" cols = 10 rows = 2>
            prix:
            <?php echo $products["unit_price"];?>€
            </a>
            </dd>
            <br>
            <br>
            <form action="index.php?page=quantityToAdd.php&idProd=<?php echo $products['id']?>"; method="post">
            Quantité : <input type="number" name="quantite" size="3"><br>
            <input type="submit" value="OK">
            </form>
            </td>
    </tr></tbody>
</table>
</div>
</center>
<?php }?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php }?>

</body>
</html>