<?php
    include_once 'classes/class.home.php';
    include_once 'classes/class.products.php';
    $home = new Home();
    $shoppingCart = new Products();
    ?>

    <?php


    $member_id = isset($_SESSION["id"])?$_SESSION["id"]:0; // you can your integerate authentication module here to get logged in member
    $query = "select * FROM registered_users WHERE id=$member_id";
        

    $getUserDetails = $shoppingCart->getAllProduct($query);

    if (! empty($_GET["action"])) {
        switch ($_GET["action"]) {
            case "add":
                if (! empty($_POST["selected_product"])) {


                    //print_r($_POST["selected_product"]);
                    foreach($_POST["selected_product"] as $product_code) {
                    

                    
                        $productResult = $shoppingCart->getProductByCode($product_code);
                        

                        $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $member_id);
                        foreach($productResult As $value){
                            $shoppingCart->addToCart($value["id"], 1, $member_id);
                        }
                        
                        
                    }
                    die;
                }
                break;
            case "remove":
                // Delete single entry from the cart
                $shoppingCart->deleteCartItem($_GET["id"]);
                break;
            case "empty":
                // Empty cart
                $shoppingCart->emptyCart($member_id);
                break;
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Online Ads</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    <style>
    body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;
    }
    h3, h4 {
        margin: 10px 0 30px 0;
        letter-spacing: 10px;      
        font-size: 20px;
        color: #111;
    }
    .container {
        padding: 50px 50px;
    }
    .person {
        border: 10px solid transparent;
        margin-bottom: 25px;
        width: 80%;
        height: 80%;
        opacity: 0.7;
    }
    .person:hover {
        border-color: #f1f1f1;
    }
    .carousel-inner img {
        -webkit-filter: grayscale(90%);
        filter: grayscale(90%); /* make all photos black and white */ 
        width: 100%; /* Set width to 100% */
        margin: auto;
    }
    .carousel-caption h3 {
        color: #fff !important;
    }
    @media (max-width: 600px) {
        .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
        }
    }
    .bg-1 {
        background: #2d2d30;
        color: #bdbdbd;
    }
    .bg-1 h3 {color: #fff;}
    .bg-1 p {font-style: italic;}
    .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }
    .list-group-item:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
    }
    .thumbnail p {
        margin-top: 15px;
        color: #555;
    }
    .btn {
        padding: 10px 20px;
        background-color: #333;
        color: #f1f1f1;
        border-radius: 0;
        transition: .2s;
    }
    .btn:hover, .btn:focus {
        border: 1px solid #333;
        background-color: #fff;
        color: #000;
    }
    .modal-header, h4, .close {
        background-color: #333;
        color: #fff !important;
        text-align: center;
        font-size: 30px;
    }
    .modal-header, .modal-body {
        padding: 40px 50px;
    }
    .nav-tabs li a {
        color: #777;
    }
    #googleMap {
        width: 100%;
        height: 400px;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }  
    .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
    }
    .navbar li a, .navbar .navbar-brand { 
        color: #d5d5d5 !important;
    }
    .navbar-nav li a:hover {
        color: #fff !important;
    }
    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
    }
    .open .dropdown-toggle {
        color: #fff;
        background-color: #555 !important;
    }
    .dropdown-menu li a {
        color: #000 !important;
    }
    .dropdown-menu li a:hover {
        background-color: red !important;
    }
    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
    }
    footer a {
        color: #f5f5f5;
    }
    footer a:hover {
        color: #777;
        text-decoration: none;
    }  
    .form-control {
        border-radius: 0;
    }
    textarea {
        resize: none;
    }
    </style>
    </head>
        <body>

            <!-- HEADER  -->

            <?php
            include('includes/header.php');
            ?>
    



    <div class="container">
<br>  <p class="text-center"></p>
<hr>

<div class="row">
<center><h1><?php echo isset($_GET['ad_type'])?$_GET['ad_type']:'';?></h1></center>
  <aside class="col-sm-12 col-md-6">
(<strong class="pt-2 pb-2">FTP so the client can send all Files at one time</strong>)
<div class="card">
<article class="card-body">
<h4 class="card-title mb-4 mt-1">Your Basic Ad Information</h4>
   <form action="addinfo.php" method="post"  enctype="multipart/form-data"> 
    <div class="form-group">
      <label>Ad Title:</label>
        <input name="ad_title" class="form-control"  type="text">
            </div>
  
<div class="form-group">

