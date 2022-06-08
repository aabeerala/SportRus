<?php

function addItem(){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        
                            <a href=\"../Project/addItem.php\">
                                 <img src=\"./upload/add.png\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                             </a>
                        
                        <br>
                        <h5 class=\"card-title\"><a href=\"../Project/addItem.php\">Add Item</a> </h5>
                    </div>
                </form>
            </div>
    ";
    echo $element;
    
}

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
               
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Some quick example text to build on the card.
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$519</s></small>
                                <span class=\"price\">$$productprice</span>
                            </h5>
            

            <div class=\" row justify-content-center\">
                            <form action='../Project/editItem.php' method=\"POST\">
                                <button type=\"submit\" class=\"btn bg-light border rounded-circle\" name=\"updatedata\" ><i  class=\"fas fa-edit\"></i>  </button>
                                <input type='hidden' name='product_id' id='product_id' value='$productid'> 
                             </form>
                             
                             <form action=\"./php/removeItem.php\" method=\"POST\"> 
                                      <button type=\"submit\"  class=\"btn bg-light border rounded-circle\" name=\"deletedata\"><i class=\"fas fa-trash-alt\"></i></button>
        
                                     <input type='hidden' name='product_id' id='product_id' value='$productid'>
                              </form>
                    </div>
                        </div>
                    </div>
                
                 
            </div>
    ";
    echo $element;
}

















