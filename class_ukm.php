<?php
include "koneksi.php";

class ukm extends database{
    function __construct(){
		parent::__construct();
        
        // session_start();
		// if ($_SESSION['nim']==""){
		// 	echo "<script>alert('Anda belum login, silahkan login terlebih dahulu');window.location = 'login.php'</script>";
		// }
    } 

    //method get data
    function tampil_data(){
            $qry = mysqli_query($this->conn,"SELECT * FROM ukm");
            while($x = mysqli_fetch_assoc($qry)){
                $data[] = $x;
            }
            return $data;
        }
    

    //method insert data
    function tambah_data($data){
       
		 $qry = mysqli_query($this->conn, "insert into ukm values 
		('".$data['kode_ukm']."',
        '".$data['nama_ukm']."',
        '".$data['pembina']."')") 
		 or die(mysqli_error($this->conn));
		return $qry;
	}
    //method edit
    function edit($kode_ukm){
		$qry = mysqli_query($this->conn,
        "select * from ukm where kode_ukm = '$kode_ukm'");
		$data= mysqli_fetch_assoc($qry);
		return $data;
	}
    //method delete
    function hapus_data($kode_ukm){
		$qry = mysqli_query($this->conn,"delete from ukm where kode_ukm = '$kode_ukm'") or die(mysqli_error($this->conn));
		return $qry;
	}

    //method update
    function update_data($data){
		$qry = mysqli_query($this->conn, "UPDATE ukm 
        set nama_ukm = '".$data['nama_ukm']."', 
        pembina = '".$data['pembina']."', 
        where kode_ukm = '".$data['kode_ukm']."'") 
        or die(mysqli_error($this->conn));
		return $qry;
	}
}


?>