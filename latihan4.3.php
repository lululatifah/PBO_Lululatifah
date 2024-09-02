<?php
//akses properties
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek ($x) {
    $this->merek =$x;
    }

    function getMerek() {
        return $this->merek;
    }

    function setHarga($y) {
    $this->harga = $y;
    }

    function getHarga () {
        return $this->harga;
    }

    function setwarna ($v) {
        $this->warna =$v;
    }
        
        function getwarna() {
            return $this->warna;
    }

    function setjumlahroda ($y) {
        $this->jumlahRoda =$y;
    }
        
        function getjumlahroda() {
            return $this->jumlahRoda;
    }

    function statusHarga()
    {
        if ($this->harga > 50000000) $status ='Mahal';
        else $status = 'Murah';
        return $status;
    }

}
$kendaraan1 = new kendaraan;
$kendaraan1->setMerek ('Yamaha Mio') ;
$kendaraan1->setHarga (10000000) ;
$kendaraan1->setwarna ("Putih") ;
$kendaraan1->setjumlahRoda (2) ;
echo $kendaraan1->getMerek() ;
echo "<br>";
echo $kendaraan1->getHarga () ;
echo "<br>";
echo $kendaraan1->getwarna () ;
echo "<br>";
echo $kendaraan1->getjumlahRoda () ;
echo "<br>";
echo $kendaraan1->statusHarga () ;
echo "<br>";

