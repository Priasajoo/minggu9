<?php
function tambahHari($hari, $tanggal) {
    $waktu = strtotime("+$hari days", strtotime($tanggal));
    return date('d F Y', $waktu);
}

$hariIni = "9 Desember 2023";
$jumlahHari = 1000;
$hasil = tambahHari($jumlahHari, $hariIni);
echo "1000 hari yang akan datang setelah tanggal $hariIni adalah $hasil";
?>