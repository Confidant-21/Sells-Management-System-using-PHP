<?php
session_start();


?>


<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="billstyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Payment Page</title>
  <link rel="stylesheet" href="paymentstyle.css">
</head>
<body>
<?php require 'partials/_nav.php'?>


    <div class="bill-container">
        <h1>Order Bill</h1>
        <table id="billID" class="bill-table">
            <tr>
                <th>Category</th>
                <th>Item</th>
                <th>Details</th>
            </tr>
            <?php
//session_start();
$productid = $_SESSION['userID'];

$conn = new mysqli('localhost', 'root', '', 'miniproject');

$sql = "SELECT * FROM `customer` WHERE Customer_ID = '$productid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<tr>';
    echo '<td rowspan="5"><strong>Customer Information</strong></td>';
    echo '<td>Customer ID</td>';
    echo '<td>' . $productid . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Customer Name</td>';
    echo '<td>' . $row['Customer_Name'] . '</td>';
    echo '</tr>';
    echo'<tr>';
    echo '<td>Customer Address</td>';
    echo '<td>'.$row['Customer_Address'].'</td>';
    echo'</tr>';
    echo'<tr>';
    echo '<td>Customer Phone</td>';
    echo '<td>'.$row['Customer_Phone'].'</td>';
    echo'</tr>';
    echo'<tr>';
    echo '<td>Customer Email</td>';
    echo '<td>'.$row['Customer_Email'].'</td>';
    echo'</tr>';
            
} else {
    echo "Error";
    // Handle the case where no product with the given ID is found
}

$conn->close();
?>


           
            <?php
//session_start();
$productid = $_SESSION['productID'];

$conn = new mysqli('localhost', 'root', '', 'miniproject');

$sql = "SELECT * FROM `product` WHERE Product_ID = '$productid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<tr>';
    echo '<td rowspan="4"><strong>Product Information</strong></td>';
    echo '<td>Product ID</td>';
    echo '<td>' . $productid . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Product Name</td>';
    echo '<td>' . $row['Product_Name'] . '</td>';
    echo '</tr>';
    echo'<tr>';
    echo '<td>Product Description</td>';
    echo '<td>'.$row['Product_Description'].'</td>';
    echo'</tr>';
    echo'<tr>';
    echo '<td>Product Price</td>';
    echo '<td>'.$row['Product_Price'].'</td>';
    $_SESSION['price'] = $row['Product_Price'];
    echo'</tr>';
    // echo'<tr>';
    // echo '<td>Product Quantity</td>';
    // echo '<td>'.$row['Product_Quantity'].'</td>';
    // //$_SESSION['product_quantity'] = $row['Product_Quantity'];
    // echo'</tr>';
            
} else {
    echo "Error";
    // Handle the case where no product with the given ID is found
}

$conn->close();
?>

<?php
//session_start();
$productid = $_SESSION['orderID'];

$conn = new mysqli('localhost', 'root', '', 'miniproject');

$sql = "SELECT * FROM `order` WHERE Order_ID = '$productid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<tr>';
    echo '<td rowspan="4"><strong>Order Information</strong></td>';
    echo '<td>Order ID</td>';
    echo '<td>' . $productid . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Order Date</td>';
    echo '<td>' . $row['Order_Date'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Order Status</td>';
    echo '<td>' . $row['Order_Status'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Order Quantity</td>';
    echo '<td>' . $row['Quantity'] . '</td>';
    $_SESSION['product_quantity'] = $row['Quantity'];
    echo '</tr>';
        
} else {
    echo "Error";
    // Handle the case where no product with the given ID is found
}

$conn->close();
?>                        

<?php
//session_start();
$productid = $_SESSION['paymentID'];

$conn = new mysqli('localhost', 'root', '', 'miniproject');

$sql = "SELECT * FROM `payment` WHERE Payment_ID = '$productid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<tr>';
    echo '<td rowspan="4"><strong>Payment Information</strong></td>';
    echo '<td>Payment ID</td>';
    echo '<td>' . $productid . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Payment Amount</td>';
    //echo '<td>' . $row['Payment_Amount'] . '</td>';

    $totalAmount = 0;
    
// Check if the session variable exists and is set
if (isset($_SESSION['product_quantity']) && isset($_SESSION['price'])) {
    $quantity = intval($_SESSION['product_quantity']);
    $amount = floatval($_SESSION['price']);
    
    // Calculate the total amount
    $totalAmount= $amount * $quantity;

    // Display the total amount
   
    echo '<td>' . $totalAmount . '</td>';
} else {
    echo '<td>Error: Missing or invalid data</td>';
}

    //echo '<td>' . $row['Payment_Amount'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Payment Method</td>';
    echo '<td>' . $row['Payment_Method'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Payment Date</td>';
    echo '<td>' . $row['Payment_Date'] . '</td>';
    echo '</tr>';
        
} else {
    echo "Error";
    // Handle the case where no product with the given ID is found
}

$conn->close();
?>

<?php
//session_start();
$productid = $_SESSION['shipmentID'];

$conn = new mysqli('localhost', 'root', '', 'miniproject');

$sql = "SELECT * FROM `shipment` WHERE Shipment_ID = '$productid'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<tr>';
    echo '<td rowspan="5"><strong>Shipment Information</strong></td>';
    echo '<td>Shipment ID</td>';
    echo '<td>' . $productid . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Shipping Address</td>';
    echo '<td>' . $row['Shipping_Address'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Shipping Method</td>';
    echo '<td>' . $row['Shipping_Method'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Shipping Date</td>';
    echo '<td>' . $row['Shipping_Date'] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Shipment Status</td>';
    echo '<td>' . $row['Shipment_Status'] . '</td>';
    echo '</tr>';
        
} else {
    echo "Error";
    // Handle the case where no product with the given ID is found
}

$conn->close();

?>

           
        </table>
        <form action="pdf.php" method="post">
        <div class="center-container" >
        <button id="center-button">Logout </button>
</form>
    </div>
    </div>



    
        </table>
    </div> 

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script>
        var buttonEle = document.querySelector("#center-button");
        buttonEle.addEventListener('click', function(){
        var pdfContent = document.getElementById("billID").innerHTML;
        var windowObject = window.open();
        
        windowObject.document.write(pdfContent.substr(47940));
        windowObject.print();
        windowObject.close();
    })
    </script> -->

</body>
</html>
