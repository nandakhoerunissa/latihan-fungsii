<?php
//pembuatan fungsi
$r =28;
$t =40;
$phi =22/7;
function VolumeKrucut($r, $t, $phi) {
    return (1/3* ($phi*$r*$r*$t));
}
//menampilkan fungsi
echo "Volume krucut tersebut adalah :" .VolumeKrucut($r,$t,$phi). "cm";
?>