function average(){
    var final = document.getElementById("final").value;
    var homework = document.getElementById("homework").value;
    var project = document.getElementById("project").value;
    
    var validasiAngka = /^[0-9]+$/;
    var average = (final-(-homework)-(-project))/3;

    if(final.match(validasiAngka)){
        if(homework.match(validasiAngka)){
            if(project.match(validasiAngka)){
                document.getElementById("avg").value = average.toFixed(1);
                alert("Your Average Is " + average.toFixed(1));
            } else {
                alert("Nilai Akhir Anda Salah!\nFormat wajib Angka!\nRange [1 - 100]");
                clear();
            }
        } else {
            alert("Nilai Tugas Anda Salah!\nFormat wajib Angka!\nRange [1 - 100]");
            clear();
        }   
    } else {
        alert("Nilai Project Anda Salah!\nFormat wajib Angka!\nRange [1 - 100]");
        clear();
    }
}

function clearValue(){
    document.getElementById("final").value = '';
    document.getElementById("homework").value = '';
    document.getElementById("project").value = '';
    document.getElementById("avg").value = '';
}