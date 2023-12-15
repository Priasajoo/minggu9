<?php
$day = 18;
$month = 10;
$year = 2003

$timestamp = mktime(0, 0, 0, $month, $day, $year);

$harilahir = date("L", $timestamp);

echo "Hari lahir saya adalah: " . $harilahir;
?>