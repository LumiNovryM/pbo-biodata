<?php

class Biodata {

    public $nama,
           $kelas,
           $jurusan,
           $sekolah;

    protected $email,
              $nohp,
              $jeniskelamin,
              $alamat;

    public function IsiDataPublic() {
        $data_public = [
            // For Public
            "nama" => $this->nama = $_POST["nama"],
            "kelas" => $this->kelas = $_POST["kelas"],
            "jurusan" => $this->jurusan = $_POST["jurusan"],
            "sekolah" => $this->sekolah = $_POST["sekolah"]
        ];
        
        return $data_public;

    }

}

class Biodata_protected extends Biodata {

    public function IsiDataProtected() {
        $data_private = [
            // For Protected
            "email" => $this->email = $_POST["email"],
            "nohp" => $this->nohp = $_POST["nohp"],
            "jeniskelamin" => $this->jeniskelamin = $_POST["jeniskelamin"],
            "alamat" => $this->alamat = $_POST["alamat"]
        ];

        return $data_private;

    }

}
// Instance Public
$biodata = new Biodata();
// Input Public
$public = $biodata->IsiDataPublic();
// Instance Protected
$biodata_protec = new Biodata_protected();
// input Protected
$protected = $biodata_protec->IsiDataProtected();
// Merging 
$data_pelajar = array_merge($public, $protected);
// Convert To JSON
$JSON = json_encode($data_pelajar);
// Putting Contents To data.json
file_put_contents("data.json", $JSON);
header("Location: index.php");
?>
