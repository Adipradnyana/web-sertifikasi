<?php
include "koneksi.php";

class dosen extends database{
    function __construct(){
		parent::__construct();

		// session_start();
		// if ($_SESSION['nim']==""){
		// 	echo "<script>alert('Anda belum login, silahkan login terlebih dahulu');window.location = 'login.php'</script>";
		// }
	}

    // method menampilkan data
    function tampil_data(){
        $qry = mysqli_query($this->conn,"SELECT * FROM dosen");
            while($x = mysqli_fetch_assoc($qry)){
                $data[] = $x;
            }
            return $data;
        }
    
    //method menambahkan data
    function tambah_data($data){
        $qry = mysqli_query($this->conn, "insert into dosen values 
       ('".$data['nidn']."',
       '".$data['nama']."',
       '".$data['pendidikan']."',
       '".$data['tgl_lahir']."',
       '".$data['gender']."',
       '".$data['alamat']."',
       '".$data['no_hp']."',
       '".$data['email']."')") 
        or die(mysqli_error($this->conn));
       return $qry;
   }

   //method edit data
   function edit($nidn){
       $qry = mysqli_query($this->conn,
       "select * from dosen where nidn = '$nidn'");
       $data= mysqli_fetch_assoc($qry);
       return $data;
   }
   
   //method hapus data
   function hapus_data($nidn){
       $qry = mysqli_query($this->conn,"delete from dosen where nidn = '$nidn'") or die(mysqli_error($this->conn));
       return $qry;
   }

   //method perbarui data
   function update_data($data){
       $qry = mysqli_query($this->conn, "UPDATE dosen 
       set nama = '".$data['nama']."', 
       pendidikan = '".$data['pendidikan']."', 
       tgl_lahir = '".$data['tgl_lahir']."', 
       gender = '".$data['gender']."',
       alamat = '".$data['alamat']."',
       no_hp = '".$data['no_hp']."',
       email = '".$data['email']."'
       where nidn = '".$data['nidn']."'") 
       or die(mysqli_error($this->conn));
       return $qry;
   }

}
?>