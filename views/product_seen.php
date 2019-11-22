<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="product_seen.css" />
</head>
    <body id="body1"> 
    
    <?php 

if (isset($_COOKIE['product_id']) ){ 

    $bdd = loadBDD() ;
    $prodId=$_COOKIE['product_id'];
    $prod = $bdd->query("SELECT * FROM products WHERE id = $prodId") ;
    $donnee = $prod->fetch();
    $image1 = $donnee["id"];
    $tampon=$donnee['range_id'];

    

    echo '
    <body>
    <br>
        <center>
        <h2>Vous avez consulté cet article récemment</h2>
        <table >
   
      <tr>
        <th>
        <td id=image>
        <img src="Images/'.$image1.'"png width="10%"></th>
        </td>
        <th>
        <td>
        '.$donnee["name"].' 
        </td>
        <td>
        description:'.$donnee["description"].'
        </td>
        <td>
        prix:'.$donnee["unit_price"]. '€
        </td>
        </th>
      </tr>
    
    </table>
    </br>';

    $range= $bdd->query("SELECT * FROM products WHERE range_id = $tampon and id != $prodId ") ;
    $categorie=$range->fetch();

    if (isset($categorie) ){ 

        $image2 = $categorie["id"];
        echo '
    <br>
        <center>
        <h2>Vous pourriez être intéressé par</h2>
        <table >
      <tr>
        <th>
        <td id=image>
        <img src="Images/'.$image2.'"png width="10%"></th>
        </td>
        <th>
        <td>
        '.$categorie["name"].' 
        </td>
        <td>
        description:'.$categorie["description"].'
        </td>
        <td>
        prix:'.$categorie["unit_price"]. '€
        </td>
        </th>
      </tr>
    
    </table>
    </br>
    </body>
    
    ';
    }
}

$prod->closeCursor();
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>