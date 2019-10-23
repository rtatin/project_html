


<?php require "header.php";?>
<html>
<head>
    <title>search</title>
    <link rel="stylesheet" href="search.css" />
</head>


 
<body>



    <div class="search">
    <div class="dropdown-search">
<select name="category1" id="category-select" onchange="updated(this)">
    <option value="">select a category</option>
    <?php foreach (getAllRange() as $range) {?>
        <!-- Ici j'ai mis un attribut data-val qui va me permettre de recup la valeur apres en js
        
        https://developer.mozilla.org/fr/docs/Apprendre/HTML/Comment/Utiliser_attributs_donnes
        
        Un petit tuto sur ce que c'est et comment je les recupere en JS

        Ici, chaque categorie a un attribut de donnée "data-val", dont la valeur va etre l'id de la categorie 
        Ca va permettre de recupere exactement tous les produits qui ont comme categorie cette id

        J'ai rajouté le onclick=updated(this), a voir plus bas
        -->
        <option id="linkhead" data-val=<?php echo $range["id"];?> onclick=updated(this) ><?php echo $range["name"];?></option>
    <?php }?>
</select>


  </div>

    <input id="search_box" type="text" name="search" onkeyup="searchFonction()" placeholder="What are you looking for?"/>
    <input id="searchButton" type="submit" name="search-button" value="search"/>

<ul id="myUL">

<?php if(isset($_GET["range"])){
    // Je verifie si il y a un parametre "range" dans la requete GET

    // Une requete GET c'est simplement quand on veut acceder au site : GET http://localhost/projet/search.php

    //Pour mettre des parametres, c'est "?name_param=valeur_param"
    // Si on a plusieur param : requete?param1=val1&param2=val2

    //isset permet de faire le test si le param existe

    foreach (getProductsByRangeName($_GET["range"]) as $product) {?>
    <!-- Si le param existe, je réucpere l'ensemble des produits associé à la categorie
    
    En effet, le param range contient l'id de la categorie
    
    Donc range va etre égal à : 1 ou 2 ou 3 ou 4 etc ...
    
    Dans la sql, c'est pour ca que je fais le "WHERE r.id = :rangeID", car je recupere l'ensemble des produits ou l'id de la colonne range c'est la valeur souhaité
    
    N'oubliez pas : ":rangeID", c'est simplement une syntaxe du framework que vous utilisez pour acceder à la BDD
    
    Il va simplement remplacer le ":rangeID" par la valeur que vous lui passer (que vous definissez dans l'array $params)
    
    Bref et apres on affiche simplement son name -->
    <li><a><?php echo $product["name"];?></a></li>
    <?php }} else{?>
 
<?php foreach (getAllProducts() as $product) {?>

<!-- La rien de compliquer, vous l'avez fait -->
    <li><a><?php echo $product["name"];?></a></li>
    <?php }}?>

</ul>

<script>
function searchFonction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("search_box");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function updated(el){
    // Ici c'est la fonction qu'on appelle quand on change de range 
    // Elle prends en argument l'element qui l'appelle (d'où le "this" dans le onclick)

    //Vous pouvez l'afficher dans la console avec :
    console.log(el); // ne pas oublier de commander les lignes après

    // Cette argument permet de retrouver les attributs data associé 
    // Imaginons qu'on a mis un attribut data-nomAttribut
    // Pour y acceder, element.dataset.nomAttribut
    console.log(el.dataset.val);
    // Ici j'affiche la valeur qui nous interesse (l'id du range selectionné)

    // Window.location represente l'adresse sur lequel on est :

    //Window.location = www.google.fr; Va vous amener sur la page de google, amusez avec
    // Du coup je redefini la location de la page, en remplacant le parametre range
    // Si je fais ca, c'est au cas on a : search.php?range=1
    // Je veux remplacer la valeur 1 par la nouvelle
    // Voir l'explication (courte) de la fonction en bas
    window.location = './search.php' + replaceQueryParam('range', el.dataset.val, window.location.search)
}

function replaceQueryParam(param, newval, search) {
    // Cette fonction permet comme son nom l'indique de modifier la valeur d'un param dans l'adresse

    // Fonction trouvé ici : https://stackoverflow.com/questions/1090948/change-url-parameters
    // Je l'utilise dans la function updated, pour justement changer d'adresse avec la nouvelle variable qui m'interesse

    var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
    var query = search.replace(regex, "$1").replace(/&$/, '');

    return (query.length > 2 ? query + "&" : "?") + (newval ? param + "=" + newval : '');
}




</script>

    

</body>


</div>
<?php include 'footer.php';?>
</html>
