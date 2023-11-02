<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $userid = $_POST['user_id'];
    $name = $_POST['customer_name'];
    $address = $_POST['customer_address'];
    $phone = $_POST['customer_phone'];
    $email = $_POST['customer_email'];



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


    $sql = "INSERT INTO `customer` ( `Customer_ID`, `Customer_Name`, `Customer_Address`, `Customer_Phone`, `Customer_Email`) VALUES ( '$userid', '$name', '$address', '$phone', '$email')";


    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Inserted Succesfully";
        
    }
    else 
    {
        echo"Failed To Insert";
    }
    echo '<script><div class="alert alert-danger" role="alert">
        This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
      </div></script>';
    header('Location: /DBMS_project/login.php');


}
?>