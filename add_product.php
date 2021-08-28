<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!------ Include the above in your HEAD tag ---------->
<style>

.file-upload {
    background-color: #ffffff;
    width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.file-upload-btn {
    width: 100%;
    margin: 0;
    color: #fff;
    background: #1FB264;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #15824B;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
}

.file-upload-btn:hover {
    background: #1AA059;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
}

.file-upload-btn:active {
    border: 0;
    transition: all .2s ease;
}

.file-upload-content {
    display: none;
    text-align: center;
}

.file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    outline: none;
    opacity: 0;
    cursor: pointer;
}

.image-upload-wrap {
    margin-top: 20px;
    border: 1px dashed #ccc;
    color: red;
    position: relative;
    border-radius: 10px;
}

.image-dropping,
.image-upload-wrap:hover {

    border: 1px dashed #ccc;
    color: #e62929;
    letter-spacing: 5px;
    transition: 1s;
    background-color: #ccc;
}
.image-dropping,
.image-upload-wrap:hover  .drag-text h3{
    color: white;
    /* font-weight: bold; */

}
.image-title-wrap {
    padding: 0 15px 15px 15px;
    color: #222;
}

.drag-text {
    text-align: center;
}

.drag-text h3 {
    font-weight: 100;
    text-transform: uppercase;
    color: #ccc;
    padding: 60px 0;
    /* font-weight: bold; */
}

.file-upload-image {
    max-height: 90%;
    max-width: auto;
    border-radius: 20px;
    margin: auto;
    padding: 10px;
    width: 100%;
    margin-bottom: 15px;
}

.remove-image {
    margin: 0;
    color: #fff;
    background: #cd4535;
    border: none;
    padding: 5px;
    border-radius: 4px;
    border-bottom: 4px solid #b02818;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
}

.remove-image:hover {
    background: #c13b2a;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
}

.remove-image:active {
    border: 0;
    transition: all .2s ease;
}



/* để ẩn cái input đi  */



</style>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">
    
    function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
}

function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function() {
    $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function() {
    $('.image-upload-wrap').removeClass('image-dropping');
});


document.getElementById("cmt").click();

function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

  </script>
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

    <title>Infantry</title>
  </head>

  <body style=" background-color:rgb(245, 245,245);">
  	<div id="page-container" class="main-admin">
	  	<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100" style="z-index: 10000;">
		  <a class="navbar-brand" href="#"></a>
		  <div id="open-menu" class="menu-bar">
		  	<div class="bars"></div>
		  </div>
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
	  				<!-- <li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li>
	  				<li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li>
	  				<li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li>
	  				<li class="nav-item">
	  					<a href="#" class="nav-links d-block"><i class="fa fa-home pr-2"></i> HOME</a>
	  				</li> -->
	  			</ul>
	  		</div>
	  		<div class="side-bar-icons">
	  			<!-- <div class="side-bar-logo text-center py-3">
	  				<img src="" class="img-fluid rounded-circle border bg-secoundry mb-3">
	  				<h5>Company Name</h5>
	  			</div> -->
	  			<div class="icons d-flex flex-column align-items-center">
	  				<a href="#" class="set-width text-center display-inline-block my-1" style="padding: 30px 0px;"><i class="fa fa-home"></i></a>
	  				<a href="#" class="set-width text-center display-inline-block my-1" style="padding: 30px 0px;"><i class="fa fa-users"></i></a>
	  				<a href="#" class="set-width text-center display-inline-block my-1 active" style="padding: 30px 0px;"><i class="fa fa-list"></i></a>
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
      <h2 >PRODUCT MANAGER</h2>
        <hr>   
    <div class="row">
        <div class="col-sm-3 float-left">
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
            </ul>
        </div>
        <div class="col-sm-9">
        <center>    <h2 >ADD PRODUCT</h2></center>
                    <!-- php -->
                   
<!-- /php -->
            <form action="add.php" method="get" class="card" >  
        <div class="container-fluid">
            <div class="col-sm-7 float-left">          
            <p><h5>1. CATELOGY</h5></p>
            <select name='category_id' class="form-control" id="" style="width: 40%;">

                   <?php
                        $sql="SELECT * from categories";
                        $stm = $conn->prepare($sql);
                        $stm -> execute();
                        $categories= $stm->fetchAll();
                        $stm->closeCursor();
                    foreach($categories as $c){
                        // echo $c['categoryID'];
                        // echo "1";

                   ?> 
                <option value="<?php echo $c['categoryID']?>"><?php echo $c['categoryName'] ?></option>
                        <?php } ?>
            </select>
            <p><h5>2. CODE</h5></p>
            <input type="text" name="code" id="" class="form-control" placeholder="Fill the code of this Product">
            <p><h5>3. NAME PRODUCT</h5></p>
            <input type="text" name="productName" id="" class="form-control" placeholder="Fill the name of this Product">
            <p><h5>4. PRICE</h5></p>
            <!-- <input type="text" name="price" id="" class="form-control" placeholder="Fill the price of this Product"> -->
            <div class="input-group mb-3">
          <div class="input-group-prepend" >
         <span class="input-group-text" style="background-color: white;border-right: none;"><i class="fas fa-dollar-sign"></i></span>
          </div>
           <input name="price" type="text" class="form-control" style="border-left: none;" placeholder="Fill the price of this Product">
         
        </div>
        <div class="g-recaptcha" data-sitekey="6LdxQSwcAAAAAMnUJRhcJ-tV5EEWib3zpdNQmKfd"></div>  
        
             </div>
             <div class="col-sm-5 float-left">
             <p><h5>5. IMAGE</h5></p>
             <div style="width: 100%;">
                                <div class="image-upload-wrap ">
                                    <input class="file-upload-input" name="inputimg" type='file' id="themanh" onchange="readURL(this);" accept="image/*" />
                                    <div class="drag-text">

                                        <h3>+Thêm ảnh</h3>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image" />
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="remove-image" style="width:100%;">Gỡ ảnh</button>
                                    </div>
                                </div>
                            </div>
             </div></div>
           
             <input type="hidden" name="per_page" value="3">
             <input type="hidden" name="nopage" value="">
             <div class="container-fluid" style="margin-top: 20px;"><center><button type="submit" name="submitadd" class="btn btn-success" style="margin:10px 0px;padding:10px 20px">Add Product</button>
             <a href="index.php" class="btn">Back to Product Manager</a></center>  </div>
            </form>
           

       
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
  </body>
</html>
