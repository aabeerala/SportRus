<?php // sqltest.php
 
    $hn="localhost";
    $un="id18612812_publications1";
    $pw="Kareem1998!@#";
    $db="id18612812_publications";
    $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
  

 

  if (isset($_POST['updatedata']))
  {
       $productName= $_POST['product_name'];
       $productPrice=$_POST['product_price'];
       $id=$_POST['id'];
        echo "GOOD";
  
     $sql="UPDATE Productdb SET product_name = '$productName', product_price = '$productPrice' WHERE id='$id'";
    
   if( mysqli_query($conn,$sql) )
    {
        echo "UPDATED";
    }
    else
    {
        echo "ERROR";
    }
    echo $id;
    echo "<br>";
    echo $productName;
    echo "<br>";
    echo $productPrice;
 
 }
 else {
     echo "<script>alert('error')</script>";
 }
 
  echo "<script>window.location=\"../admin.php\";</script>"
  
?>
