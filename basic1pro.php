<?php
    
        class Bilangan
        {
            public $bil1;
            public $bil2;

            public function __construct($bil1,$bil2){
                $this->bil1 = $bil1;
                $this->bil2 = $bil2;
            }
            public function tambah(){
                $tambah = $this->bil1 + $this->bil2;
                return "Hasil Pertambahan  $this->bil1 + $this->bil2: ". $tambah . "<br>";
            }
            public function kurang(){
                $kurang = $this->bil1 - $this->bil2;
                return "Hasil Perkurangan $this->bil1 - $this->bil2 : ".$kurang . "<br>"; 
            }
            public function kali(){
                $kali = $this->bil1 * $this->bil2;
                return"Hasil Perkalian $this->bil1 x $this->bil2 : ".$kali."<br>";
            }
            public function bagi(){
                $bagi = $this->bil1 / $this->bil2;
                return "Hasil Pembagian $this->bil1 / $this->bil2 : ".$bagi."<br>";
            }
        }
    if (isset($_POST['simpan'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
      
    }
    echo "<center> Hasil Perhitungan </center> <br>";
    $hasil = new Bilangan($bil1,$bil2);
    echo $hasil->tambah();
    echo $hasil->kurang();
    echo $hasil->kali();
    echo $hasil->bagi();

?>