<?php
 
class DB_Functions {
 
    private $db;
 
    //put your code here
    // constructor
    function __construct() {
        include_once './db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
 
    /**
     * Storing new user
     * returns user details
     */
    /*public function storeUser($name, $email, $gcm_regid) {
        // insert user into database
        $result = mysql_query("INSERT INTO gcm_users(name, email, gcm_regid, created_at) VALUES('$name', '$email', '$gcm_regid', NOW())");
        // check for successful store
        if ($result) {
            // get user details
            $id = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM gcm_users WHERE id = $id") or die(mysql_error());
            // return user details
            if (mysql_num_rows($result) > 0) {
                return mysql_fetch_array($result);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }*/
	
	public function storeUser2_old($name, $gcm_regid) {
        // insert user into database
        $result = mysql_query("INSERT INTO gcm_users(name, email, gcm_regid, created_at) VALUES('$name','namlh@xyz.com', '$gcm_regid', NOW())");
        // check for successful store
        if ($result) {
            // get user details
            $id = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM gcm_users WHERE id = $id") or die(mysql_error());
            // return user details
            if (mysql_num_rows($result) > 0) {
                return mysql_fetch_array($result);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
	
	public function storeUser2($name, $gcm_regid) {
		$result = mysql_query("SELECT * FROM gcm_users WHERE name = '$name'") or die(mysql_error());
		// return user details
		if (mysql_num_rows($result) > 0) {
			//update
			$result = mysql_query("UPDATE gcm_users SET gcm_regid='$gcm_regid' WHERE name = '$name'");
			return $result;
		} else {
			// insert user into database
			$result = mysql_query("INSERT INTO gcm_users(name, email, gcm_regid, created_at) VALUES('$name','namlh@xyz.com', '$gcm_regid', NOW())");
			return $result;
		}
        
    }
	
	
 
    /**
     * Getting all users
     */
    public function getAllUsers() {
        $result = mysql_query("select * FROM gcm_users");
        return $result;
    }
	
	/**
     * delete all users
     */
    public function deleteAllUsers() {
        $result = mysql_query("DELETE FROM gcm_users");
        return $result;
    }
 
}
 
?>