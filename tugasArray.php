<?php
class Angsuran {
    Var $pinjaman;
    Var $bunga;
    Var $lamaAngsuran;
    Var $angsuran = [];


    function setPinjaman($pinjaman) {
        $this->pinjaman = $pinjaman;
    }

    function setBunga($bunga) {
        $this->bunga = $bunga;
    }

    function setLamaAngsuran($lamaAngsuran) {
        $this->lamaAngsuran = $lamaAngsuran;
    }

    function getPinjaman() {
        return $this->pinjaman;
    }

    function getbunga() {
        return $this->bunga;
    }

    function getLamaAngsuran() {
        return $this->lamaAngsuran;
    }

    public function hitungAngsuran() {
        $angsuranPokok = $this->pinjaman / $this->lamaAngsuran;

        for($i = 1; $i <=$this->lamaAngsuran;$i++) {
            $bungaBulanIni = ($this->pinjaman * ($this->bunga/100)) / $this->lamaAngsuran;
            $totalAngsuran = $angsuranPokok + ($bungaBulanIni * ($this->lamaAngsuran - $i + 1));
            $this->angsuran[] = $totalAngsuran;
        }
    }

    public function getAngsuran() {
        return $this->angsuran;
    }

}

$angsuran = new Angsuran();
$angsuran->setPinjaman(1000000);
$angsuran->setBunga(10);
$angsuran->setLamaAngsuran(5);
$angsuran->hitungAngsuran();
$angsuranArray = $angsuran->getAngsuran();

echo "TOKO PEGADAIAN SYARIAH <br><br>";
echo "Jl Keadilan No 16 <br><br>";
echo "Telp 732746238 <br><br>";
echo "Program Penghitung Besaran Angsuran Hutang <br><br>";
echo "Besaran Pinjaman : Rp." .number_format($angsuran->getPinjaman(), 0, ',', '.')."<br>";
echo "Masukan Besaran Bunga (%) : " . $angsuran->getBunga() . "<br>";
echo "Lama Angsuran (bulan) : " . $angsuran->getLamaAngsuran() . "<br>";

for ($i = 0; $i < count($angsuranArray); $i++) {
    echo "Angsuran bulan ke-" . ($i + 1) . " : Rp. " . number_format($angsuranArray[$i], 0, ',', '.'). "<br>";
   
}
?>