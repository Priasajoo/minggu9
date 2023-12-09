<?php
$todayDate = "9 des 2023";
$returnDate = date('d-m-Y , strtotime(+100 day($todayDate)));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head?

  <body>
       <h3>
           Tanggal hari ini = <?= $todayDate; ?>
           <br>
           Tanggal 100 hari dari skrg = <?= $returnDate; ?>
          </h3>
        </body>

        </html>
