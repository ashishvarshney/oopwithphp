<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once "classes/db_config.php";

class Register {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    /* REGISTER SELLER */

    public function reg_seller($name, $entity_name, $phone, $profile_pic, $email, $password, $sector) {

        $created_at = date("Y-m-d");

        $password = md5($password);

        $profile_pic = time() . $_FILES['profile_pic']['name'];
        $uploadfiles = move_uploaded_file($_FILES['profile_pic']['tmp_name'], 'bookings/uploads/sellers/' . $profile_pic);

        $sql = "SELECT * FROM sellers WHERE email='$email'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);

        // Checking if the email is available in db
        $check = $this->db->query($sql);
        $count_row = $check->num_rows;

        //if the username is not in db then insert to the table
        if ($count_row == 0) {

            $sql1 = "INSERT INTO `sellers` (`id`, `name`, `entity_name`, `phone`, `profile_pic`, `email`, `password`, `sector_id`, `status`, `created_at`, `updated_at`) VALUES (NULL, '$name', '$entity_name', '$phone', '$profile_pic', '$email', '$password', '$sector', 'A', '$created_at', CURRENT_TIMESTAMP)";
            $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result) {
                header("Location: login.php?success=1");
            }
            return $result;
        } else {
            echo "<script type='text/javascript'>alert('Email already exists.');</script>";
        }
    }
    
    /* REGISTER BUYERS */

    public function reg_buyers($name, $phone, $profile_pic, $email, $password, $sector) {

        $created_at = date("Y-m-d");

        $password = md5($password);

        $profile_pic = time() . $_FILES['profile_pic']['name'];
        $uploadfiles = move_uploaded_file($_FILES['profile_pic']['tmp_name'], 'bookings/uploads/buyers/' . $profile_pic);

        $sql = "SELECT * FROM buyers WHERE email='$email'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);

        // Checking if the email is available in db
        $check = $this->db->query($sql);
        $count_row = $check->num_rows;

        //if the username is not in db then insert to the table
        if ($count_row == 0) {

            $sql1 = "INSERT INTO `buyers` (`id`, `name`, `phone`, `profile_pic`, `email`, `password`, `sector_id`, `status`, `created_at`, `updated_at`) VALUES (NULL, '$name', '$phone', '$profile_pic', '$email', '$password', '1', 'A', '$created_at', CURRENT_TIMESTAMP)";
            $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result) {
                header("Location: login.php?success=1");
            }
            return $result;
        } else {
            echo "<script type='text/javascript'>alert('Email already exists.');</script>";
        }
    }

    /*     * * GET SECTORS ** */

    public function get_sector() {

        $sql = "SELECT * FROM sectors order by sector_name ";
        $result = mysqli_query($this->db, $sql);

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <option value="<?php echo $row["id"]; ?>"><?php echo $row["sector_name"]; ?></option>
            <?php
        }
    }

}
?>
