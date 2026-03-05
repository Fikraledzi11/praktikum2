<?php
function cetak($arr){
    for ($x =0; $x < count($arr);$x++){
        echo "nama: $arr[$x]\n";
    }
}
$nama = array("andi","budi","cecep");
cetak($nama);
echo "setelah diadd satu buah nilai \n";
$nama[] = "zaim";
cetak($nama);
echo "setelah diaddd lebih dari satu buah nilai \n";
array_push(&$nama,"mega","caca");
cetak($nama);