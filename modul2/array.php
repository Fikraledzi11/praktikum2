<?php
function cetak($arr){
    for ($x =0; $x < count($arr);$x++){
        echo "nama: $arr[$x]\n";
    }
}

$nama = array("andi","budi",,"cecep");
cetak($nama);
echo"setelah diupdate\n";
$nama[2]= "zaim";
cetak($nama);
?>