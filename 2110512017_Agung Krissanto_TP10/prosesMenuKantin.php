<!-- Menangkap parameter -->
<?php
    $nama = $_POST['nama'];
    $menu = $_POST['menu'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembelian</title>
    <link rel="stylesheet" type="text/css" href="styleMenu.css">
</head>
<body>
    <marquee direction="left" class="line">
        Latihan Praktikum Pemrograman Web Pertemuan 10 - 2110512017 - Agung Krissanto
    </marquee>
    <div class="container">
        <?php
            $total = 0;
            $bonus = "";
            // Mengubah data value menjadi data harga
            if(!empty($menu)){
                foreach($menu as $value){
                    if($value == "Nasi"){
                        $total += 2000;
                    } else if($value == "Ikan Bakar") {
                        $total += 3000;
                    } else if($value == "Ayam Bakar") {
                        $total += 4000;
                    } else if($value == "Sayur Lodeh") {
                        $total += 2000;
                    } else if($value == "Tumis Kangkung") {
                        $total += 2000;
                    }
                }
            }

            // Menu untuk menampilkan hasil
            echo "<div class='judul'>Nota Pembelian</div>";
            echo "<br/><p>Hi, " . $nama;
            echo " !</p>Menu yang dipesan adalah :";
            if(!empty($menu)){
                echo "<ul>";
                foreach($menu as $value){
                    echo "<li>$value</li>";
                }
                echo"</ul>";
            }

            if($total < 7000){
                echo "<p>Total Harga : Rp " . $total . "<p/>";
            } else if($total >= 7000 && $total < 13000){
                echo "<p>Total Harga : Rp " . $total;
                echo "</p>Bonus : ";
                echo "<ul><li>Minuman Gratis : Teh Manis Dingin</li></ul>";
            } else {
                $diskon = $total * 0.1;
                $totalHarga = $total - $diskon;
                echo "<p>Total Harga : Rp " . $total;
                echo "</p>Anda mendapatkan bonus : ";
                echo "
                    <ul>
                        <li>Minuman Gratis : Jus Alpukat</li>
                        <li>Diskon : Rp " . $diskon . "</li>
                        <li>Total Harga : Rp " . $totalHarga . "</li>
                    </ul>";
            }
        ?>
        Selamat Makan <?php echo $nama; ?>, by Mamah Dedeh
        <input type="button" value="Kembali" class="kirim" onclick="window.history.go(-1)">
    </div>
</body>
</html>