<?php
session_start();


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

  <title>Payment Page</title>
  <link rel="stylesheet" href="paymentstyle.css">
</head>
<body>
<?php require 'partials/_nav.php'?>

 <div class="container" width="80%">

    <h1>Payment</h1>

    <form action="paymentactivity.php" method="post">
      <input type="hidden" name="order_id" value="<?php 
      
      echo $_SESSION['orderID'];
      
      ?>">

      <table class="table">
        <thead>
          <tr>
            <!-- <th>Payment ID</th> -->
            <th>Order ID</th>
            <!-- <th>Payment Amount</th> -->
            <th>Payment Method</th>
            <th>Payment Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <!-- <td><input type="text" name="payment_id" id="payment_id" placeholder="Payment ID"></td> -->
            <td><?php echo $_SESSION['orderID']; ?></td>
            <!-- <td><input type="number" name="payment_amount" id="payment_amount" placeholder="Payment Amount"></td> -->
            <td><select name="payment_method" id="payment_method">
              <option value="Cash">Cash</option>
              <option value="Credit Card">Credit Card</option>
              <option value="Debit Card">Debit Card</option>
              <option value="Net Banking">Net Banking</option>
            </select></td>
            <td><input type="date" name="payment_date" id="payment_date"></td>
          </tr>
        </tbody>
      </table>

      <input type="submit" value="Submit">
    </form>
  </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
