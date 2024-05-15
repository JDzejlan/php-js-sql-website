var dodajProjektBtn = document.getElementById('dodajProjektBtn');

var formaProjekta = document.getElementById('formaProjekta');

dodajProjektBtn.addEventListener('click', function() {
    
    formaProjekta.style.display = 'block';
});

document.getElementById('dodajProjektBtn').addEventListener('click', function() {
    document.getElementById('formaProjekta').style.display = 'block';
});
