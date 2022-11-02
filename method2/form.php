<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    
    <!-- Form Start -->
        <form action="index.php" method="POST">
            <!-- For Public Start -->
                <!-- Nama -->
                <label for="">Nama</label>
                <input type="text" name="nama"> <br><br>
                <!-- Kelas -->
                <label for="">Kelas</label>
                <input type="text" name="kelas"> <br><br>
                <!-- Jurusan -->
                <label for="">Jurusan</label>
                <input type="text" name="jurusan"> <br><br>
                <!-- Sekolah -->
                <label for="">Sekolah</label>
                <input type="text" name="sekolah"> <br><br>
            <!-- For Public End -->

            <!-- For Protected Start -->
                <!-- Email -->
                <label for="">Email</label>
                <input type="text" name="email"> <br><br>
                <!-- No.HP -->
                <label for="">No.Hp</label>
                <input type="text" name="nohp"> <br><br>
                <!-- Jenis Kelamin -->
                <label for="">Jenis Kelamin</label>
                <input type="text" name="jeniskelamin"> <br><br>
                <!-- Alamat -->
                <label for="">Alamat</label>
                <input type="text" name="alamat"> <br><br>
            <!-- For Protected End -->
            <!-- Submit Start -->
            <button type="submit" name="submit">Submit</button> <br><br>
            <!-- Submit End -->
        </form>
    <!-- Form End -->


    <!-- Navigasi Start -->
        <a href="index.php">Lihat Biodata</a>
    <!-- Navigasi End -->

</body>
</html>