<?php

session_start();   
include("../koneksi.php");


if(isset($_POST['simpan'])){
 
    $id = $_POST['penerbangan_id'];
    $kotaasal = $_POST['kota_asal'];
    $kotatujuan = $_POST['kota_tujuan'];
    $jamkeberangkatan = $_POST['jam_keberangkatan'];


   
$sql = "UPDATE penerbangan SET
     kota_asal ='$kotaasal', 
    kota_tujuan ='$kotatujuan',
    jam_keberangkatan ='$jamkeberangkatan'
   
    WHERE penerbangan_id = $id";


$query = mysqli_query($db,$sql);

if ($query){
    $_SESSION['notifikasi']= "Data berhasil diperbarui!";
   } else {
    $_SESSION['notifikasi']= "Data gagal diperbarui!";
   }

   header('Location: index.php');
   } else {

    die("Akses ditolak...");
   }
   ?>

