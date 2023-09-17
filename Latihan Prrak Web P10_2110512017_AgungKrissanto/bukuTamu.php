<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styleBukuTamu.css">
        <title>Buku Tamu</title>
        <!-- <script language="javascript">
            function validasi(){
                // variabel
                let nama = document.getElementById("nama");
                let pesan = document.getElementById("pesan");
                
                // variabel validasi
                let validasiAngka = /^[0-9]+$/;
                let validasiHuruf = /^[a-zA-Z ]+$/;

                // variabel hobi
                let hobi = document.form[0];
                let check = "";
                let i;

                // kode hobi
                for(i = 0; i < hobi.length; i++){
                    if(hobi[i].checked){
                        check = check + hobi[i].value + " ";
                    }
                }

                if(nama.value.match(validasiHuruf)) {
                    if(pesan.value.match(validasiHuruf)) {
                        if(matkul[i].checked) {
                            // kode untuk melempar variabel ke window baru
                        } else {
                            alert("Anda belum memilih hobi!");
                             return false; 
                        }
                    } else {
                        alert("Masukkan Anda Salah !");
                        pesan.value="";
                        pesan.focus();
                        return false;    
                    }
                } else {
                    alert("Masukkan Anda Salah!\nFormat wajib huruf!");
                    nama.value="";
                    nama.focus();
                    return false;
                }
            }
        </script> -->
    </head>

    <body>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 10 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="container">
            <h3 class="judul">ISI BUKU TAMU</h3>
            <hr>
            <div class="login">
            <form action="prosesBukuTamu.php" method="POST">
                <table>
                    <tr class="putih">
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama" class="box"></td>
                    </tr>
                    <tr class="putih">
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" value="Laki-laki" id="jk">Laki-Laki
                            <input type="radio" name="jk" value="Perempuan" id="jk">Perempuan<br/>
                        </td>
                    </tr>
                    <tr class="putih">
                        <td>Program Studi</td>
                        <td>:</td>
                        <td>
                            <select name="prodi" class="box">
                                <option value="Informatika">Informatika</option>
                                <option value="SI">Sistem Informasi</option>
                                <option value="D3">D3 Sistem Informasi</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="putih">
                        <td >Hobi</td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" name="hobi[]" value="Ngoding" id="hobi">Ngoding<br/>
                            <input type="checkbox" name="hobi[]" value="Medsos" id="hobi">Medsos<br/>
                            <input type="checkbox" name="hobi[]" value="Tidur" id="hobi">Tidur<br/>
                        </td>
                    </tr>
                    <tr class="putih">
                        <td>Pesan</td>
                        <td>:</td>
                        <td>
                            <textarea name="pesan" row=5 cols=30 id="pesan"></textarea>
                        <td>
                    </tr>
                    <tr>
                        <td colspan=3 align="right">
                            <input type="submit" value="kirim" class="kirim">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>