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
    <div class="wrapper">
        <div class="container">
            <h1>FORM BIODATA MAHASISWA</h1>
            <?php
            include 'form_add_aksi.php';

            ?>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Nim</td>
                        <td>:</td>
                        <td><input type="number" name="Nim" required placeholder="Masukkan Nim Anda"></td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="Nama" required placeholder="Masukkan Nama anda"></td>
                    </tr>

                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="Tempatlahir" required placeholder="Masukkan tempat lahir anda"></td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="Tanggallahir" required placeholder="Masukkan tanggal lahir anda"></td>
                    </tr>

                    <tr>
                        <td>email</td>
                        <td>:</td>
                        <td><input type="email" name="email" required placeholder="Masukkan email anda"> </td>
                    </tr>

                    <tr>
                        <td>Fakultas</td>
                        <td>:</td>
                        <td>
                            <select name="Fakultas" required>
                                <option selected value="" hidden>Pilih Fakultas</option>
                                <option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
                                <option value="Fakultas Keguruan dan Ilmu Pendidikan">Fakultas Keguruan dan Ilmu Pendidikan</option>
                                <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                                <option value="Fakultas Teknik">Fakultas Teknik</option>
                                <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                                <option value="Fakultas Keperawatan">Fakultas Keperawatan</option>
                                <option value="Fakultas Kesehatan">Fakultas Kesehatan</option>
                                <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jk" required placeholder="jk" value="laki-laki">Pria<input type="radio" name="jk" value="perempuan">Wanita</td>
                    </tr>

                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select name="Agama" required>
                                <option selected value="" hidden>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>

                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td><input type="checkbox" name="Hobi" value="baca buku" >baca buku
                            <input type="checkbox" name="Hobi" value="hacking">hacking
                            <input type="checkbox" name="Hobi" value="bermain">bermain
                            <input type="checkbox" name="Hobi" value="Melukis">Melukis
                            <input type="checkbox" name="Hobi" value="Browsing">Browsing
                        </td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td> <textarea type="text" name="Alamat" required></textarea> </td>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" value="submit" name="Submit">Kirim</button>
                            <button type="reset" name="reset">Batal</button>
                            <a href="tampilan.php"><button type="button" >Show data</button> </a>

                        </td>
                    </tr>
            </form>
        </div>
    </div>


</body>

</html>