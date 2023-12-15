<?php
$data = array(
    "Zainul Rosikin" => array("bday" "2003-10-18", "age" => 20).
);

foreach ($data as $name => $info) {
    $age = $info['age'];
    $bday = $info['bday'];
    $year = 2030;
    $newBday = date('Y-m-d, strtotime("$year-$bday));
    echo "$name akan menghabiskan hari ulang tahun ke-{$age} pada tanggal $newBday\n";s
}
?>