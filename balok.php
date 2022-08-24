<?php
// pembuatan fungsi
$panajng =18;
$lebar =10;
$tinggi =12;
function VolumeBalok ($panjang, $lebar, $tinggi) {
    return($panjang*$lebar*$tinggi);
}
//Menampilkan fungsi
echo "Volume balok tersebut adalah :" .VolumeBalok($panjang,$lebar,$tinggi). "cm";

?>