<?php
include "koneksi.php";

class user extends database{
    function __construct(){
		parent::__construct();
    }
        public function login($username,$password){
        
            $qry = mysqli_query($this->conn,"SELECT * FROM users WHERE username = '$username'
            AND password = '$password'");
            $data = mysqli_fetch_assoc($qry);
            return $data;
            // $row = mysqli_num_row($qry);
            // if($row == 1){
            //     session_start();
            //     $_SESSION['nim'] = $data['nim'];
            //     return true;
            // }else{
            //     return false;
            // }
        }
    
    


}
?>