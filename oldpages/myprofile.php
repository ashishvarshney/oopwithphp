<?php
include_once 'classes/class.profile.php';
$profile = new Profile();
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
            .footer{
                position: absolute;
                bottom: 0;
            }
        </style>
        <title>Kaushalganga Ecommerce</title>
    </head>
    <body>

        <!-- HEADER  -->

        <?php
        include('includes/header.php');
        ?>

        <section id="myprofile-page">
            <div class="container">
                <?php echo $profile->get_profile_details(); ?>
            </div>
        </section>

        <!-- FOOTER START -->

        <?php
        include('includes/footer.php');
        ?>

        <!-- END OF FOOTER -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
        </script>

    </body>
</html>