<?php
function tambahHari($hari, $tanggal) {
    $waktu = strtotime("+$hari days", strtotime($tanggal));
    return date('d F Y', $waktu);
}

$hariIni = "9 Desember 2023";
$jumlahHari = -500;
$hasil = tambahHari($jumlahHari, $hariIni);
echo "500 hari yang lalu dari tanggal $hariIni adalah $hasil";
?>