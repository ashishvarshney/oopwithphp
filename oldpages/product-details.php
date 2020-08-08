<?php
include_once 'classes/class.products.php';
$product = new Products();
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
  <title>Kaushalganga Ecommerce</title>
</head>

<body>
  
  <!-- HEADER  -->
        <?php
        include('includes/header.php');
        ?>
  
  <section id="product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <!-- <div class="image-box">
        <img src="assets/img/products/product.jpg" alt="" class="img-fluid">
        <br>
        <span style="color:red;">Note: The image is for reference purpose only. The actual product may vary in shape or appearance based on climate, age, height etc.</span>
      </div> -->
          <div class="image-box">
            <div class="slideshow-container">
			
              <?= $product->get_products_images_slides(); ?>
			  
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
              <div class="caption-container">
                <p id="caption"></p>
              </div>
              <div class="row">
                <?= $product->get_products_images(); ?>
              </div>
              <span style="color:red; font-size: 14px;">Note: These images are for reference purpose only.</span>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-12">
          <?= $product->get_products_details_box(); ?>
        </div>
      </div>
      <div class="row mt-2" >
        <?php $product->get_products_long_desc(); ?>
      </div>
    </div>
  </section>
  <section id="relatedProductsList">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="text-center mb-3 mainHeading">Related Products</h3>
        </div>
        <div class="relatedProductsCarousel owl-carousel owl-theme">
          <?= $product->get_related_products(); ?>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>


  <!-- <section id="relatedProductsList">
            <h3 class="text-center mb-3 mainHeading">Latest Products</h3>

            <div class="latestProductsCarousel owl-carousel owl-theme">

                <?//= $home->get_latest_products(); ?>  

            </div>

        </section> -->
  
  <!-- FOOTER START -->
  <?php
  include('includes/footer.php');
  ?>
  <!-- END OF FOOTER -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="assets/js/filtrizr/jquery.filterizr.min.js"></script>
  <script src="assets/js/owlCarousel/owl.carousel.js"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="assets/js/script.js"></script>
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
    $(function () {
      var filterizd = $('.filtr-container').filterizr({
        //options object
      });
    });
    $(function () {
      var parentwidth = $("#all-products .container-fluid .row .col-3").width();
      var estwidth = parentwidth - 30;
      $(".filtr-button-container").width(estwidth);
    });
  </script>
  <script>
    $(function () {
      $('.btn-number').click(function (e) {
        e.preventDefault();
        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
          if (type == 'minus') {
            if (currentVal > input.attr('min')) {
              input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
              $(this).attr('disabled', true);
            }
          } else if (type == 'plus') {
            if (currentVal < input.attr('max')) {
              input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr('max')) {
              $(this).attr('disabled', true);
            }
          }
        } else {
          input.val(0);
        }
      });
      $('.input-number').focusin(function () {
        $(this).data('oldValue', $(this).val());
      });
      $('.input-number').change(function () {
        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
          $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
          alert('Sorry, the minimum value was reached');
          $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
          $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
          alert('Sorry, the maximum value was reached');
          $(this).val($(this).data('oldValue'));
        }
      });
      $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
          // Allow: Ctrl+A
          (e.keyCode == 65 && e.ctrlKey === true) ||
          // Allow: home, end, left, right
          (e.keyCode >= 35 && e.keyCode <= 39)) {
          // let it happen, don't do anything
          return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
        }
      });
    });
  </script>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>


<script>
  $(function(){
  var plus = $('.plus');
  var minus = $('.minus');
  var quantity = $('.input-number').val();
  var quantity_stock = $('.product-quantity-print').html();
  var quant_stock = parseInt(quantity_stock);
  var quant_stock = parseInt(quantity_stock)-1;
  $(plus).click(
    function(){
      quant_stock=quant_stock-1;
    
      // alert(quant_stock);
      $('.product-quantity-print').html(quant_stock);
      

    }
  );
  $(minus).click(
    function(){
      quant_stock=quant_stock+1;
      
      $('.product-quantity-print').html(quant_stock);
    }
  );
  $('.addToCartButton').click(function(){
    var quantity_value = $('.input-number').val();
    // alert(quantity_value);
    $('.cartquant').html(quantity_value);

  })

  });
</script>
</body>

</html>