<label><small class="text-danger">Browes Your Files & Select the files to send in.</small></label>
   
        <div class="row">
            <div class="col-sm-12 col-md-6"><input name="adyourlogo[]"  type="file" multiple>&nbsp;<label> Your Logo</label></div>
             <div class="col-sm-12 col-md-6"><input name="adpictures[]"  type="file" multiple>&nbsp;<label> Pictures</label></div>
              <div class="col-sm-12 col-md-6"><input name="adgif[]"  type="file" multiple>&nbsp;<label> Gif's</label></div>
               <div class="col-sm-12 col-md-6"><input name="adnationallogo[]"  type="file" multiple>&nbsp;<label> National Logo</label></div>
             <div class="col-sm-12 col-md-6"><input name="advideos[]"  type="file" multiple>&nbsp;<label> Videos</label></div>
              <div class="col-sm-12 col-md-6"><input name="adsampleads[]"  type="file" multiple>&nbsp;<label> Sample Ad</label></div>
        </div>
        </div>


    <div class="form-group"> 
    <div class="radio">
    <label>Slogan (POINT #1)</label>
      <input type="text" name="adslogan1"> 
    </div>
    <div class="radio">
    <label>Slogan (POINT #2)</label>
      <input type="text"  name="adslogan2"> 
    </div>
    <div class="radio">
    <label>Slogan (POINT #3)</label>
      <input type="text"  name="adslogan3"> 
    </div>
    <div class="radio">
    <label>Slogan (POINT #4)</label>
      <input type="text"  name="adslogan4"> 
    </div>
    </div> <!-- form-group// -->  

       <!-- form-group// -->
    <div class="form-group">
        
        <label class="text-danger">NOTES: OTHER INFO FOR THE AD.</label>
        <textarea class="form-control" name="adnotes" placeholder="" rows="4"></textarea>
    </div> <!-- form-group// -->                                                         
</article>
</div> <!-- card.// -->

  </aside> <!-- col.// -->
  <aside class="col-sm-12 col-md-6">
<p></p>

<div class="card">
<article class="card-body">
  
   
<div class="form-group">
        <label>Ad Type</label>
        <input class="form-control" name="ad_type" type="text" value="<?php echo isset($_GET['ad_type'])?$_GET['ad_type']:'';?>" readonly>
    </div> <!-- form-group// -->
<div class="form-group">
        <label>BOOK Category</label>
        <input class="form-control"  name="book_category" type="text" value="<?php echo isset($_GET['book_category'])?$_GET['book_category']:'';?>" readonly>
    </div> <!-- form-group// -->
    <div class="form-group">
        <label>APP Category</label>
        <input class="form-control"  type="text" name="app_category" value="<?php echo isset($_GET['app_category'])?$_GET['app_category']:'';?>" readonly>
    </div> <!-- form-group// -->
 
<div class="form-group">
        <label>WEBSITE</label>
        <input class="form-control"  type="text" name="website">
    </div> <!-- form-group// -->
    <div class="form-group">
        <label>AUTHORIZED LINE </label>
        <input class="form-control"  type="text" name="authorized_line">
    </div> <!-- form-group// -->
   
    </div> <!-- form-group// -->     
    <h4 class="card-title mb-4 mt-1">TBL</h4> 
     <div class="form-group">
        <label>Company Name</label>
        <input class="form-control"  type="text" name="company_name">
    </div> <!-- form-group// -->
      <div class="form-group">
        <label>Address</label>
        <input class="form-control"  type="text"  name="ad_address">
    </div> <!-- form-group// -->  
    <div class="form-group">
        <label>Number1</label>
        <input class="form-control"  type="text"  name="ads_number1">
    </div> <!-- form-group// -->      
    <div class="form-group">
        <label>Number2</label>
        <input class="form-control"  type="text"  name="ads_number2">
    </div> <!-- form-group// -->   
    <div class="form-group">
        <label>Number3</label>
        <input class="form-control"  type="text"  name="ads_number3">
    </div> <!-- form-group// -->   
    <div class="form-group">
        <label>Number4</label>
        <input class="form-control"  type="text"  name="ads_number4">
    </div> <!-- form-group// -->                              



    <input class="form-control"  type="hidden" name="invoice_id" value="<?php echo isset($_GET["invoice_id"])?$_GET["invoice_id"]:0;?>">
    <input class="form-control"  type="hidden" name="product_id" value="<?php echo isset($_GET["product_id"])?$_GET["product_id"]:0;?>">
    


</article>
</div> <!-- card.// -->

                                        
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Submit  </button>
            </div> <!-- form-group// -->
        </div>
                                                 
    </div> <!-- .row// -->                                                                  
</form>
</article>
</div> <!-- card.// -->

  </aside> <!-- col.// -->

</div> <!-- row.// -->

</div> 
<!--container end.//-->






            <!-- FOOTER START -->

            <?php
            include('includes/footer.php');
            ?>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
var sum = 0;
$('.getAllTotal	').each(function(){
    sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
});

$(".getTotal").text(sum);

$("#getTotalpaidinfull").text(sum*12);
$("#getTotalThird").text(sum*12);

});
</script>
    <script>
	$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
	</script>
    </body>
    </html>