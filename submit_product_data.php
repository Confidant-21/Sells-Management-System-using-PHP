<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['product_name'];
    $description = $_POST['product_description'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];



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


    $sql = "INSERT INTO `product` (`Product_Name`, `Product_Description`, `Product_Price`, `Product_Quantity`) VALUES ( '$name', '$description', '$price', '$quantity')";


    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Inserted Succesfully";
    }
    else 
    {
        echo"Failed To Insert";
    }
}

header('Location: /DBMS_project/login.php');


?>