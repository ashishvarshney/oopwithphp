<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "classes/db_config.php";

class Home {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    /* GET SECTORS LIST */

    public function get_sector() {

        $sql = "SELECT s1.id As id,s1.sector_name As sector_name, s1.ssc_slug As ssc_slug, count(s1.sector_name) AS total, s1.logo As logo FROM `sectors` As s1, products As m1 WHERE s1.id = m1.sector GROUP by s1.sector_name";
        $result = mysqli_query($this->db, $sql);

        while ($row = mysqli_fetch_array($result)) {
            ?>

            <div class="col-12 col-sm-6 col-md-3">
                <a href="products.php?sector=<?php echo $row["id"]; ?>" class="d-contents" style="cursor:pointer;">
                    <div class="all-sector">
                        <div class="sector-name text-center">
                            <?php echo $row["sector_name"]; ?>
                        </div>
                        <div class="box-sector-image w-50 float-left">
                            <center><img src="assets/img/sector/<?php echo $row["logo"]; ?>" alt="<?php echo $row["logo"]; ?>" class="img-fluid"></center>
                        </div>
                        <div class="box-sector-right w-50 float-left">
                            <div class="box-sector-right-top text-center" style="color:#8ee1ff">No. of Products</div>
                            <div class="box-sector-right-bottom text-center" style="color:#ce2a1b"><?php echo $row["total"]; ?></div>
                        </div>

                    </div>
                </a>
            </div>

            <?php
        }
    }

    /* GET RECENT PRODUCTS */

    public function get_featured_products() {

        $sql = "SELECT id,product_name,product_image,product_discounted_price,product_actual_price FROM products order by id ASC";
        $result = mysqli_query($this->db, $sql);

        while ($row = mysqli_fetch_array($result)) {
            ?>

            <div class="custom_overlay_wrapper">
                <a href="product-details.php?product=<?php echo $row['id']; ?>">
                    <div class="item"><img src="bookings/uploads/products/<?= $row['product_image']; ?>" alt="<?= $row['product_image']; ?>"></div>
                    <div class="custom_overlay">
                        <span class="custom_overlay_inner">
                            <div class="bg-color">    
                                <div class="name-product-overlay" >
                                    <?= $row['product_name']; ?>
                                </div>
                                <div class="price-product-overlay" >
                                    <div class="product-price"> <span class="discounted-price"> &#8377; <?= $row['product_discounted_price']; ?> </span> <span class="actual-price"> &#8377; <?= $row['product_actual_price']; ?> </span></div>
                                </div>
                            </div>
                        </span>
                    </div>
                </a>
            </div>

            <?php
        }
    }

    /* GET RECENT PRODUCTS */

    public function get_latest_products() {

        $sql = "SELECT id,product_name,product_image,product_discounted_price,product_actual_price FROM products order by id DESC";
        $result = mysqli_query($this->db, $sql);

        while ($row = mysqli_fetch_array($result)) {
            ?>

            <div class="custom_overlay_wrapper">
                <a href="product-details.php?product=<?php echo $row['id']; ?>">
                    <div class="item"><img src="bookings/uploads/products/<?= $row['product_image']; ?>" alt="<?= $row['product_image']; ?>"></div>
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <div class="bg-color">    
                                <div class="name-product-overlay" >
                                    <?= $row['product_name']; ?>
                                </div>
                                <div class="price-product-overlay" >
                                    <div class="product-price"> <span class="discounted-price"> &#8377; <?= $row['product_discounted_price']; ?> </span> <span class="actual-price"> &#8377; <?= $row['product_actual_price']; ?> </span></div>
                                </div>
                            </div>
                        </span>
                    </div>
                </a>
            </div>


            <?php
        }
    }

}
?>
