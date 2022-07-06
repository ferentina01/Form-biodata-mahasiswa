<?php

include "formulir.php";

if (isset($_POST['Submit'])) {
    $Nim = $_POST['Nim'];
    $Nama = $_POST['Nama'];
    $Fakultas = $_POST['Fakultas'];
    $jk = $_POST['jk'];
    $Tempatlahir = $_POST['Tempatlahir'];
    $email = $_POST['email'];
    $Tanggallahir = $_POST['Tanggallahir'];
    $Agama = $_POST['Agama'];
    $Hobi = $_POST['Hobi'];
    $Alamat = $_POST['Alamat'];

   

    $simpan  = "INSERT INTO biodata (Nim, Nama, Fakultas, jk, Tempatlahir, email, Tanggallahir, Alamat, Agama, Hobi) VALUES ('$Nim', '$Nama', '$Fakultas', '$jk', '$Tempatlahir', '$email', '$Tanggallahir', '$Alamat', '$Agama', '$Hobi')";
    $result = mysqli_query($conection, $simpan);

    if ($result) {
        echo "<script>alert('Data Telah berhasil disimpan');window.location='index.php'</script>";
    }
}