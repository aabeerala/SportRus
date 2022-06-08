<?php

session_start();

require_once ('CreateDb.php');
require_once ('admincomponent.php'); 

         $dbname = "id18612812_publications";
        $servername = "localhost";
        $username = "id18612812_publications1";
        $password = "Kareem1998!@#";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

$product_name=$_POST['product_name'];
$product_price= $_POST['product_price'];
$category=$_POST['select'];

$sql="INSERT INTO Productdb(product_name,product_price,product_image) VALUES
('$product_name','$product_price','./upload/$category.png')";

if(mysqli_query($conn, $sql)){
   echo " <script> window.location.href = '../admin.php'</script>";

}

else{
    echo "ERROR: Could not add record";
}


?>
