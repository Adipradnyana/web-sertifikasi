<?php
include "koneksi.php";

class user extends database{
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
        public function login($data){
        
          $qry = "SELECT * FROM users WHERE (username = '".$data['username']."') AND password = '".$data['password']."' "  or die(mysqli_error($this->conn));
          $exec = mysqli_query($this->conn, $qry);
          $data = mysqli_fetch_array($exec);
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