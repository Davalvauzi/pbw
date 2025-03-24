function salam() {
    alert("selamat datang di website kami!")
}

function contohLet() {
    let y = 10;
    if(true) {
        let y = 20;
        console.log("nilai dalam blok:", y);
    }
    console.log("Nilai luar blok:", y)
} 

contohLet();

const z = 100;

// z = 200;

let nama = "budi";
let umur = 30;
let isStudent = false;
let buah = ['apel','mangga','jeruk'];
let mahasiswa = {nama: 'rina', usia: 20,jurusan:"informatika"};

console.log(nama);
console.log(buah[1]);
console.log(mahasiswa.jurusan);