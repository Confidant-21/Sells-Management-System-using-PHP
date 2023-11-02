<?php
session_start();

if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] != true)
{
  header("location: login.php");
  exit;
}


?>

<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="loginstyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="show_Product_Style.css">
  <title>Select Products</title>
</head>
<body>
<?php require 'partials/_nav.php'?>
  <h1>Products List</h1>

  <table border="1">
    <thead>
      <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Price</th>
        <th>Product Quantity</th>
        <th>Select</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $conn = new mysqli('localhost', 'root', '', 'miniproject');

        $sql = 'SELECT * FROM `product`';
        $result = $conn->query($sql);

        if ($result) {
          while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['Product_ID'] . '</td>';
            echo '<td>' . $row['Product_Name'] . '</td>';
            echo '<td>' . $row['Product_Description'] . '</td>';
            echo '<td>' . $row['Product_Price'] . '</td>';
            echo '<td>' . $row['Product_Quantity'] . '</td>';
            echo '<td><input type="checkbox" name="selected_products[]" value="' . $row['Product_ID'] . '"></td>';
            echo '</tr>';
          }
        } else {
          echo 'Error fetching product data.';
        }

        $conn->close();
      ?>
    </tbody>
  </table>

  <br>
  <body>


</body>
  


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>
