<?php
Class Mahasiswa {
    var $nama;
    var $kelas;
    var $matakuliah;
    var $nilai;
    

    function setNama ($x) {
        $this->nama =$x;
    }
    
        function getNama() {
            return $this->nama;
    }

    function setKelas ($y) {
        $this->kelas =$y;
    }
        
        function getKelas() {
            return $this->kelas;
    }

    function setmatakuliah ($z) {
        $this->matakuliah =$z;
    }
        
        function getmatakuliah() {
            return $this->matakuliah;
    }

    function setNilai ($v) {
        $this->nilai =$v;
    }
        
        function getNilai() {
            return $this->nilai;
    }

    function statusNilai()
    {
        if ($this->nilai > 75) $status ='Lulus Kuis';
        else $status = 'Tidak Lulus Kuis';
        return $status;
    }

}

$Data1 = array('Aditya','SI 2','Pemograman Berorientasi Objek','80');
$Data2 = array('Shinta','SI 2','Pemograman Berorientasi Objek','75');
$Data3 = array('Ineu','SI 2','Pemograman Berorientasi Objek','55');

    for($i = 1; $i <= 3; $i++) {
    for($h = 0; $h <= 3; $h++) {
                ${"Mahasiswa$i"} = new Mahasiswa() ;
                ${"Mahasiswa$i"}->setNama(${"Data$i"}[0]);
                ${"Mahasiswa$i"}->setKelas(${"Data$i"}[1]);
                ${"Mahasiswa$i"}->setmatakuliah(${"Data$i"}[2]);
                ${"Mahasiswa$i"}->setNilai(${"Data$i"}[3]);
    }
    }
    
    for($i = 1; $i <= 3;$i++) {
        echo "Mahasiswa$i<br>"
            .${"Mahasiswa$i"}->getNama()."<br>"
            .${"Mahasiswa$i"}->getKelas()."<br>"
            .${"Mahasiswa$i"}->getmatakuliah()."<br>"
            .${"Mahasiswa$i"}->getNilai()."<br>"
            .${"Mahasiswa$i"}->statusNilai()."<br><br>";
}            

?>