<?php 	
include('fbarang.php');
$fbarang = new fbarang();  

$kd_brg='3664';  

$dataku = $fbarang->cari_data($kd_brg);  

// $kd_brg=$_POST['kd_brg']; 
 		foreach($dataku as $row){  
				 echo $row['kd_brg'] .'<br>'; 
				 echo $row['nm_brg'] .'<br>'; 
				 echo $row['satuan'] .'<br>';  
				 echo '<br>'; 
 		}
 ?>