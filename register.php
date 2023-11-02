<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="loginstyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <link rel="stylesheet" href="customerstyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Customer Input Form</title>
</head>
<body>

<?php require 'partials/_nav.php'?>

  <h1>Customer Input Form</h1>

  <form action="submit_customer_data.php" method="post">

    <label for="UserId">User ID:</label>
    <input type="text" name="user_id" id="customer_name" required>

    <br>

    <label for="customer_name">Customer Name:</label>
    <input type="text" name="customer_name" id="customer_name" required>

    <br>

    <label for="customer_address">Customer Address:</label>
    <input type="text" name="customer_address" id="customer_address" required>

    <br>

    <label for="customer_phone">Customer Phone:</label>
    <input type="tel" name="customer_phone" id="customer_phone" required>

    <br>

    <label for="customer_email">Customer Email:</label>
    <input type="email" name="customer_email" id="customer_email" required>

    <br>

    <input type="submit" value="Submit">

  </form>
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

</body>
</html>

