<?php
include "koneksi.php";

class admin extends database{
    function __construct(){
		parent::__construct();
    }

             
        /**
         * login
         *
         * @param  mixed $username
         * @param  mixed $password
         * @return void
         */
        public function login($username,$password){
        
            $qry = mysqli_query($this->conn,"SELECT * FROM  admin  WHERE username = '$username'
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