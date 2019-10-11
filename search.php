

<?php require "header.php";?>
<html>
<head>
    <title>search</title>
    <link rel="stylesheet" href="search.css" />
</head>


 
<body>
    <div class="search">
    <div class="dropdown-search">
<select name="category1" id="category-select">
    <option value="">select a category</option>
    <?php foreach (getAllProducts() as $products) {?>
    <option id="linkhead" href="recipe.php?recipe="><?php echo $products["name"];?></option>
    <?php }?>
</select>

  
  </div>

    <input id="search_box" type="text" name="search" placeholder="What are you looking?"/>
    <input id="searchButton" type="submit" name="search-button" value="search"/>

</body>


</div>
<?php include 'footer.php';?>
</html>
