<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!-- php -->
<?php
require_once('config.php');
// paging
if(!isset($category_id)){
    $category_id = filter_input(INPUT_GET,'category_id',FILTER_VALIDATE_INT);
    if($category_id == null || $category_id==FALSE){
        $category_id=1;
    }
}


?>
<style>
.searchbar {
    /* margin-bottom: auto; */
    margin-top: auto;
    /* height: 50px; */
    /* background-color: #353b48; */
    border-radius: 50px;
    /* padding: 5px; */
    transition: 0.7s;
    border: 1px solid  #353b48;
    float:right;
    
}

.search_input {
    
    border: 0;
    outline: 0;
    background: none;
    width: 0px;
    caret-color: transparent;
    line-height: 0px;
    transition:1s ;
}

.searchbar:hover {
    background-color: #353b48;
}

.searchbar:hover>.search_input {
    padding: 0 10px;
    width: 300px;
    caret-color: red;
 
    color: white;
}

.searchbar:hover>.search_icon i {
    background: white;
    color: #e74c3c;
}

button.search_icon i {
    color: black;
    height: 50px;
    width: 50px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;

    text-decoration: none;
    transition: 0.4s;


}
</style>
<link rel="stylesheet" href="style.css">
<!-- /php -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Product Manager</title>
  </head>

  <body style=" background-color:rgb(245, 245,245);">
  	<div id="page-container" class="main-admin">
	  	<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100" style="z-index: 10000;">
		  <a class="navbar-brand" href="#"></a>
		  <div id="open-menu" class="menu-bar">
		  	<div class="bars"></div>
		  </div>
          <div class="logo"><center><a href=""><img src="logo-shop-giay-dep.jpg" style="width: 150px; padding:0px;border-radius: 50px;" alt=""></a></center></div>
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item dropdown ets-right-0">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <img src="img_avatar3.png" class="img-fluid rounded-circle border user-profile">
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		</nav>
	  	<div class="side-bar">
	  		<div class="side-bar-links">
	  			<div class="side-bar-logo text-center py-3">
	  				<img src="img_avatar3.png" class="img-fluid rounded-circle border bg-secoundry mb-3">
	  				<h5>Admin</h5>
	  			</div>
	  			<ul class="navbar-nav">
	  				<li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li>
	  			
	  			</ul>
	  		</div>
	  		<div class="side-bar-icons">
	  			<!-- <div class="side-bar-logo text-center py-3">
	  				<img src="" class="img-fluid rounded-circle border bg-secoundry mb-3">
	  				<h5>Company Name</h5>
	  			</div> -->
	  			<div class="icons d-flex flex-column align-items-center">
	  				<a href="" data-toggle="tooltip" data-placement="top" title="HOME" class="set-width text-center display-inline-block my-1" style="padding: 30px 0px;"><i class="fa fa-home"></i></a>
	  				<a href="#"  data-toggle="tooltip" data-placement="top" title="Users"  class="set-width text-center display-inline-block my-1" style="padding: 30px 0px;"><i class="fa fa-users"></i></a>
	  				<a href="#"  data-toggle="tooltip" data-placement="top" title="Products"  class="set-width text-center display-inline-block my-1 active" style="padding: 30px 0px;"><i class="fa fa-list"></i></a>
	  				<!-- <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-sticky-note-o"></i></a>
	  				<a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-file-text"></i></a>
	  				<a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-sticky-note-o"></i></a> -->
	  				<!-- <a href="#" class="set-width text-center display-inline-block my-1"><i class="fa fa-database"></i></a> -->
	  			</div>
	  		</div>
	  	</div>
  	<div class="main-body-content w-100 ets-pt">
  		<!-- <div class="table-responsive bg-light">
  		
  		</div> -->


       
    <div class="container-fluid">
        <p><a class="text-dark " style="text-decoration: none;" href="">ADMIN</a> <i class="fas fa-angle-double-right"></i> <a href="" style="text-decoration: none;" class="text-primary">PRODUCT MANGER</a></p>
      <center><h2 style="line-height: 70px;">PRODUCT MANAGER</h2></center>
      <!-- <div class="containter-fluid justify-content-center"> -->
       <div class="col-sm-12 justify-content-center row ">
            <form class="searchbar" action="search.php" method="get">
                    <input class="search_input" id="search-input" type="text" name="searchinput" placeholder="Search...">
                    
                    
                    <button class="btn btn-link search_icon"  type="submit" name="submitsearch"> <i class="fas fa-search"></i></button>
                </form>
                </div>
            <!-- </div> -->
             <hr>   
    
    <div class="row">
        <div class="col-sm-2 float-left">
            <div class="container-fluid" ><h4>Categories</h4></div>
            <ul>
                <!-- get all các hãng giày -->
                <?php   
                $sql="SELECT * from categories";
                $stm = $conn->prepare($sql);
                $stm -> execute();
                $categories= $stm->fetchAll();
                $stm->closeCursor();
     
                foreach($categories as $cname){
                ?>
                
                <li class="category"><a href=".?category_id=<?php echo $cname["categoryID"]?>"><?php echo $cname['categoryName']; ?></a></li>
               <?php }?>

   <!-- PHP PAGING-->
          <?php
            $item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:3;
            $no_page = !empty($_GET['nopage'])?$_GET['nopage']:1;
            $sqltotal = "SELECT * from products where categoryID= $category_id";
            $rs = $conn->query($sqltotal);
            $rows = $rs->rowCount();    
            $totalpages= ceil($rows/$item_per_page);

            $offset = ($no_page -1) * $item_per_page;
      ?> 
 <form action="add_product.php"  method="get">

      
      
      <button type="submit" name="gettotalpages" class="btn btn-link" style="margin:10px 0px;padding:10px 0px;text-decoration: none;"><i class="fas fa-plus"></i> Add a Product</button></form>


          <!--  -->



            </ul>
        </div>
        <div class="col-sm-10">
           
            <?php
            //get name of selected category 
                   $sqlcategory = "SELECT *from categories where categoryID = $category_id";
                   $stmcategory= $conn->prepare($sqlcategory);
                    $stmcategory->execute();
                    $listcategories = $stmcategory->fetch();
                    $stmcategory->closeCursor();
            ?>



           <center><div style="height: 150;"> <h4 style="margin-bottom: 30px;padding: 0px;"> <img src="<?php echo $listcategories['logocategory']?>" style="width:150px" alt=""></h4>
           </div></center>
           <div style="overflow-x:auto;">
            <table >
                <tr class="field bg-light" style="border:1px solid #ccc; height:60px">
                    <th>Code</th>
                    
                 
                    <th> </th>
                    <th>Name Shoes</th>
                    <th>Prices</th>
                    <th colspan="2">Note</th>
                    
                </tr>
             
                <?php
               
                
              
                
                // get all product of slected category
                    $sqlproduct = "SELECT * from products where categoryID = $category_id ORDER BY categoryID ASC LIMIT $item_per_page OFFSET $offset";
                    $stm1 = $conn-> prepare($sqlproduct);
                    $stm1 -> execute();
                    $productinfo = $stm1->fetchAll();
                    $stm1->closeCursor();
                   
                    foreach($productinfo as $p){
                ?>    


                <tr class="products" style="border-bottom:1px solid #ccc ">
                   
                    <td><?php echo $p['code']; ?></td>
                    <td class="img-product"><img src="<?php echo $p['image']; ?>" alt=""></td>
                    <td><?php echo $p['nameproduct']; ?></td>
                    <td>$ <?php echo $p['gia']; ?></td>
                    <td>
                    <form action="delete_product.php" method="get">    
                    <input type="hidden" name="categoryid" value="<?php echo $p['categoryID']; ?>">
                    <input type="hidden" name="productid" value="<?php echo $p['IDproduct']; ?>">
                    <input type="hidden" name="per_page" value="<?php echo $item_per_page; ?>">
                    <input type="hidden" name="nopage" value="<?php echo $no_page; ?>">
                    <button type="submit" name="delete" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
               
                    </form>
                   
                 
                </td>
                 <td>
                     <form action="update.php" method="get"> 
                     <input type="hidden" name="category_id" value="<?php echo $p['categoryID']; ?>">
                     <input type="hidden" name="productid" value="<?php echo $p['IDproduct']; ?>">
                     <input type="hidden" name="per_page" value="<?php echo $item_per_page?>">
                     <input type="hidden" name="nopage" value="<?php echo $no_page?>">       
                     <button type="submit" name="update" class="btn">Update <i class="far fa-edit"></i></button>  </td>
                     </form>
                </tr>
                
               <?php }?>
            </table>
            </div>
            <?php
                include 'paging.php';
            ?>
          
        </div>
    </div>
        
    </div>






    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script type="text/javascript">
    	jQuery(document).ready(function(){
    		jQuery("#open-menu").click(function(){
    			if(jQuery('#page-container').hasClass('show-menu')){
    			jQuery("#page-container").removeClass('show-menu');
    		}
    			
    			else{
    			jQuery("#page-container").addClass('show-menu');
    			}
    		});
    	});
    </script>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

  </body>
</html>
