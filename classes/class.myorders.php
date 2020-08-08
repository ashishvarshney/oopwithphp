<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "classes/db_config.php";

class Orders {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    /*     * * for select data ** */

    public function get_my_orders_details() {

        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $type = isset($_GET['type']) ? $_GET['type'] : '';

//        if ($type == "admin") {
//            $sql = "SELECT * FROM admin WHERE id = $id";
//        } else if ($type == "Buyer") {
//            $sql = "SELECT * FROM buyers WHERE id = $id";
//        } else if ($type == "Seller") {
//            $sql = "SELECT * FROM sellers WHERE id = $id";
//        } else {
//            header("location:bookings/index.php");
//        }

        $sql = "SELECT * FROM orders WHERE order_by = '$type' AND buyer_id = '$id' ORDER by id DESC";
        $result = mysqli_query($this->db, $sql);
        while ($row = mysqli_fetch_array($result)) {

            $product_id = $row['product_id'];
            $product_sql = "SELECT * FROM products WHERE id = '$product_id'";
            $product_result = mysqli_query($this->db, $product_sql);
            $product_row = mysqli_fetch_array($product_result);

            $sector_id = $product_row['sector'];
            $sector_sql = "SELECT sector_name FROM sectors WHERE id = '$sector_id'";
            $sector_result = mysqli_query($this->db, $sector_sql);
            $sector_row = mysqli_fetch_array($sector_result);

            $seller_id = $row['seller_id'];
            $seller_sql = "SELECT entity_name FROM sellers WHERE id = '$seller_id'";
            $seller_result = mysqli_query($this->db, $seller_sql);
            $seller_row = mysqli_fetch_array($seller_result);
            ?>
            <div class="col-12">
                <div class="order-box">
                    <div class="row">
                        <div class="col-2"><div class="image-div">
                                <img src="bookings/uploads/products/<?= $product_row['product_image']; ?>" class="img-fluid" alt="product">
                            </div></div>
                        <div class="col-4">
                            <div class="product-description">
                                <div class="product-name mb-3 mt-1"><?= $product_row['product_name']; ?></div>
                                <div class="product-sector-name">Sector: <?= $sector_row['sector_name']; ?></div>
                                <div class="product-seller-name">Seller: <?= $seller_row['entity_name']; ?></div>
                                <div class="product-seller-name">Product SKU: <?= $product_row['product_sku']; ?></div>
                            </div>
                        </div>
                        <div class="col-1"><div class="product-price">₹ <?= $product_row['product_actual_price']; ?></div></div>
                        <div class="col-5"><div class="product-status">
                                <div class="deleivered-status">Order Date</div>
                                <div class="deleivery-date mb-3">Date:
                                    <?php
                                    $updated_date = $row['created_at'];
                                    $date = date_create($updated_date);
                                    echo date_format($date, "d F Y");
                                    ?>
                                </div>
                                <div class="return-policy">Product can be returned or exchange untill 1st Jan 2020</div>
                                <!-- <div class="rate-product">
                                    <span class="rating-text">Rate Product : </span>
                                    <div class="star-rating">
                                        <input id="star-5" type="radio" name="rating" value="star-5" />
                                        <label for="star-5" title="5 stars">
                                          <i class="active fa fa-star" aria-hidden="true"></i>
                                        </label>
                                        <input id="star-4" type="radio" name="rating" value="star-4" />
                                        <label for="star-4" title="4 stars">
                                          <i class="active fa fa-star" aria-hidden="true"></i>
                                        </label>
                                        <input id="star-3" type="radio" name="rating" value="star-3" />
                                        <label for="star-3" title="3 stars">
                                          <i class="active fa fa-star" aria-hidden="true"></i>
                                        </label>
                                        <input id="star-2" type="radio" name="rating" value="star-2" />
                                        <label for="star-2" title="2 stars">
                                          <i class="active fa fa-star" aria-hidden="true"></i>
                                        </label>
                                        <input id="star-1" type="radio" name="rating" value="star-1" />
                                        <label for="star-1" title="1 star">
                                          <i class="active fa fa-star" aria-hidden="true"></i>
                                        </label>
                                      </div>
                                </div> -->
                                <div class="saving mt-2">You saved &#8377; <?= $product_row['product_actual_price'] - $product_row['product_discounted_price']; ?> in this Order</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

}
?>
