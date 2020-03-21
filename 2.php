<?php

function count_handshake($jum_org) {
    $org = 0;
    $total = 0;
    for($org; $org < $jum_org; $org++){
        $total = $total + $org;
    }
   print $total;
}
   
echo count_handshake(4);

?>