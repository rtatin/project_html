<?php require "header.php";?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Nos Produits</title>
    <link rel="stylesheet" href="product_page.css" />

</head>
<body id="body1">
<center><caption><font size="25" face="Calibri"><b>Nos Produits</b></font></caption></center>
<br>

<?php foreach (getAllProducts() as $products) {?>
    <center>
<table id="table1" border>
    <thead><tr>
        <th colspan="2", height="70">
            <p id="titre"> <?php echo $products["name"];?></p>
        </th>
    </tr></thead>
    <tbody><tr>
        <td id="image" >
            <img src='https://www.eminence.fr/img/i-11733-10/chemise_homme_manches_longues_eminence_-_coton_melange_-_palmier_bleu_60.jpg' align='center' height="300" width="300"/>
        </td>
        <td id="tableau">
            <br>
            <br>
            <dd>
            <label for="name">Taille:</label>
            <select name="nom" size="1"><option>XS</option><option>S</option><option>M</option><option>L</option><option>XL</option><option>XXL</option></select>
            </dd>
            <br>
            <br>
            <dd>
            <label for="name">Couleurs:</label>
            <select name="nom" size="1"><option>Rouge</option><option>Bleu</option><option>Noir</option><option>Blanc</option><option>Camel</option><option>Gris</option></select>
            </dd>
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
            <?php echo $products["unit_price"];?>
            €
            </a>
            </dd>
            <br>
            <br>
            <a id=quantity>
            <input id ="result" type="texte" value="1" maxlength="2" />
            </a>

            <dd><button><a href=''>Add to Cart</a></button></dd>
        </td>
    </tr></tbody>
</table>
</div>
</center>
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
<?php include 'footer.php';?>
</html>