<?php 
    function hitungPohon($tinggiAwal, $tahun){
        $musims = array("semi", "panas", "gugur", "dingin");
        $tinggiAkhir = 0;
        $jenis_tahun;
        $array_musims = count($musims);

        for ($i=0; $i<$array_musims; $i++){
            if ($musims[$i] == "semi"){
                $tinggiAwal += 1;
                $tinggiMusimSemi = $tinggiAwal;
            }elseif($musims[$i] == "panas"){
                $tinggiMusimSemi *= 3;
                $tinggiMusimPanas= $tinggiMusimSemi;
            }elseif($musims[$i] == "gugur"){
                $tinggiMusimPanas -= 1.5;
                $tinggiMusimGugur = $tinggiMusimPanas;
            }elseif($musims[$i] == "dingin"){
                ($tinggiMusimGugur += 15/100);
                if($tahun % 2 == 0){
                    $jenis_tahun = "Genap";
                }else{
                    $jenis_tahun = "Ganjil";
                }
                if($jenis_tahun == "Genap"){
                    $tinggiMusimGugur * 1/2;
                    $tinggiAkhir = $tinggiMusimGugur;
                }else{
                    $tinggiMusimGugur;
                    $tinggiAkhir = $tinggiMusimGugur;
                }
            }
        }
        echo "hitungPohon(".$tinggiAwal.",".$tahun.") = ".$tinggiAkhir."m";
    }

    hitungPohon(1,2021);
?>