<?php
    $data = 5956560159466056;
    $explode = explode(0, $data);

    $x = str_split($explode[0]);
    sort($x);
    $i_x = implode('',$x);

    $y = str_split($explode[1]);
    sort($y);
    $i_y = implode('',$y);

    $z = str_split($explode[2]);
    sort($z);
    $i_z = implode('',$z);

    echo $i_x."".$i_y."".$i_z;
?>