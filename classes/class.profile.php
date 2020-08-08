<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "classes/db_config.php";

class Profile {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    /*     * * for select data ** */

    public function get_profile_details() {

        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $type = isset($_GET['type']) ? $_GET['type'] : '';


        if ($type == "admin") {
            $sql = "SELECT * FROM admin WHERE id = $id";
        } else if ($type == "Buyer") {
            $sql = "SELECT * FROM buyers WHERE id = $id";
        } else if ($type == "Seller") {
            $sql = "SELECT * FROM sellers WHERE id = $id";
        } else {
            header("location:bookings/index.php");
        }

        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);

        $sector_id = $row['sector_id'];
        $sector_sql = "SELECT sector_name FROM sectors WHERE id = $sector_id";
        $sector_result = mysqli_query($this->db, $sector_sql);
        $sector_row = mysqli_fetch_array($sector_result);
        ?>
        <br>
        <div class="row">
            <div class="col-12 mb-4">
                <h4 class="text-right">Welcome, <?php
                    if ($type == "admin") {
                        echo $row['username'];
                    } else {
                        echo $row['name'];
                    }
                    ?></h4>
            </div>
            <div class="col-3">
                <div class="profile-picture">
                    <?php
                    if ($type == "Seller") {
                        ?>
                        <img src="bookings/uploads/sellers/<?= $row['profile_pic']; ?>" alt="<?= $row['profile_pic']; ?>" class="img-fluid ">
                    <?php } else if ($type == "Buyer") { ?>
                        <img src="bookings/uploads/buyers/<?= $row['profile_pic']; ?>" alt="<?= $row['profile_pic']; ?>" class="img-fluid ">
                    <?php } else { ?>
                        <img src="bookings/uploads/adminpic/<?= $row['user_image']; ?>" alt="<?= $row['profile_pic']; ?>" class="img-fluid ">
                    <?php } ?>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="font-weight:bold; width:20%;">Name</td>
                                <td><?php
                                    if ($type == "admin") {
                                        echo $row['username'];
                                    } else {
                                        echo $row['name'];
                                    }
                                    ?></td>
                            </tr>
                            <?php
                            if ($type == "Seller") {
                                ?>
                                <tr>
                                    <td style="font-weight:bold; width:20%;">Entity Name</td>
                                    <td><?= $row['entity_name']; ?></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td style="font-weight:bold; width:20%;">Sector Name</td>
                                <td><?= $sector_row['sector_name']; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; width:20%;">Phone</td>
                                <td><?= $row['phone']; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; width:20%;">Email</td>
                                <td><?= $row['email']; ?></td>
                            </tr>
        <!--                            <tr>
                                        <td style="font-weight:bold; width:20%;">Address</td>
                                        <td></td>
                                    </tr>-->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
    }

    /*     * * get data to be updated ** */

    public function get_buyers_data_update($id) {

        $sql = "SELECT * FROM buyers WHERE id='$id'";
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

}
?>
