<?php

session_start();
//$_SESSION['userID'];


if($_SERVER['REQUEST_METHOD']=='POST'){
    $productid = $_POST['product_id'];
    $qty = $_POST['quantitie'];
    //$unique_id = "";
    $unique_id = uniqid().mt_rand();

//echo $unique_id;
   $_SESSION['productID'] = $productid;
   $_SESSION['orderID'] = $unique_id;


    $servername = "localhost";
    $username  = "root";
    $password = "";
    $database = "miniproject";

    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn)
    {
        die("Connection not established". mysqli_error());
    }
    else
    {
        echo"Connection Established";
    }

    if(mysqli_select_db($conn, $database))
    {
        echo "Database Selected".$database . "<br>";
    }
    else
    {
        echo"Failed to select database";
    }
    $_SESSION['status'] = 'Pending';
    $userid = $_SESSION['userID'];
    
    
    $sql = "INSERT INTO `order` (`Order_ID`, `Customer_ID`, `Quantity`, `Order_Date`, `Order_Status`, `Product_ID`) VALUES ('$unique_id', '$userid', '$qty', 'current_timestamp()', 'pending', '$productid')";


    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Inserted Succesfully";
        
    }
    else 
    {
        echo"Failed To Insert";
    }
    
    



// Get input values (customer_id, product_id, and quantity) from your form or input source
//  $customer_id = $_POST['customer_id'];
//$product_id = $_POST['product_id'];
$quantity = $qty;

// Check if the ordered quantity is more than the available product quantity
$product_query = "SELECT Product_Quantity FROM Product WHERE Product_ID = $productid";
$product_result = $conn->query($product_query);

if ($product_result->num_rows == 1) {
    $row = $product_result->fetch_assoc();
    $product_quantity = $row['Product_Quantity'];

    if ($quantity > $product_quantity) {
        echo "Ordered quantity is more than available quantity.";
        
    } else {
        // Update Product_Quantity by subtracting the ordered quantity
        $new_quantity = $product_quantity - $quantity;

        $update_query = "UPDATE Product SET Product_Quantity = $new_quantity WHERE Product_ID = $productid";
        if ($conn->query($update_query) === TRUE) {
            echo "Order placed successfully, and product quantity updated.";
        } else {
            echo "Error updating product quantity: " . $conn->error;
        }
        header('Location: /DBMS_project/payment.php');
    }
} else {
    echo "Product not found in the database.";
}







    




    //session_destroy();

}

?>