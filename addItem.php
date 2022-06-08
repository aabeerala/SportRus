<?php

session_start();

require_once ('./php/CreateDb.php');
require_once ('./php/component.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sports R Us</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php require_once ("php/header.php"); ?>

        <div style="margin:15px;" class=" row justify-content-center">
    <h2>Add a New Item</h2>
</div>

<div style="margin:10px;" class=" row justify-content-center">   

<form action="./php/insert.php" method="post"> 

        <label>Product Name:</label>
        <div class="col">
              <input type="text" class="form-control" placeholder="Product name" id="product_name" name="product_name">
        </div>
        
        <label>Product Price:</label>
        <div class="col">
              <input type="number" class="form-control" placeholder="Product Price" id="product_price" name="product_price" >
        </div>
        
        
        <div  style="margin:0px;"  class="form-select form-select-sm" aria-label=".form-select-sm example" id="select">
            <label>Choose Sport: </label>
            </div>
                <div  class=" row justify-content" id="select">

           <select style="margin:15px;"  class="btn btn-primary" class="form-select form-select-sm" aria-label=".form-select-sm example" name="select">
                 
                  <option value="football" id="football" selected>Football</option>
                  <option value="basketball" id="basketball">Basketball</option>
                  <option value="tennis" id="tennis">Tennis</option>
                  <option value="baseball" id="baseball">Baseball</option>
            </select>
        </div>
        
        <div class=" row justify-content-center">
         <input  style="margin:15px;" id="addbutton" type="submit"  class="btn btn-primary" value="Add Item">
                 </div>

    </form>
    
    
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
