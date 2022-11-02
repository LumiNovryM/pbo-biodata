<?php

$data = file_get_contents('data.json');
$pelajar = json_decode($data, true);


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
                <li> <?= $pelajar["nama"] ?> </li>
                <!-- Kelas -->
                <li> <?= $pelajar["kelas"] ?> </li>
                <!-- Jurusan -->
                <li> <?= $pelajar["jurusan"] ?> </li>
                <!-- Sekolah -->
                <li> <?= $pelajar["sekolah"] ?> </li>
            <!-- For Public End -->
            <br>
            <!-- For Protected Start -->
            <h4>Protected Data</h4>
                <!-- Email -->
                <li> <?= $pelajar["email"] ?> </li>
                <!-- No.HP -->
                <li> <?= $pelajar["nohp"] ?> </li>
                <!-- Jenis Kelamin -->
                <li> <?= $pelajar["jeniskelamin"] ?> </li>
                <!-- Alamat -->
                <li> <?= $pelajar["alamat"] ?> </li>
            <!-- For Protected End -->
        </div>
    <!-- Container End-->
    <br><br><br>
    <!-- Navigasi Start-->
        <a href="form.php">Lengkapi Biodata</a>
    <!-- Navigasi Start-->

</body>
</html>