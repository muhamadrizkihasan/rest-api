// let mahasiswa = {
//     nama: "Hasan",
//     nrp: "109012940",
//     email: "sajdbajjdba"
// }

// console.log(JSON.stringify(mahasiswa));

// Vanilla Javascript
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

// jquery
$.getJSON('coba.json', function (data) {
    console.log(data);
});