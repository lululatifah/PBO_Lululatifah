<?php
class belanja{
 
}
 
function hitungDiskon($kartuMember, $totalBelanja) {
    switch ($kartuMember) {
        case "memiliki":
            if ($totalBelanja >= 500000) {
                $diskon = 50000;
            } elseif ($totalBelanja >= 100000) {
                $diskon = 15000;
            } else {
                $diskon = 0;
            }
            break;
        case "Tidak memiliki":
            if ($totalBelanja >= 100000)
                $diskon = 5000;
            else
                $diskon = 0;
            break;
        default:
            echo "Input kartu member tidak valid";
            exit();
    }
    return $diskon;
}
 
$pembeli = [
    ["Pembeli 1", "memiliki", 200000],
    ["Pembeli 2", "memiliki", 570000],
    ["Pembeli 3", "Tidak memiliki", 120000],
    ["Pembeli 4", "Tidak memiliki", 90000]
];
 
foreach ($pembeli as $index => $data) {
    $no = $index + 1;
    $pembeliNama = $data[0];
    $kartuMember = $data[1];
    $totalBelanja = $data[2];
    $diskon = hitungDiskon($kartuMember, $totalBelanja);
    $biayaDikeluarkan = $totalBelanja - $diskon;
 
    echo "Apakah ada kartu member : " . $kartuMember . "<br>";
    echo "Total belanjaan : " . number_format($totalBelanja, 0,',','.'). "<br>";
    echo "Total bayar : " . number_format($biayaDikeluarkan,0,',','.');
}
?>
 