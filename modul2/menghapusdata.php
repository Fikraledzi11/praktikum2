<?php
function cetak($arr){
    for ($x =0; $x < count($arr);$x++){
        echo "nama: $arr[$x]\n";
    }
}
$nama = array("andi","budi","cecep");
cetak($nama);

echo "setelah menghhapus elemen pertama menggunakan array_splice\n";
array_splice(&$nama,0,2);
cetak($nama);
?>