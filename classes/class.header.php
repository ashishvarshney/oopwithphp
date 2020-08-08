<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "classes/db_config.php";

class Header {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    /*     * * for select data ** */


    function getMemberCartItem($member_id)
    {
        $sql = "SELECT tbl_product.*, tbl_cart.id as cart_id,tbl_cart.quantity FROM tbl_product, tbl_cart WHERE 
            tbl_product.id = tbl_cart.product_id AND tbl_cart.member_id = $member_id";
        
        $result = mysqli_query($this->db, $sql);

        $cartResult = array();

        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_assoc($result)) {

                $cartResult[] = $row;
            }
        }
        return $cartResult;
    }

    public function get_sector_header() {
        $ct = 1;
        $sql4 = "SELECT s1.id As id,s1.sector_name As sector_name, s1.ssc_slug As ssc_slug, count(s1.sector_name) AS total, s1.logo As logo FROM `sectors` As s1, products As m1 WHERE s1.id = m1.sector GROUP by s1.sector_name";
        $result = mysqli_query($this->db, $sql4);
        if ($result->num_rows > 0) {
            // output data of each row

            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="products.php?sector=<?php echo $row["id"]; ?>">
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
        } else {
            echo "0 results";
        }
    }

}
?>
