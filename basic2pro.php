<?php
    class Kerja{
        public $nama;
        public $nip;
        public $alamat;
        public $hk;

        public function __construct($hk=0){
            $this->hk = $hk;
        }
        public function gajikotor(){
            $gk=$this->hk * 75000;
            return $gk;
        }
        public function gajibersih(){
            $gb = $this->gajikotor()-($this->gajikotor()*0.025);
            return $gb;
        }
    }
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $almt = $_POST['alamat'];
        $hari = $_POST['hk'];

    }
    $karyawan = new Kerja($hari);
    echo "Nama : $nama <br>";
    echo "NIP : $nip <br>";
    echo "Alamat : $almt <br>";
    echo "Hari Kerja : $hari <br>";
    echo "Gaji Kotor : ". number_format($karyawan->gajikotor(),0,",","."). "<br>";
    echo "Gaji Bersih : ". number_format($karyawan->gajibersih(),0,",","."). "<br>";
?>