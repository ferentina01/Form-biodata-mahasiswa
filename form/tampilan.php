<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>DATABASE BIODATA MAHASISWA</h1>
    <table border="1" align="center" width="90%">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tempatlahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Fakultas</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Hobi</th>
            <th>Alamat</th>
        </tr>

        <?php include "formulir.php";
        $no = 1;
        $result = mysqli_query($conection, "select * from biodata");
        while ($tampil = mysqli_fetch_array($result)) {
            echo " 
                <tr>
                <td>$no</td>
                <td>$tampil[Nim]</td>
                <td>$tampil[Nama]  </td>
                <td>$tampil[Tempatlahir]  </td>
                <td>$tampil[Tanggallahir]  </td>
                <td>$tampil[email]  </td>
                <td>$tampil[Fakultas]  </td>
                <td>$tampil[jk]  </td>
                <td>$tampil[Agama]  </td>
                <td>$tampil[Hobi]  </td>
                <td>$tampil[Alamat]  </td>
        </tr>";
            $no++;
        }
        ?>


    </table>
    <table >
        <tr>
            <td>
                <a href="index.php"><input type="button" value="Back">
            </td>
        </tr>
    </table>






</body>

</html>