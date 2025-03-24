function hitung() {
    let nilai = document.getElementById("nilai").value;
    let hasil = document.getElementById("hasil");

    if (nilai === "") {
        hasil.innerHTML = "<span class='error'>nilai tidak boleh kosong!</span>";
        return;
    }

    nilai = parseInt(nilai);

    if(isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasil.innerHTML = "<span class='error'>Nilai tidak valid!<span>";
    } else {
        let Huruf;
        
        if (nilai >= 80) {
            Huruf = "A";
        } else if (nilai >= 70) {
            Huruf = "B";
        } else if (nilai >= 60) {
            Huruf = "C";
        } else if (nilai >= 50) {
            Huruf = "D";
        } else {
            Huruf = "E";
        }

    hasil.innerHTML = "Huruf Mutu: <strong>" + Huruf + "</strong>";
    }
}