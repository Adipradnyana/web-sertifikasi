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
    
    /**
     * tampil_data
     *
     * @return void
     */
    function tampil_data(){
            $qry = mysqli_query($this->conn,"SELECT * FROM peserta");
            while($x = mysqli_fetch_assoc($qry)){
                $data[] = $x;
            }
            return $data;
        }
        
    /**
     * tambah_data
     *
     * @param  mixed $data
     * @return void
     */
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
        
    /**
     * edit
     *
     * @param  mixed $nim
     * @return void
     */
    function edit($nim){
		$qry = mysqli_query($this->conn,
        "select * from peserta where nim = '$nim'");
		$data= mysqli_fetch_assoc($qry);
		return $data;
	}
        
    /**
     * hapus_data
     *
     * @param  mixed $nim
     * @return void
     */
    function hapus_data($nim){
		$qry = mysqli_query($this->conn,"delete from peserta where nim = '$nim'") or die(mysqli_error($this->conn));
		return $qry;
	}

        
    /**
     * update_data
     *
     * @param  mixed $data
     * @return void
     */
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
  
    /**
     * cari_data
     *
     * @param  mixed $nama
     * @return void
     */
    function cari_data($nama){
        $qry = mysqli_query($this->conn,"SELECT * FROM peserta WHERE nama_mhs LIKE '%".$nama."%'");
        while($x = mysqli_fetch_assoc($qry)){
            $data[] = $x;
        }
        return $data;
    } 
}


?>