<?php
include_once 'classes/class.myorders.php';
$myorders = new Orders();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
          <script src="https://kit.fontawesome.com/0eead95bf7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <title>My Orders</title>
    </head>
    <body>

        <!-- HEADER  -->

        <?php
        include('includes/header.php');
        ?>



        <section id="my-order">

            <div class="container">
                <?php
                include('includes/status.php');
                ?>
                <h2 class="text-center mb-4">My Orders List</h2>
                <div class="row">
                    <?php echo $myorders->get_my_orders_details(); ?>
                    <div class="pagination-outer"> <div id="pagination-container"></div></div> 
                </div>
            </div>

        </section>

        <!-- FOOTER START -->

        <?php
        include('includes/footer.php');
        ?>

        <!-- END OF FOOTER -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
           <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.simplePagination.js"></script>
                <script src="assets/js/script.js"></script>
        <script>
            // jQuery Plugin: http://flaviusmatis.github.io/simplePagination.js/

            var items = $("#my-order .order-box");
            var numItems = items.length;
            var perPage = 5;

            items.slice(perPage).hide();

            $('#pagination-container').pagination({
                items: numItems,
                itemsOnPage: perPage,
                prevText: "&laquo;",
                nextText: "&raquo;",
                onPageClick: function (pageNumber) {
                    var showFrom = perPage * (pageNumber - 1);
                    var showTo = showFrom + perPage;
                    items.hide().slice(showFrom, showTo).show();
                }
            });
        </script>
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
         });
        </script>
            
    </body>
</html>