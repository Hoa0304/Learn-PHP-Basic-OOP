<?php

$bien0 = 0;
$bien_chuoi_rong = '';
$bienKhoiTao;
$bienNull = null;
$bienFalse = false;

var_dump(isset($bien0));
//bool(true)
var_dump(isset($bienChuaKhoiTao));
//bool(false)
if(isset($bienGi)){
    $x = $bienGi +1;
}
//bool(false)

if(1<5):
    ?>
    <h1>Cẩm Hoa</h1>
    <?php
endif;
?>