<?php
include 'proccess.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    
    <!-- Container Start-->
        <div class="container">
            <h1>Biodataku</h1>
            <br>
            <!-- For Public Start -->
            <h4>Public Data</h4>
                <!-- Nama -->
                <li> <?= $dbload->nama= $_POST['nama']; ?> </li>
                <!-- Kelas -->
                <li> <?= $dbload->kelas= $_POST['kelas']; ?> </li>
                <!-- Jurusan -->
                <li> <?= $dbload->jurusan= $_POST['jurusan']; ?> </li>
                <!-- Sekolah -->
                <li> <?= $dbload->sekolah= $_POST['sekolah']; ?> </li>
            <!-- For Public End -->
            <br>
            <!-- For Protected Start -->
            <h4>Protected Data</h4>
                <?php 
                $dbsiswa = $dbload->InsertDataProtected($_POST['email'], $_POST['nohp'], $_POST['jeniskelamin'], $_POST['alamat']);
                // var_dump($dbsiswa)
                ?>
                <!-- Email -->
                <li> <?= $dbsiswa["email"] ?> </li>
                <!-- No.HP -->
                <li> <?= $dbsiswa["nohp"] ?> </li>
                <!-- Jenis Kelamin -->
                <li> <?= $dbsiswa["jeniskelamin"] ?> </li>
                <!-- Alamat -->
                <li> <?= $dbsiswa["alamat"] ?> </li>
            <!-- For Protected End -->
        </div>
    <!-- Container End-->
    <br><br><br>
    <!-- Navigasi Start-->
        <a href="form.php">Lengkapi Biodata</a>
    <!-- Navigasi Start-->

</body>
</html