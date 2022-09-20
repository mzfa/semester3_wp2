<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Biodata</title>
</head>
<body>
    <h5>BIODATA SAYA</h5>

    <br>

    <table>
        <tr>
            <th>NIM</th>
            <td>:</td>
            <td><?= $nim; ?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <th>Prodi</th>
            <td>:</td>
            <td><?= $prodi; ?></td>
        </tr>
    </table>
</body>
</html>