// Dohvati dugme "Dodaj novi projekt"
var dodajProjektBtn = document.getElementById('dodajProjektBtn');

// Dohvati formu za unos novog projekta
var formaProjekta = document.getElementById('formaProjekta');

// Postavi event listener na klik dugmeta
dodajProjektBtn.addEventListener('click', function() {
    // Prikaži formu za unos projekta
    formaProjekta.style.display = 'block';
});

document.getElementById('dodajProjektBtn').addEventListener('click', function() {
    document.getElementById('formaProjekta').style.display = 'block';
});
