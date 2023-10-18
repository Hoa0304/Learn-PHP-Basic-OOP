<?php

$stt_nguoi = 1;

for(; $stt_nguoi<11 ; $stt_nguoi++){
    echo "hello person number  " . $stt_nguoi;
    $stt_nguoi++;
}

for(  ;  ; ){
    if($stt_nguoi<11){
        echo "hello person number  " . $stt_nguoi;
        $stt_nguoi++;   
    }
    else{
        break;
    }
}
?>