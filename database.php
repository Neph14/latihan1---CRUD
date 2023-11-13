<?php 
class database{
    public $host = "localhost"; // 127.0.0.1
                                //alamat server yang menjadi tempat penyimpanan database
    public $username = "root"; // nama user database
    public $password = "";  
    public $database = "db_jual"; // nama database database
    public $koneksi = "";
 
function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database); 
        if (mysqli_connect_errno()){
            echo "Koneksi database gagal : " . mysqli_connect_error(); 
            } 
        } 

} 
 //$db = new database();  
 //$db ->Create_tabel();
?>