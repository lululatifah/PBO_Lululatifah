<?php
class Employee {
    protected $lamaKerja;
    protected $gaji;

    public function __construct($lamaKerja, $gaji) {
        $this->lamaKerja = $lamaKerja;
        $this->gaji = $gaji;
    }

    public function getGaji() {
        return $this->gaji;
    }
}

class Programmer extends Employee {
    public function getGaji() {
        if ($this->lamaKerja < 1) {
            return parent::getGaji();
        } elseif ($this->lamaKerja <= 10) {
            return parent::getGaji() + ($this->lamaKerja * 0.01);
        } else {
            return parent::getGaji() + ($this->lamaKerja * 0.02);
        }
    }
}

$programmer = new Programmer(5, 10000);
echo "Gaji Programmer: " . $programmer->getGaji();
echo "<br/>";

class Direktur extends Employee {
    public function getGaji() {
        $bonus = $this->lamaKerja * 0.5;
        $tunjangan = $this->lamaKerja * 0.1;
        return parent::getGaji() + $bonus + $tunjangan;
    }
}

$direktur = new Direktur(8, 20000);
echo "Gaji Direktur: " . $direktur->getGaji();
echo "<br/>";

class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stockTerjual;

    public function __construct($lamaKerja, $gaji, $hargaBarang, $stockTerjual) {
        parent::__construct($lamaKerja, $gaji);
        $this->hargaBarang = $hargaBarang;
        $this->stockTerjual = $stockTerjual;
    }

    public function getGaji() {
        $totalPenjualan = $this->hargaBarang * $this->stockTerjual;

        if ($this->stockTerjual >= 0.7 * $this->hargaBarang) {
            return parent::getGaji() + (0.1 * $this->hargaBarang * $this->stockTerjual);
        } else {
            return parent::getGaji() + (0.03 * $this->hargaBarang * $this->stockTerjual);
        }
    }
}

$pegawaiMingguan = new PegawaiMingguan(3, 5000, 100, 80);
echo "Gaji Pegawai Mingguan: " . $pegawaiMingguan->getGaji()
?>