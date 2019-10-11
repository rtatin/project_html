<?php

function getAllProducts(){

    $query='select * from products';
    return executeQuery($query,null);
}

function getProductByCode($productCode)
{
    $params = array('productCode' => $productCode);
    $query = "
        select p.*
          from product p
          where p.code = '".$productCode."'
    ";
    return executeQuery($query, $params);
}

function getPriceByProductCode($productCode)
{
    $params = array('productCode' => $recipeCode);
    $query = "
        select p.unit_price
          from product p
          where p.code = '".$productCode."'
    ";
    return executeQuery($query, $params);
}

function getColorsByProductCode($productCode)
{
    $params = array('productCode' => $recipeCode);
    $query = "
        select p.Colors.*
          from product p
          where p.code = '".$productCode."'
    ";
    return executeQuery($query, $params);
}

function getNameByProductCode($productCode)
{
    $params = array('productCode' => $recipeCode);
    $query = "
        select p.name
          from product p
          where p.code = '".$productCode."'
    ";
    return executeQuery($query, $params);
}

function getSizeByProductCode($productCode)
{
    $params = array('productCode' => $recipeCode);
    $query = "
        select p.size.*
          from product p
          where p.code = '".$productCode."'
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

?>