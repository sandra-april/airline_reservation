<?php
include("../koneksi.php"); 
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENERBANGAN</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<h2>DATA PENERBANGAN</h2>
<?php if (isset($_SESSION['notifikasi'])): ?>
<p><?php echo $_SESSION['notifikasi']; ?></p>
<?php unset ($_SESSION['notfikasi']); ?>
<?php endif; ?>
<table>
    <thead>
    <tr align= "center">
      <th>#</th>
      <th>kota asal</th>
      <th>kota tujuan</th>
      <th>jam keberangkatan</th>
      <th><a href ="tambah_penerbangan.php">Tambah Data</a></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    $query = $db->query("SELECT*FROM penerbangan");
    while ($airline = $query->fetch_assoc()) {
        ?> 
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $airline ['kota_asal'] ?></td>
        <td><?php echo $airline ['kota_tujuan'] ?></td>
        <td><?php echo date('H:i a', strtotime($airline['jam_keberangkatan'])); ?></td>
        <td align="center">
        <a href="edit_penerbangan.php?penerbangan_id=<?php echo $airline ['penerbangan_id'] ?>">Edit</a>
        <a onclick="return confirm ('anda yakin ingin menghapus data?')"
        href ="hapus_penerbangan.php?penerbangan_id=<?php echo $airline ['penerbangan_id'] ?>">hapus</a>
        </td>
        </tr>
        <?php 
    } 
    ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
    </html>