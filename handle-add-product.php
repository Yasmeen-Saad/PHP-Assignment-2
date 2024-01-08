<?php
require('functions.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $errors = [];
    // Validating name
    if(empty($name)){
        $errors [] = 'name is required';
    } elseif(! is_string($name)){
        $errors[] = 'name must be a string';
    }elseif(strlen($name) < 5 || strlen($name) > 255){
        $errors [] = 'name min is 5 chars and max is 255 chars';
    }
    // Validating description
    if(! is_string($description)){
        $errors [] = 'description must be string';
    }
    // Validating price
    if(empty($price)){
        $errors [] = 'price is required';
    } elseif(! is_numeric($price)){
        $errors [] = 'price must be number';
    }elseif($price < 0){
        $errors [] = 'price min is 0';
    }
    
    if(count($errors) == 0){
        echo "The name is: $name <br>";
        echo $description."<br>";
        echo "The price = $price <br>";
        echo "The price After Disount = ".getPriceWithDiscount($price);
    } else{
        print_r($errors);
    }
}

