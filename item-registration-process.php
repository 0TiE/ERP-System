<?php

require('connection.php');

$itemCode = $_POST["itemCode"];
$itemName = $_POST["itemName"];
$itemCategory = $_POST["itemCategory"];
$itemSubCategory = $_POST["itemSubCategory"];
$quantity1 = $_POST["quantity"];
$unitprice = $_POST["unitprice"];




$r = Database::search("SELECT * FROM `item` WHERE `item_code`='" . $itemCode . "'");
$n = $r->num_rows;

if ($n > 0) {
    echo "item  already exists.";
} else {

    Database::iud("INSERT INTO `item` (`item_code`,`item_category`,`item_subcategory`,`item_name`,`quantity`,`unit_price`) 
        VALUES('" . $itemCode . "','" . $itemName . "','" . $itemCategory . "','" . $itemSubCategory . "','" . $quantity1 . "','" . $unitprice . "')");

    echo "New item Added.";
}

