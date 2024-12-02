<?php

include("../koneksi.php");

$id = $_GET['penerbangan_id'];

$query = $db->query("SELECT*FROM penerbangan WHERE penerbangan_id = '$id'");
$airline = $query->fetch_assoc() ;
?>
<!DOCTYPE html>
<html>
<head>
    <title>PENERBANGAN</title>
</head>
<body>
    <h3>Edit data</h3>
    <form action="proses_edit.php"method="POST">

<td><input type ="hidden" name="penerbangan_id"value="<?php echo $airline['penerbangan_id']; ?>">
    <table border="0">
        <tr>
            <td>kota asal</td>
            <td>
                <input type ="text" name="kota_asal" 
                value="<?php echo $airline['kota_asal']; ?>" required>
        </td>
</tr>
<tr>
            <td>kota tujuan</td>
            <td>
                <input type ="text" name="kota_tujuan" 
                value="<?php echo $airline['kota_tujuan']; ?>" required>
        </td>
</tr>
<tr>
                <td>jam keberangkatan</td>
                <td><input type='time' name='jam_keberangkatan'
                value="<?php echo $airline['jam_keberangkatan']; ?>"required></td>
            </tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>