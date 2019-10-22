

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
    <option id="linkhead" onclick= updated() ><?php echo $range["name"];?></option>
    <?php }?>
</select>


  </div>

    <input id="search_box" type="text" name="search" onkeyup="searchFonction()" placeholder="What are you looking for?"/>
    <input id="searchButton" type="submit" name="search-button" value="search"/>

<ul id="myUL">

<?php foreach (getAllProducts() as $product) {?>
    <li><a><?php echo $product["name"];?></a></li>
    <?php }?>
  
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


</script>

    

</body>


</div>
<?php include 'footer.php';?>
</html>
