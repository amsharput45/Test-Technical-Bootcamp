<?php

function betweenDays($dari_tgl, $ke_tgl) {
    
    $mulai = date('Y-m-d', strtotime('-1 days', strtotime( $dari_tgl )));
   
    while (strtotime($mulai) < strtotime($ke_tgl)){
        $mulai = mktime(0,0,0,date("m",strtotime($mulai)),date("d",strtotime($mulai))+1,date("Y",strtotime($mulai)));
        $mulai = date("Y-m-d", $mulai);
        $hasil = $mulai;
        print $hasil.",";
    }
}

echo betweenDays('2011-05-31','2011-06-02');
?>