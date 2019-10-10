<?php require "header.php";?>
<head>
<link rel="stylesheet" href="cart_page.css" />
</head>
<html>
<body>
<table class="tableCart">
    <thead>
        <tr>
        <th style="text-align:left;" width="15%">Name</th>
        <th style="text-align:left;" width="5%">Quantity</th>
        <th style="text-align:left;" width="10%">Unit Price</th>
        <th style="text-align:left;" width="10%">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td width="25%">Shoes</td>
            <td width="15%">5</td>
            <td width="15%">10€</td>
            <td width="20%">50€</td>
            <td><input type="button" width="20%" position="center" value="Remove"></td>
        </tr>
    </tbody>
</table>
</body>
<?php include 'footer.php';?>
</html>