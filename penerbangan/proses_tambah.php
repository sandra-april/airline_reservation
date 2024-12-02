<?php

session_start();   //mulai sesi

include("../koneksi.php");


if(isset($_POST['simpan'])){
    
    
    $kotaasal = $_POST['kota_asal'];
    $kotatujuan = $_POST['kota_tujuan'];
    $jamkeberangkatan= $_POST['jam_keberangkatan'];
   

    $sql = "INSERT INTO penerbangan
       (kota_asal, kota_tujuan, jam_keberangkatan)
       VALUES ('$kotaasal', '$kotatujuan','$jamkeberangkatan')";

       $query = mysqli_query($db,  $sql);

       if ($query){ 
        $_SESSION['notifikasi']= "Data siswa berhasil ditambahkan!";
       } else {
        $_SESSION['notifikasi']= "Data siswa gagal ditambahkan!";
       }
   
       header('Location: index.php');
       } else {

        die("Akses ditolak...");
       }
       ?>
