<?php
class manusia {//class induk
    public $nama_saya;
    function berinama($saya){
        $this->nama_saya = $saya;
    }
}
class teman extends manusia{
    public $nama_teman;
    function berinamateman($teman){
        $this->nama_teman=$teman;
    }
}
$Objectteman = new teman;
$Objectteman ->berinama("Dika");
$Objectteman ->berinamateman("Andra");
echo "Nama Saya :".$Objectteman->nama_saya."<br/>";
echo "Nama Teman Saya :".$Objectteman ->nama_teman;
?>
