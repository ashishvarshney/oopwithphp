<?php
include_once 'classes/class.billing.php';
$billing = new Billing();

$buyer_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
$product_id = isset($_GET['productid']) ? $_GET['productid'] : '';
$type = isset($_GET['type']) ? $_GET['type'] : '';

$getBuyerArray = $billing->get_buyer_details($buyer_id);

if (isset($_REQUEST['submit'])) {

    extract($_REQUEST);
    $order = $billing->place_order($buyer_id, $product_id, $type);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/0eead95bf7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="assets/css/owlCarousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owlCarousel/owl.theme.default.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <style>
            .error{
                color:red !important;
                font-size:12px;
            }
        </style>
        <title>Kaushalganga Ecommerce</title>
    </head>
    <body>

        <!-- HEADER  -->
        <?php
        include('includes/header.php');
        ?>

        <section id="billing">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-12"><h4>Billing Section</h4></div> -->
                    <form action="" id="formBilling" name="formBilling" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-8">
                                <div class="card">
                                    <div class="card-header">Billing Address</div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">     
                                                <label class="control-label">First Name</label>
                                                <input  type="text" name="billing_fname" value="<?php echo isset($getBuyerArray[0]['name']) ? $getBuyerArray[0]['name'] : ''; ?>" id="billing_fname" class="form-control form-field" readonly="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="control-label">Address</label>
                                                <input  type="text" name="billing_address" id="billing_address" class="form-control form-field">
                                            </div>    
                                        </div>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <label class="control-label">Postal Code</label>
                                                <input  type="text" name="billing_postal_code" id="billing_postal_code" class="form-control pincode">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">City</label>
                                                <input  type="text" name="billing_city" id="billing_city" class="form-control pincode">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">State</label>
                                                <input  type="text" name="billing_state" id="billing_state" class="form-control pincode">
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:10px;">
                                            <div class="col-md-4">
                                                <label class="control-label">Country</label>
                                                <input  type="text" name="billing_country" id="billing_country" class="form-control pincode">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">Phone</label>
                                                <input type="number" name="billing_phone"  value="<?php echo isset($getBuyerArray[0]['phone']) ? $getBuyerArray[0]['phone'] : ''; ?>" id="billing_phone" class="form-field form-control" readonly="">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">Email</label>
                                                <input type="email" name="billing_email"  value="<?php echo isset($getBuyerArray[0]['email']) ? $getBuyerArray[0]['email'] : ''; ?>" id="billing_email" class=" form-field form-control" readonly="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" id="same_as_billing" class="check mt-3">
                                                <span style="vertical-align: super;">Same as billing address</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">Shipping Address</div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="control-label">First Name</label>
                                                <input type="text" name="shipping_fname" id="shipping_fname" class="form-control form-field">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="control-label">Address</label>
                                                <input type="text" name="shipping_address" id="shipping_address" class="form-control form-field">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Postal Code</label>
                                                <input type="text" name="shipping_postal_code" id="shipping_postal_code" class="form-control form-field" >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">City</label>
                                                <input type="text" name="shipping_city" id="shipping_city" class="form-control form-field" >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">State</label>
                                                <input type="text" name="shipping_state" id="shipping_state" class="form-control form-field" >
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:10px;">
                                            <div class="col-md-4">
                                                <label class="control-label">Country</label>
                                                <input type="text" name="shipping_country" id="shipping_country" class="form-control form-field" >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">Phone</label>
                                                <input type="text" name="shipping_phone" id="shipping_phone" class="form-field form-control" >
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">Email</label>
                                                <input type="email" name="shipping_email" id="shipping_email" class="form-field form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-12 col-4">
                                <div class="list-group">

                                    <?= $billing->get_payment_details(); ?>

                                    <div class="list-group-item">
                                        <div class="row">
                                            <div class="col-12">

                                                <!--                                     
                                                                                            <input type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal" style="width: 100%; padding: 10px" name="submit2" id="submit2" value="PLACE ORDER"> -->
                                                <input type="submit" class="float-left btn btn-sm btn-success" style="width: 100%; padding: 10px" name="submit" id="submit" value="PLACE ORDER"/>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>

        <!-- FOOTER START -->
        <?php
        include('includes/footer.php');
        ?>
        <!-- END OF FOOTER -->
        <!-- modal -->
        <!--        <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
        
                             Modal Header 
                            <div class="modal-header">
                                <h5 class="modal-title">Are You Sure You Want to Place This Order?</h5>
        
                            </div>
        
                             Modal body 
                            <div class="modal-body">
                                <form method="post" action="">
                                    <input type="submit" class="float-left btn btn-sm btn-success" style="width: 45%; padding: 10px" name="submit" id="submit" value="Yes"/>
        
                                    <input type="button" class="float-right btn-sm  btn btn-danger" style="width: 45%; padding: 10px" name="close" id="close" value="No" data-dismiss="modal">
                                </form>
                            </div>
        
                             Modal footer 
        
        
                        </div>
                    </div>
                </div>-->

        <!-- modal end -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="assets/js/owlCarousel/owl.carousel.js"></script>
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/validation.js"></script>
        <script>
            $(document).on('click', '.categories', function () {
                $('.mega-menu').slideToggle();
                var sectorNameMegaMenu1 = $('.mega-menu .all-sector .sector-name');
                var maxHeight2 = 0;

                $(sectorNameMegaMenu1).each(function () {
                    if ($(this).height() > maxHeight2) {
                        maxHeight2 = $(this).height();
                    }
                });
                $(sectorNameMegaMenu1).height(maxHeight2);
            });
        </script>

        <script>
            $(document).ready(function () {
                $(document).on('blur', '#company_pincode', function (e) {
                    var pincode = $(this).val();
                    alert(pincode);
                    $.ajax({
                        url: "get_location.php",
                        type: 'GET',
                        dataType: 'json',
                        cache: false,
                        data: {
                            pincode: pincode
                        },
                        beforeSend: function () {
                            // setting a timeout
                            $("#pincodeLoad").show();
                        },
                        success: function (response) {
                            if (response == 0) {
                                alert("No Data Found");
                                $("#company_state").val("");
                                $("#company_city").val("");
                                $("#pincodeLoad").hide();
                            } else {
                                $("#company_city").val(response.District);
                                $("#company_state").val(response.State);
                                $("#pincodeLoad").hide();
                            }
                            //alert(response.lati +" - "+ response.long);
                        }
                    });
                });
            });


        </script>
        <script>
            // Wait for the DOM to be ready
            $(function () {
                // Initialize form validation on the registration form.
                // It has the name attribute "registration"
                $("form[name='formBilling']").validate({
                    // Specify validation rules
                    rules: {
                        // The key name on the left side is the name attribute
                        // of an input field. Validation rules are defined
                        // on the right side
                        billing_fname: "required",
                        shipping_fname: "required",
                        billing_address: "required",
                        shipping_address: "required",
                        billing_postal_code: "required",
                        shipping_postal_code: "required",
                        billing_city: "required",
                        shipping_city: "required",
                        billing_state: "required",
                        shipping_state: "required",
                        billing_country: "required",
                        shipping_country: "required",
                        shipping_phone: {required: true,
                            maxlength: 10,
                            minlength: 10,
                        },
                        billing_phone: "required",
                        shipping_email: {
                            required: true,

                            // Specify that email should be validated
                            // by the built-in "email" rule
                            email: true
                        },
                        billing_email: {
                            required: true,
                            // Specify that email should be validated
                            // by the built-in "email" rule
                            email: true
                        },
                    },
                    // Specify validation error messages
                    messages: {
                        billing_fname: "Please Enter Your Name",
                        shipping_fname: "Please Enter Your Name",
                        billing_address: "Please Enter Your Billing Address",
                        shipping_address: "Please Enter Your Shipping Address",
                        billing_postal_code: "Please Enter Your Billing Postal Code",
                        shipping_postal_code: "Please Enter Your Shipping Postal Code",
                        billing_city: "Please Enter Your Billing City",
                        shipping_city: "Please Enter Your Shipping City",
                        billing_state: "Please Enter Your Billing State",
                        shipping_state: "Please Enter Your Shipping State",
                        billing_country: "Please Enter Your Billing Country",
                        shipping_country: "Please Enter Your Shipping Country",
                        shipping_phone: {
                            required: "Please Enter Your Shipping Phone Number",
                            maxlength: "Phone Number is not valid",
                            minlength: "Phone Number is not valid",

                        },
                        shipping_email: {
                            required: "Please Enter Your Email",
                            email: "Email is not valid",
                            minlength: "Phone Number is not valid",

                        },
                        billing_email: {
                            required: "Please Enter Your Email",
                            email: "Email is not valid",
                            minlength: "Phone Number is not valid",

                        },
                        billing_phone: {
                            required: "Please Enter Your Billing Phone Number",
                            maxlength: "Phone Number is not valid",
                            minlength: "Phone Number is not valid",

                        },
                    },
                    // Make sure the form is submitted to the destination defined
                    // in the "action" attribute of the form when valid
                    submitHandler: function (form) {
                        form.submit();
                    }
                });
            });
        </script>   
    </body>
</html>