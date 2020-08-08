<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "classes/db_config.php";

class Billing {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    /* GET SECTORS LIST */

    public function get_payment_details() {

        $product_id = isset($_GET['productid']) ? $_GET['productid'] : '';

        $sql = "SELECT * FROM products WHERE id = $product_id";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);
        ?>


        <div class="list-group-item">
            <strong>Summary : 3 items</strong>
        </div>
        <div class="list-group-item">
            <div class="item-billing">
                <div class="row" style="margin-left: -10px; margin-left:-10px;">
                    <div class="col-md-12 px-2"><strong><?= $row['product_name']; ?></strong></div>
                </div>
                <div class="row">
                    <div class="col-6 text-left"><span style="font-size:14px;">Quantity: 3</span></div>
                    <div class="col-6 text-right">₹ <?= $row['product_discounted_price']; ?></div>
                </div>
            </div>
        </div>
        <?php
        $disc_price = $row['product_discounted_price'];
        $gst = $disc_price / 100 * 18;
        $total = $disc_price + $gst;
        ?>
        <div class="list-group-item">
            <div class="row">
                <div class="col-6"><strong>Total :</strong></div> <div class="col-6 text-right">₹ <?= $disc_price; ?></div>
                <div class="col-6"><strong>GST (18%) :</strong></div> <div class="col-md-6 text-right">₹ <?= $gst; ?></div>
            </div>
        </div>
        <div class="list-group-item">
            <div class="row">
                <div class="col-6"><strong>You Pay:</strong></div> <div class="col-6 text-right"><p>₹ <?= $total; ?></p></div>
            </div>
        </div>

        <?php
    }

    /** GET CANDIDATE ARRAY INFO TABLE * */
    public function get_buyer_details($buyer_id) {

        $sql = "SELECT * FROM buyers WHERE id='$buyer_id'";
        $result = mysqli_query($this->db, $sql);

        $rows = array();

        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {

                $rows[] = $row;
            }
        }
        return $rows;
    }

    /* GET CANDIDATE ARRAY INFO TABLE */

    public function place_order($buyer_id, $product_id, $type) {

        $created_at = date("Y-m-d");

        if ($type == 'admin') {
            $buyer_sql = "SELECT * FROM admin WHERE id='$buyer_id'";
        } else if ($type == 'seller') {
            $buyer_sql = "SELECT * FROM sellers WHERE id='$buyer_id'";
        } else {
            $buyer_sql = "SELECT * FROM buyers WHERE id='$buyer_id'";
        }
        $buyer_result = mysqli_query($this->db, $buyer_sql);
        $buyer_row = mysqli_fetch_assoc($buyer_result);

        $product_sql = "SELECT * FROM products WHERE id='$product_id'";
        $product_result = mysqli_query($this->db, $product_sql);
        $product_row = mysqli_fetch_assoc($product_result);
        $seller_id = $product_row['seller_id'];
        $price = $product_row['product_discounted_price'];
        $gst = $price / 100 * 18;
        $gross_total = $price + $gst;

        $sql1 = "INSERT INTO `orders` (`id`, `order_by`, `buyer_id`, `product_id`, `seller_id`, `order_amount`, `gst`, `gross_total`, `mode_of_payment`, `payment_status`, `delivery_status`, `status`, `created_at`, `updated_at`) VALUES (NULL, '$type', '$buyer_id', '$product_id', '$seller_id', '$price', '$gst', '$gross_total', 'C', 'P', 'P', 'A', '$created_at', CURRENT_TIMESTAMP)";

        $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
        if ($result) {
            $last_id = $this->db->insert_id;

            $today_date = date("Ym");

            $order_id = "KG" . $today_date . $last_id;

            $sql2 = "UPDATE orders SET order_id='$order_id' WHERE id ='$last_id'";
            $result2 = mysqli_query($this->db, $sql2) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result2) {
                header("Location: myorders.php?id=" . $_SESSION['id'] . "&type=" . $_SESSION['type'] . "&order=1");
            }
        }
        return $result;
    }

}
?>
