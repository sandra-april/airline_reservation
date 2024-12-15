<?php
 session_start(); //mulai sesi
 include ("../koneksi.php");

 if (isset($_GET['penerbangan_id'])) {

    $id = $_GET['penerbangan_id'];
    $sql = "DELETE FROM penerbangan WHERE penerbangan_id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION ['notifikasi'] = "Data penerbangan berhasil dihapus!";
    } else {
        $_SESSION ['notifikasi'] = "Data penerbangan gagal dihapus!";
    }

    header('Location: index.php');                       
} else {
    die("Akses ditolak");
}
?>