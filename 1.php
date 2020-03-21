<?php 

function ganti_kata($array, $pilih, $ubah){
    $kata = str_split($array);

    for ($i = 0; $i < count($kata); $i++){
        
        if ($kata[$i] == $pilih)
        {   
            echo $ubah;
        }else{
            echo $kata[$i];
        }
    }
}

echo ganti_kata("baku",'a','u');
    
?>