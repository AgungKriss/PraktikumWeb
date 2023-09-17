<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tengah {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $produk1 = "Sabun";
        $produk2 = "Deterjen";
        $produk3 = "Pewangi";
        $harga1 = 10000;
        $harga2 = 9000;
        $harga3 = 5000;
        $jumlah1 = 3;
        $jumlah2 = 1;
        $jumlah3 = 2;

        $total1 = $harga1 * $jumlah1; 
        $total2 = $harga2 * $jumlah2; 
        $total3 = $harga3 * $jumlah3; 

        $jumlah = $total1 + $total2 + $total3;
    ?>
    <table border="2px" cellspacing="0px" cellpadding="5px" width="100%">
        <tr class="tengah">
            <td>Produk</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Total</td>
        </tr>

        <tr>
            <td><?= $produk1?></td>
            <td><?= $harga1?></td>
            <td class="tengah"><?= $jumlah1?></td>
            <td><?= $total1?></td>
        </tr>

        <tr>
            <td><?= $produk2?></td>
            <td><?= $harga2?></td>
            <td class="tengah"><?= $jumlah2?></td>
            <td><?= $total2?></td>
        </tr>

        <tr>
            <td><?= $produk3?></td>
            <td><?= $harga3?></td>
            <td class="tengah"><?= $jumlah3?></td>
            <td><?= $total3?></td>
        </tr>

        <tr>
            <td colspan=3>Jumlah</td>
            <td><?= $jumlah?></td>
        </tr>
    </table>
    <p>AJI NGEWEWEWEWE</p>
</body>
</html>