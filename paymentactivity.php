<?php

session_start();
//$_SESSION['userID'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $paymentmethod = $_POST['payment_method'];
    $amount = $_POST['payment_amount'];
    $payment_date = $_POST['payment_date'];
    $payment_id = uniqid().mt_rand();

//echo $unique_id;
   



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
    $orderid = $_SESSION['orderID'];
    
    $sql = "INSERT INTO `payment` (`Payment_ID`, `Order_ID`, `Payment_Amount`, `Payment_Method`, `Payment_Date`) VALUES ('$payment_id', '$orderid', '$amount', '$paymentmethod', '$payment_date')";

    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Inserted Succesfully";
        
    }
    else 
    {
        echo"Failed To Insert";
    }
    
    $_SESSION['paymentID'] = $payment_id;

    header('Location: /DBMS_project/shipment.php');
    //session_destroy();

}





?>