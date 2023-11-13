<?php 	
include('fbarang.php');
$fbarang = new fbarang();  
 
$dataku = $fbarang->tampil_data();

$no=1;
 		foreach($dataku as $row){
			     echo $no++  .'/'. $row['kd_brg'] .' / '. $row['nm_brg'] . ' / '.$row['satuan'] .'<br>';  
				 echo '<br>'; 
 		}
        
 ?>

 

 

 