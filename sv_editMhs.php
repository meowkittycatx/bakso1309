<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$id=$_POST["id"];
$nama=$_POST["nama"];
$email=$_POST["email"];
$jurusan=$_POST["jurusan"];
$uploadOk=1;

//membuat query
$sql="update mhs set nama='$nama',
					 email='$email'
					 email='$jurusan'
					 where id='$id'";
mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
header("location:updateMhs.php");
?>