function display(){
    let nim = document.getElementById("nim");
    let nama = document.getElementById("nama");
    let tahun = document.getElementById("tahun");
    const form = document.forms[0];
    const gender = form.elements["kelamin"];
    let gender_val = gender.value;

    // Variabel untuk menghitung semester
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();
    let smt = (year - tahun.value)*2;

    // Variabel untuk validasi huruf dan angka
    let validasiAngka = /^[0-9]+$/;
    let validasiHuruf = /^[a-zA-Z ]+$/;

    console.log(gender_val);

    // Kode untuk menampilkan jenis kelamin
    let gender_fill;
    if(gender_val == 'pria') {
        gender_fill = 'Pria';
    } else if(gender_val == 'perempuan') {
        gender_fill = 'Perempuan';
    }

    // Kode untuk menghitung semester
    if(month > 6){
        smt = smt + 1;
    }

    // Kode untuk menampilkan value
    if(nim.value.match(validasiAngka)) {
        if(nama.value.match(validasiHuruf)) {
            if(gender_val == 'pria' || gender_val == 'perempuan') {
                if(tahun.value.match(validasiAngka)) {
                    // kode untuk melempar variabel ke window baru
                    let popup = window.open("", '', 'width = 640, height = 480');
                    popup.document.write(
                        "Nim anda: <b>" + nim.value + ",</b><br>" +
                        "Nama anda: <b>" + nama.value + ",</b><br>" + 
                        "Jenis Kelamin anda: <b>" + gender_fill + ",</b><br><br>" +
                        "Tahun Masuk Anda: " + tahun.value + ",<br>" + 
                        "dan anda berarti sekarang semester: <b>" + smt + "</b>"
                        );
                } else {
                    alert("Masukkan Anda Salah!\nFormat wajib angka!");
                    tahun.value="";
                    tahun.focus();
                    return false;
                }
            } else {
                alert("Jenis kelamin tidak boleh kosong!\nAnda harus memilih jenis kelamin!");
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