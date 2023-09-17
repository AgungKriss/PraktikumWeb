<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 2</title>
    </head>
    <body>
        <?php
            $bilangan = 100;
            $pembagi = 3;
            $hasilBagi = $bilangan / $pembagi;
            $sisaBagi = $bilangan % $pembagi;
            echo $bilangan . " dibagi dengan " . $pembagi . " adalah " . intval($hasilBagi) . " Sisa " . $sisaBagi;
        ?>
    </body>
</html>