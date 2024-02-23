<?php

require ('connection.php');

$title = $_POST["title"];
$firstName = $_POST["firstName"];
$middleName = $_POST["MiddleName"];
$lastName = $_POST["lastName"];
$contactNumber = $_POST["contactNumber"];
$district = $_POST["district"];




$r = Database::search("SELECT * FROM `customer` WHERE `contact_no`='".$contactNumber."'");
    $n = $r->num_rows;

    if ($n > 0) {
        echo "customer already exists.";
    } else if (preg_match("/07[0,1,2,4,5,6,7,8][0-9]+/", $contactNumber) == 0) {
        echo "Invalid Mobile Number";
    }else {
       
        Database::iud("INSERT INTO `customer` (`title`,`first_name`,`middle_name`,`last_name`,`contact_no`,`district`) 
        VALUES('" . $title . "','" . $firstName . "','" . $middleName . "','" . $lastName . "','" . $contactNumber . "','" . $district . "')");

        echo "New Customer Added.";
    }

