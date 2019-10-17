<?php
    if (isset($_POST['submit'])) {
        $nm = $_POST['nama'];
        $nik = $_POST['nik'];
        $almt = $_POST['alamat'];
        $umur = $_POST['umur'];
    }
    class Keluarga{
        public $nm; 
        public $nik; 
        public $almt; 
        public $umur;

        public function __construct($nm, $nik, $almt, $umur){
            $this->nm = $nm;
            $this->nik = $nik;
            $this->almt = $almt;
            $this->umur = $umur;
        }
        public function tampil(){
            return "Nama : {$this->nm} <br>
                    NIK : {$this->nik} <br>
                    Alamat : {$this->almt} <br>
                    Umur : {$this->umur} <br>";
        }
    }
    for ($i=0; $i < count($nm); $i++) { 
        $warga = new Keluarga($nm[$i], $nik[$i], $almt[$i], $umur[$i]);
        echo $warga->tampil(). "<br>";
    }
?>