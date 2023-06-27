<?php

$satu = $_POST['angkasatu'];

$dua = $_POST['angkadua'];

$operator = $_POST['aritmatika'];

$tambah = $satu + $dua;

$kurang = $satu - $dua;

$kali = $satu * $dua;

$bagi = $satu / $dua;

switch ($operator) {
    case $tambah:
        echo "Hasilnya Adalah $tambah";
        break;
    case $kurang:
        echo "Hasilnya Adalah $tambah";
        break;
    case $kali:
        echo "Hasilnya Adalah $kali";
        break;
    case $bagi:
        echo "Hasilnya Adalah $bagi";
        break;
}
