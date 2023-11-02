<?php


session_start();
//$_SESSION['userID'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $shipmentadd = $_POST['shipping_address'];
    $shipmentmethod = $_POST['shipping_method'];
    $shipmentdate = $_POST['shipment_date'];
    $shipID = uniqid().mt_rand();

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

    $_SESSION['shipmentstatus'] = "Pending";
    $shipstatus = $_SESSION['shipmentstatus'];
    $_SESSION['shipmentID'] = $shipID;
  
    $sql = "INSERT INTO `shipment` (`Shipment_ID`, `Order_ID`, `Shipping_Address`, `Shipping_Method`, `Shipping_Date`, `Shipment_Status`) VALUES ('$shipID', '$orderid', '$shipmentadd', '$shipmentmethod', '$shipmentdate', '$shipstatus')";

    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Inserted Succesfully";
        
    }
    else 
    {
        echo"Failed To Insert";
    }
    
  
    header('Location: /DBMS_project/bill.php');
    //session_destroy();

}

?>

?>
