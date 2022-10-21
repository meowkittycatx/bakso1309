<?php

require "fungsi.php";

$jmlDataPerHal = 3;

$sql="select * from mhs";		
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$jmlData = mysqli_num_rows($qry);

$jmlHal = ceil($jmlData / $jmlDataPerHal);
if (isset($_GET['hal'])){
	$halAktif=$_GET['hal'];
}else{
	$halAktif=1;
}

$awalData=($jmlDataPerHal * $halAktif)-$jmlDataPerHal;


$sql="select * from mhs limit $awalData,$jmlDataPerHal";
$hasil=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi))	
	
?>