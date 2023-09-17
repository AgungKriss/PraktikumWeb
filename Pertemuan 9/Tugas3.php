<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 3</title>
    </head>
    <body>
        <?php
            $jumlahUang = 1575250;
            $a = $jumlahUang / 100000;
            $temp1 = $jumlahUang % 100000;
            $b = $temp1 / 50000;
            $temp2 = $temp1 % 50000;
            $c = $temp2 / 20000;
            $temp3 = $temp2 % 20000;
            $d = $temp3 / 5000;
            $temp4 = $temp3 % 5000;
            $e = $temp4 / 100;
            $temp5 = $temp4 % 100;
            $f = $temp5 / 50;

            echo "Jumlah uang : " . $jumlahUang;
            echo "<br/> Jumlah Rp. 100.000 : " . intval($a);
            echo "<br/> Jumlah Rp. 50.000 : " . intval($b);
            echo "<br/> Jumlah Rp. 20.000 : " . intval($c);
            echo "<br/> Jumlah Rp. 5.000 : " . intval($d);
            echo "<br/> Jumlah Rp. 100 : " . intval($e);
            echo "<br/> Jumlah Rp. 50 : " . intval($f);
        ?>
    </body>
</html>