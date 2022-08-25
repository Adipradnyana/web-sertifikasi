<?php
include "koneksi.php";

class peserta extends database{
    function __construct(){
		parent::__construct();
        
        // session_start();
		// if ($_SESSION['nim']==""){
		// 	echo "<script>alert('Anda belum login, silahkan login terlebih dahulu');window.location = 'login.php'</script>";
		// }
    } 

    //method menampilkan data
    function tampil_data(){
            $qry = mysqli_query($this->conn,"SELECT * FROM peserta");
            while($x = mysqli_fetch_assoc($qry)){
                $data[] = $x;
            }
            return $data;
        }
    

    //method menambahkan data
    function tambah_data($data){
		 $qry = mysqli_query($this->conn, "insert into peserta values 
         ('".$data['nim']."',
         '".$data['nama_mhs']."',
         '".$data['kode_jurusan']."',
         '".$data['gender']."',
         '".$data['no_hp']."',
         '".$data['email']."',
        '".$data['ukm']."')") 
		 or die(mysqli_error($this->conn));
		return $qry;
	}
    //method edit data
    function edit($nim){
		$qry = mysqli_query($this->conn,
        "select * from peserta where nim = '$nim'");
		$data= mysqli_fetch_assoc($qry);
		return $data;
	}
    //method hapus data
    function hapus_data($nim){
		$qry = mysqli_query($this->conn,"delete from peserta where nim = '$nim'") or die(mysqli_error($this->conn));
		return $qry;
	}

    //method perbarui data
    function update_data($data){
		$qry = mysqli_query($this->conn, "UPDATE peserta 
        set nama_mhs = '".$data['nama_mhs']."', 
        kode_jurusan = '".$data['kode_jurusan']."', 
        gender = '".$data['gender']."', 
        no_hp = '".$data['no_hp']."',
        email = '".$data['email']."',
        ukm = '".$data['ukm']."'
        where nim = '".$data['nim']."'")
        or die(mysqli_error($this->conn));
		return $qry;
	}

    //method mencari data
    function cari_data($nama){
        $qry = mysqli_query($this->conn,"SELECT * FROM peserta WHERE nama_mhs LIKE '%".$nama."%'");
        while($x = mysqli_fetch_assoc($qry)){
            $data[] = $x;
        }
        return $data;
    } 
}


?>