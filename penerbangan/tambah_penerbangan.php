<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> tambah</title>
</head>
<body>
    <h3>Tambah Data </h3>
    <form action="proses_tambah.php"method="POST">
    <table border="0">
        <tr>
            <td>kota asal</td>
            <td><input type ="text" name="kota_asal" required></td>
        </tr>
        <tr>
            <td>kota tujuan</td>
            <td><input type ="text" name="kota_tujuan" required></td>
        </tr>
        <tr
                <td>jam keberangkatan</td>
                <td>
                    <input type='time' name='jam_keberangkatan' required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">
            simpan </button>
</form>
</body>
</html>