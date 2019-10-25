


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
       
        <option id="linkhead" data-val=<?php echo $range["id"];?> onclick=updated(this) ><?php echo $range["name"];?></option>
    <?php }?>
</select>


  </div>

    <input id="search_input" type="text" name="search" onkeyup="searchFct()" placeholder="What are you looking for?"/>
    <input id="searchButton" type="submit" name="search-button" value="search"/>

<ul id="myUL">

<?php if(isset($_GET["range"])){
    
    foreach (getProductsByRangeName($_GET["range"]) as $product) {?>
    
    <li><a><?php echo $product["name"];?></a></li>
    <?php }} else{?>
 
<?php foreach (getAllProducts() as $product) {?>


    <li><a href="product_page.php#cat_<?php echo $product['name'] ?>"><?php echo $product["name"];?></a></li>
    <?php }}?>

</ul>

<script>

function searchFct() {
    var element, toUpper, elementId, Id, TagName, tamp, txtValue;
    element = document.getElementById("search_input");
    toUpper = element.value.toUpperCase();// permet de ne pas se soucier de la majuscule
    elementId = document.getElementById("myUL");
    Id = elementId.getElementsByTagName("li");

    for (tamp = 0; tamp < Id.length; i++) {
        TagName = Id[tamp].getElementsByTagName("a")[0];
        txtValue = TagName.textContent || TagName.innerText;
        if (txtValue.toUpperCase().indexOf(toUpper) > -1) {
            Id[tamp].style.display = "";
        } else {
            Id[tamp].style.display = "none";
        }
    }
}

function updated(el){
    
    console.log(el); 
    console.log(el.dataset.val);
    
    window.location = './search.php' + replaceQueryParam('range', el.dataset.val, window.location.search)
}

function replaceQueryParam(param, newval, search) {
    
    var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
    var query = search.replace(regex, "$1").replace(/&$/, '');

    return (query.length > 2 ? query + "&" : "?") + (newval ? param + "=" + newval : '');
}

</script>
</div>
</body>


<?php include 'footer.php';?>
</html>


