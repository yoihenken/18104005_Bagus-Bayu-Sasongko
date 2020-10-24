// Console log that display at web console
console.log("Hello world");

//Function when button clicked
function tampil() {
    alert("Jadi gini gan!");
}

//Get color from document
let warna = document.getElementById('warna');

//If color selected, then change background color
warna.addEventListener('change', (Event) =>{
    document.body.style.backgroundColor = warna.value;
});

//Show window for input the user name
let nama = window.prompt("Masukan nama Anda : ");

//Show Pop up
alert('Halo ' + nama);