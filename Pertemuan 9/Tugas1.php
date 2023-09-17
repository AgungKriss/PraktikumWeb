<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 1</title>
    </head>
    <body>
        <?php
            $saldoAwal = 1000000;
            $bunga = 0.03;
            $bulan = 11;
            $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);
            echo "Saldo akhir setelah " . $bulan . "bulan adalah : Rp. " . $saldoAkhir . ",-";
        ?>
    </body>
</html>