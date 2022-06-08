<?php // sqltest.php
//   require_once 'login.php';
    $hn="localhost";
    $un="id18612812_publications1";
    $pw="Kareem1998!@#";
    $db="id18612812_publications";
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

  if (isset($_POST['deletedata']))
  {
    $id=$_POST['product_id'];
    $sql="DELETE from Productdb WHERE id= $id";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<script> alert(\"Removed ! \") </script>";
    }
    else
    {
        echo "<script> alert(\"ERROR ! \") </script>";
    }
  }
  
  echo "<script>window.location=\"../admin.php\";</script>"
  
?>
