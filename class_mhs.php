<?php
include "koneksi.php";

class mahasiswa extends database {
    function __construct(){
		parent::__construct();

        // session_start();
		// if ($_SESSION['nim']==""){
		// 	echo "<script>alert('Anda belum login, silahkan login terlebih dahulu');window.location = 'login.php'</script>";
		// }
		
    }
    //method get data
    function tampil_data(){
            $qry = mysqli_query($this->conn,"SELECT * FROM mahasiswa JOIN  jurusan ON mahasiswa.kode_jurusan = jurusan.kode_jurusan");
            while($x = mysqli_fetch_assoc($qry)){
                $data[] = $x;
            }
            return $data;
        }
    //method insert data
    function tambah_data($data){
                $qry = mysqli_query($this->conn, "insert into mahasiswa values 
		        ('".$data['nim']."',
                 '".$data['nama_mhs']."',
                 '".$data['kode_jurusan']."',
		         '".$data['jenis_kelamin']."',
                 '".$data['alamat']."',
                 '".$data['no_hp']."',
                 '".$data['foto']."',
                 '".$data['email']."',
                 '".$data['dosen_wali']."')")
		         or die(mysqli_error($this->conn)); 
                 return $qry;
            }

    //method edit
    function edit($nim){
		$qry = mysqli_query($this->conn,
        "select * from mahasiswa where nim = '$nim'");
		$data= mysqli_fetch_assoc($qry);
		return $data;
	}
    //method delete
    function hapus_data($nim){
		$qry = mysqli_query($this->conn,"delete from mahasiswa where nim = '$nim'") or die(mysqli_error($this->conn));
		return $qry;
	}

    //method update
    function update_data($data){
		$qry = mysqli_query($this->conn, "UPDATE mahasiswa 
        set nama_mhs = '".$data['nama_mhs']."', 
        kode_jurusan = '".$data['kode_jurusan']."', 
        gender = '".$data['jenis_kelamin']."', 
        alamat = '".$data['alamat']."',
        no_hp = '".$data['no_hp']."',
        email = '".$data['email']."',
        dosen_wali = '".$data['dosen_wali']."'
        where nim = '".$data['nim']."'") 
        or die(mysqli_error($this->conn));
		return $qry;
	}

    //method search data
    function cari_data($nama){
        $qry = mysqli_query($this->conn,"SELECT * FROM mahasiswa JOIN jurusan ON mahasiswa.kode_jurusan = jurusan.kode_jurusan WHERE nama_mhs LIKE '%".$nama."%'");
        while($x = mysqli_fetch_assoc($qry)){
            $data[] = $x;
        }
        return $data;
    } 

}
