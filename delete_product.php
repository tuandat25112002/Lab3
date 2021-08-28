<?php
    require_once('config.php');

      if(isset($_GET['delete'])){
        $IDproduct =$_GET['productid'];
        $category_id =$_GET['categoryid'];
        $no_page = $_GET['nopage'];
        $item_per_page = $_GET['per_page'];
  
          $sqldelete= "DELETE FROM products  WHERE IDproduct =$IDproduct and categoryID=$category_id";
        $stmdelete = $conn->prepare($sqldelete);
        $stmdelete->execute();
        $stmdelete->closeCursor();
      }  
include "index.php";
?>


