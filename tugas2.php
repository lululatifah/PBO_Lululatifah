<?php
Class konversiSuhu {
    var $C = 10;
    var $F;
    var $K;
    var $R;

    // konversi celcius ke fahrenheit
    $F = (9/5) * ($C + 32);
    echo "{$F} is = {$C}";

    //konversi celcius ke kelvin
    $K = $C + 273;

    //konversi celcius ke Reamur
    $R = (4/5)$C;

}
