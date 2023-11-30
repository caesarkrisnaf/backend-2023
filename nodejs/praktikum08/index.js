//bikin variabel

let name = "Caesar Krisna Febrianto";
console.log(name);

//bikin array
let angka = [1,2,3,4,5];
console.log(angka[0]);
console.log(angka.length);

//bikin object
let mahasiswa = {
    //key:value
    nama: "Caesar",
    nim: "0110222075",
    prodi: "Teknik Informatika",

};
console.log(mahasiswa.nama);
console.log(mahasiswa.nim);

// if else
let nilai = 70;
if (nilai > 80){
    console.log("Lulus");
} else {
    console.log("Ga Lulus");

}

// looping 1-10
// 3 parameter (start, end, step)
for( let i = 1; i <=10; i++){
    console.log(i);
}
//function
function tambah(angka1, angka2){
    return angka1 + angka2;
}
console.log(tambah(5, 7));