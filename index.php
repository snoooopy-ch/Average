<?php

function averageColor($arg1, $arg2) {
    $color1 = array(
        hexdec(substr($arg1, 0, 2)),
        hexdec(substr($arg1, 2, 2)),
        hexdec(substr($arg1, 4, 2)),
    );

    $color2 = array(
        hexdec(substr($arg2, 0, 2)),
        hexdec(substr($arg2, 2, 2)),
        hexdec(substr($arg2, 4, 2)),
    );

    $average = 0;
    for ($i = 0; $i < 3; $i ++) {
        $middle = (int)(($color1[$i] + $color2[$i]) / 2);
        $average = $average + ($middle << (8 * (2 - $i)));
    }

    return dechex($average);
}

?>