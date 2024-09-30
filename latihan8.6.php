<?php
class manusia {
    //properties (encapsulation)
    public $nama = "Ardi";
    var $kelas = "SI 2";
    //method manusia 
    function tampilkan_nama(){
        return $this->nama;
    }
    public function tampilkan_kelas(){
        return $this->kelas;
    }
}
$manusia = new manusia();
echo "Nama : ".$manusia->tampilkan_nama()."<br />";
echo "kelas : ".$manusia->tampilkan_kelas();
?>
