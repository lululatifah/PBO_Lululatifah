<?php
class manusia{
    //property
    var $nama;
    var $warna;
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }
    function tampilkan_nama(){
        return "Nama saya mahasiswa SI <br/>";
    }

}
//instansiasi class manusia
$manusia = new manusia();
//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>