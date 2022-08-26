<?php
include "koneksi.php";

class jurusan extends database{
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
            $qry = mysqli_query($this->conn,"SELECT * FROM jurusan");
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
        $qry = mysqli_query($this->conn, "insert into jurusan values 
       ('".$data['kode_jurusan']."',
       '".$data['nama_jurusan']."')") 
        or die(mysqli_error($this->conn));
       return $qry;
   }
   
      
   /**
    * edit
    *
    * @param  mixed $kode_jurusan
    * @return void
    */
   function edit($kode_jurusan){
       $qry = mysqli_query($this->conn,
       "select * from jurusan where kode_jurusan = '$kode_jurusan'");
       $data= mysqli_fetch_assoc($qry);
       return $data;
   }

      
   /**
    * hapus_data
    *
    * @param  mixed $kode_jurusan
    * @return void
    */
   function hapus_data($kode_jurusan){
       $qry = mysqli_query($this->conn,"delete from jurusan where kode_jurusan = '$kode_jurusan'") or die(mysqli_error($this->conn));
       return $qry;
   }

      
   /**
    * update_data
    *
    * @param  mixed $data
    * @return void
    */
   function update_data($data){
       $qry = mysqli_query($this->conn, "UPDATE jurusan 
       set nama_jurusan = '".$data['nama_jurusan']."'
        where kode_jurusan = '".$data['kode_jurusan']."'") 
       or die(mysqli_error($this->conn));
       return $qry;
   }
}
?>