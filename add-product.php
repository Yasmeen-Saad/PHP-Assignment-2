<?php
// write a script add-product.php containing a form to add new product 
?>

<form method="POST" action="handle-add-product.php">
    <input type="text" placeholder="Name" name="name">
    <br>
    <textarea cols="30" rows="10" name="description">Description</textarea>
    <br>
    <input type="number" placeholder="Price" name="price">
    <br>
    <input type="submit" value="Add" name="submit">
</form>