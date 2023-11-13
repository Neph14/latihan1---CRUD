<?php 

include('database.php'); 

class fbarang extends  database {
   
  function input_data($kd_brg,$nm_brg,$satuan,$jumlah){  
        if (!mysqli_query($this->koneksi,"insert into tbl_barang (kd_brg,nm_brg,satuan,jumlah) values ('$kd_brg','$nm_brg','$satuan','$jumlah')"))
            { echo("Errorcode: " . $this->koneksi -> errno); } else { echo 'Data Berhasil Di Simpan';}
        $this->koneksi->close(); 
    }    

 function update_data($kd_brg,$nm_brg,$satuan,$jumlah){  
        if (!mysqli_query($this->koneksi,"Update tbl_barang set nm_brg='$nm_brg',satuan='$satuan',jumlah='$jumlah' where kd_brg='$kd_brg'"))
            {  echo("Error description: " . $this->koneksi -> error); } else { echo 'Data Berhasi Di Update';}
        $this->koneksi->close(); 
    }  

  function hapus_data($kd_brg){
        if (!mysqli_query($this->koneksi,"delete from tbl_barang where kd_brg='$kd_brg'"))
        {
            echo("Error description: " . $this->koneksi -> error); } else { echo 'Data Berhasil Di Delete';
        }
    } 

function tampil_data()
    {
        $sql = mysqli_query($this->koneksi,"select * from tbl_barang");
        $number = mysqli_num_rows($sql);  
        if ($number==0) {  echo "Data tidak ada..."; exit; } 
        while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)){
            $hasil[] = $row;
        }
        return $hasil;
    } 
     
 public function cari_data ($kd_brg){ 
        $sql = mysqli_query($this->koneksi,"select * from tbl_barang where kd_brg='$kd_brg'"); 
        $number = mysqli_num_rows($sql);
        if ($number==0) {  echo "Data tidak ditemukan..."; exit; } 
        while ($d = mysqli_fetch_array($sql,MYSQLI_ASSOC))
        {
            $result[] = $d;
        } 
        return $result;
    }  
    
}
?>
