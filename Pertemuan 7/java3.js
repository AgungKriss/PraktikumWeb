function display(){
    let nim = document.getElementById("nim");
    let nama = document.getElementById("nama");
    let tahun = document.getElementById("tahun");
    let prodi = document.getElementById("prodi");
    
    // Variabel untuk menghitung semester
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();
    let smt = (year - tahun.value)*2;

    // Variabel untuk validasi huruf dan angka
    let validasiAngka = /^[0-9]+$/;
    let validasiHuruf = /^[a-zA-Z ]+$/;

    // Variabel checkbox
    let matkul = document.form[0];
    let check = "";
    let i;
    
    // Kode checkbox
    for(i = 0; i < matkul.length; i++); {
        if(matkul[i].checked) {
            check = check + matkul[i].value + " ";
        }
    }

    // Kode untuk menghitung semester
    if(month > 6){
        smt = smt + 1;
    }

    // Kode untuk menampilkan value
    if(nim.value.match(validasiAngka)) {
        if(nama.value.match(validasiHuruf)) {
            if(tahun.value.match(validasiAngka)) {
                if(prodi.value.match(validasiHuruf)) {
                    if(matkul[i].checked) {
                        // kode untuk melempar variabel ke window baru
                        let popup = window.open("", '', 'width = 640, height = 480');
                        popup.document.write(
                            "Nim anda: <b>" + nim.value + ",</b><br>" +
                            "Nama anda: <b>" + nama.value + ",</b><br>" + 
                            "Prgram Studi: <b>" + prodi.value + ",</b><br>" +
                            "dan anda berarti sekarang semester: <b>" + smt + ",</b><br>" +
                            "Mata Kuliah yang di kontrak: <b>" + check + "</b><br><br>"
                        );
                    } else {
                        alert("Anda belum memilih mata kuliah!");
                        return false; 
                    }
                } else {
                    alert("Masukkan Anda Salah!\nFormat wajib angka!");
                    prodi.value="";
                    prodi.focus();
                    return false;    
                }
            } else {
                alert("Masukkan Anda Salah!\nFormat wajib angka!");
                tahun.value="";
                tahun.focus();
                return false;
            }
        } else {
          alert("Masukkan Nama Anda Salah!\nFormat wajib huruf!");
          nama.value="";
          nama.focus();
          return false;
        }
    } else {
      alert("Masukkan nim Anda Salah!\nFormat wajib angka!");
      nim.value="";
      nim.focus();
      return false;
    }
}