<?php   
include('fbarang.php');
$fbarang = new fbarang();  

$kd_brg='3663';
$nm_brg='asep';
$satuan='XI RPL 1';

$fbarang->update_data($kd_brg,$nm_brg,$satuan);
?>