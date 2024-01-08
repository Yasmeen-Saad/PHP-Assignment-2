<?php

// write a function getNumMatches that searches for a word in an array of words and returns the number of matches (repetitions).

$students = ["Ali", "Ahmed", "Mona", "Hana", "Ali", "Hana", "Alaa", "Ali"];

function getNumMatches($word)
{
    $matches = 0;
    global $students;
    foreach($students as $value)
    {
        if($word == $value)
        {
            $matches ++;
        }
    }
    return $matches;
}

$test = getNumMatches("Hana");
echo "The number of matches is $test";


// write a function getPriceWithDiscount that takes the price and returns the price after discount.
// discount is 10% for prices less than 1000
// and 5% for prices greater than or equal 1000

function getPriceWithDiscount($price)
{
    if($price < 1000)
    {
        $discount = $price * 0.1;
    } elseif($price >= 1000)
    {
        $discount = $price * 0.05;
    }
    $price = $price -$discount;
    return $price;
}

// $test = getPriceWithDiscount(100);
// echo "The price After Discount = $test";