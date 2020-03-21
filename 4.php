<?php 
    function randomizer($banyak)
    {
        $karakter= 'abcdefghijklmnopqrstuvwxyz1234567890';
        
        for ($o = 1; $o <= $banyak; $o++){
             $string = '';
             for ($i = 0; $i < 32; $i++)
             {
                 $pos = rand(0, strlen($karakter)-1);
                 $string .= $karakter{$pos}; 
             }
             print $string.', ';
       }
    }

    print randomizer(2);
?>