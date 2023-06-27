<?php

$satu = $_POST['angkasatu'];

$dua = $_POST['angkadua'];

$operator = $_POST['aritmatika'];

$tambah = $satu + $dua;

$kurang = $satu - $dua;

$kali = $satu * $dua;

$bagi = $satu / $dua;

if (empty($satu or $dua)) {
} else if ($operator == "Pilih Salah Satu !") {

    echo "Maaf Anda Tidak Memilih Operator..!";
} else if ($operator == "Tambah") {

    echo "Hasilnya Adalah $tambah";
} else if ($operator == "Kurang") {

    echo "Hasilnya Adalah $kurang";
} else if ($operator == "Kali") {

    echo "Hasilnya Adalah $kali";
} else if ($operator == "bagi") {

    echo "Hasilnya Adalah $bagi";
}
