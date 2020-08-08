<?php

if (!isset($_SESSION)) {
	//ini_set(’session.gc_maxlifetime’, 30*60);
    session_start();
}
include_once "classes/db_config.php";

class Login {

    public $db;

    public function __construct() {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    /* CHECK ADMIN LOGIN */

    public function registered_users($username, $password) {

        $password = md5($password);
        $sql2 = "SELECT * from registered_users WHERE (username='$username' || email='$username') AND password='$password' AND status='A'";
        $result = mysqli_query($this->db, $sql2);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;

        // Checking if the username is available in the table
        if ($count_row == 1) {
            // this login var will use for the session thing
            $_SESSION['login'] = true;
            $_SESSION['type'] = "Buyer";
            $_SESSION['id'] = $user_data['id'];
            $_SESSION['display_name'] = $user_data['display_name'];
            $_SESSION['email'] = $user_data['email'];
            $_SESSION['phone_number'] = $user_data['phone_number'];
            $_SESSION['business_name'] = $user_data['business_name'];
            $_SESSION['status'] = $user_data['status'];
			
            //$this->login_log($emailusername);
            return true;
        } else {
            return false;
        }
    }

   
    public function updateprofile($member_id,$phone_number,$business_number,$business_name,$business_logo,$business_address,$business_website){

        if($business_logo == "old_image"){
            $query = "UPDATE registered_users SET phone_number='$phone_number',phone_number='$phone_number',business_number='$business_number',business_name='$business_name',business_address='$business_address',business_website='$business_website' WHERE id = $member_id";

        }else{
            $query = "UPDATE registered_users SET phone_number='$phone_number',phone_number='$phone_number',business_number='$business_number',business_name='$business_name',business_logo='$business_logo',business_address='$business_address',business_website='$business_website' WHERE id = $member_id";
 
        }
        


        $result = mysqli_query($this->db, $query) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result) {
                header("Location: account.php");
            }
        
            return TRUE;


    }


    public function submit_registered_users($username, $password, $full_name, $email, $business_name, $phone_number) {





        $set_password = md5($password);

       $query = "INSERT INTO `registered_users` (`id`, `username`, `display_name`, `password`, `email`, `business_name`, `phone_number`, `business_logo`, `business_website`, `business_number`, `business_address`, `status`, `created_date`) VALUES (NULL, '$username', '$full_name', '$set_password', '$email', '$business_name','$phone_number', '','','','', 'A', CURRENT_TIMESTAMP)";
            
        //$query = "INSERT INTO registered_users ('id','username','display_name','password','email','business_name','phone_number','business_logo','business_website','business_number','business_address','status') VALUES (NULL,'$username', '$set_password', '$full_name', '$email', '$business_name', '', '', '', '', 'A')";
        
        $result = mysqli_query($this->db, $query) or die(mysqli_connect_errno() . "Data cannot inserted");
            if ($result) {
                header("Location: login.php");
            }
        
            return TRUE;
    }

    /* CHECK LOGIN */

    public function check_seller_login($username, $password) {

        $password = md5($password);
        $sql2 = "SELECT * from sellers WHERE (name='$username' || email='$username' || phone='$username') AND password='$password' AND status='A'";
        $result = mysqli_query($this->db, $sql2);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;

        // Checking if the username is available in the table
        if ($count_row == 1) {
            // this login var will use for the session thing
            $_SESSION['login'] = true;
            $_SESSION['type'] = "Seller";
            $_SESSION['id'] = $user_data['id'];
            $_SESSION['username'] = $user_data['name'];
            $_SESSION['entity'] = $user_data['entity_name'];
            $_SESSION['phone'] = $user_data['phone'];
            $_SESSION['profile_pic'] = $user_data['profile_pic'];
            $_SESSION['email'] = $user_data['email'];
            $_SESSION['password'] = $user_data['password'];
            $_SESSION['sector_id'] = $user_data['sector_id'];
            $_SESSION['status'] = $user_data['status'];
            //$this->login_log($emailusername);
            return true;
        } else {
            return false;
        }
    }
    
    /* LOGOUT */

    public function user_logout() {

        $_SESSION['login'] = FALSE;
        session_destroy();
        header("location:index.php");
    }

    

}

?>
