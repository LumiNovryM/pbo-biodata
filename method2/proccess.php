<?php

// Create Class Biodata
class biodata {
    // Property Public
    public $nama,
           $kelas,
           $jurusan,
           $sekolah;

    // Property Protected
    protected $email,
              $nohp,
              $kelamin,
              $alamat;

    // Create a Method To Insert Data
    public function InsertDataProtected( $email, $nohp, $kelamin, $alamat ){
        $data = [
            "email" => $this->email = $email, 
            "nohp" => $this->nohp = $nohp,
            "jeniskelamin" => $this->kelamin = $kelamin,
            "alamat" => $this->alamat = $alamat,
        ];

        return $data;
    }


}
  
// buat objek dari class laptop (instansiasi)
$dbload = new biodata();
  
// set property
$dbload->nama= $_POST['nama'];
$dbload->kelas= $_POST['kelas'];
$dbload->jurusan= $_POST['jurusan'];
$dbload->sekolah= $_POST['sekolah'];
