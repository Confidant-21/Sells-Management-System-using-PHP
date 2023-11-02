<!DOCTYPE html>
<html>
<head>

      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="loginstyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <link rel="stylesheet" href="productstyle.css">
  <title>Product Form</title>
</head>
<body>

<?php require 'partials/_nav.php'?>

  <h1>Product Form</h1>

  <form action="submit_product_data.php" method="post">

    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" id="product_name" required>

    <br>

    <label for="product_description">Product Description:</label>
    <textarea name="product_description" id="product_description" rows="5" cols="33" required></textarea>

    <br>

    <label for="product_price">Product Price:</label>
    <input type="number" name="product_price" id="product_price" required>

    <br>

    <label for="product_quantity">Product Quantity:</label>
    <input type="number" name="product_quantity" id="product_quantity" required>

    <br>

    <input type="submit" value="Submit">

  </form>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>
