<?php

function getAllProducts(){

    $query='select * from products';
    return executeQuery($query,null);
}

function getProductById($productId)
{
    $params = array('productCode' => $productId);
    $query = "
        select p.*
          from product p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getPriceByProductId($productId)
{
    $params = array('productCode' => $recipeId);
    $query = "
        select p.unit_price
          from product p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getColorsByProductId($productId)
{
    $params = array('productCode' => $recipeId);
    $query = "
        select p.Colors.*
          from product p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getNameByProductId($productId)
{
    $params = array('productCode' => $recipeId);
    $query = "
        select p.name
          from product p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function getSizeByProductId($productId)
{
    $params = array('productCode' => $recipeId);
    $query = "
        select p.size.*
          from product p
          where p.id = '".$productId."'
    ";
    return executeQuery($query, $params);
}

function executeQuery($query, $params)
{
    //FIXME: change dbname by your own dbname
    $bdd = new PDO('mysql:host=localhost;dbname=sos', 'root','') ;
    try {
        $res = $bdd->prepare($query);
        $res->execute($params);

        $datas = $res->fetchAll();

        $res->closeCursor();

        return $datas;
    } catch (PDOException $e) {
        var_dump($e);
    }
}

function getAllRange(){
    $query='select * from ranges';
    return executeQuery($query,null);
}

function getProductsByRangeName($rangeName){
    $params = array('recipeCode' => $rangeName);
    $query = '
select p.* from products p
INNER JOIN ranges r ON p.range_id = r.id
WHERE r.name = :rangeName';
return executeQuery($query, $params);
}



?>