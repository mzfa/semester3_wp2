<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA MAHASISWA</title>
</head>
<body>

    <center>
        <h1>BIODATA MAHASISWA</h1>

        <form action="<?= base_url('biodata/cetak') ?>" method="post">
        
            <table>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td>:</td>
                    <td><select name="prodi" id="prodi">
                        <option value="si">Sistem Informasi</option>
                        <option value="rpl">Rekayasa Perangkat Lunak</option>
                    </select></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    
    
    </center>


</body>
</html>