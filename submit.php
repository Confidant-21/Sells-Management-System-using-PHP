<?php
  
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userid = $_POST['user_id'];
    //echo"Connection Established";

    $servername = "localhost";
    $username  = "root";
    $password = "";
    $database = "miniproject";
//echo"Connection Established";


    $conn = mysqli_connect($servername, $username, $password, $database);
   // echo"Connection Established";

    
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

    $sql = "SELECT * FROM `customer` WHERE  Customer_ID = '$userid' ";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
      echo "ID Cought";
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['userID'] = $userid;

      header("location: showproduct.php");
    }




   }
  

   //session_destroy();

?>

