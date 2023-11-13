<?php    
include('fbarang.php');

$fbarang = new fbarang();  
$kd_brg=$_POST['kd_brg'];
$nm_brg=$_POST['nm_brg'];
$satuan=$_POST['satuan'];
$jumlah=$_POST['jumlah'];


// $kd_brg='3664';
// $nm_brg='rafi';
// $satuan='XIb';

$fbarang->input_data($kd_brg,$nm_brg,$satuan,$jumlah);
?>