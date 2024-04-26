// Provjera statusa prijave korisnika
function checkUserLoginStatus(callback) {
    fetch('check_login_status.php')
        .then(response => response.json()) // Pretpostavka da skripta vraća JSON podatke
        .then(data => {
            // Prosljeđujemo rezultat (true ili false) callback funkciji
            callback(data.isLoggedIn);
        })
        .catch(error => {
            //console.error('Error checking login status:', error);
            // Ako dođe do greške, korisnik nije prijavljen
            callback(false);
        });
        
        };

function addCartEventListener() {
    console.log('Adding cart event listener');
    var cartIcon = document.querySelector('.cartIcon');
    
   // console.log('cartIcon:', cartIcon);

    if (cartIcon) {
        cartIcon.addEventListener('click', function() {
            console.log('Cart icon clicked!');
            checkUserLoginStatus(function(isLoggedIn) {
                console.log('Is user logged in:', isLoggedIn);
                if (isLoggedIn) {
                    window.location.href = '../user-shop.php';
                } else {
                    alert('Morate biti prijavljeni da pristupite kupovini. Ukoliko nemate račun, registrujte se!');
                    window.location.href = 'login.php';
                }
            });
        });
    } else {
        console.error('Cart icon not found!');
    }
}





// Pokretanje funkcije nakon učitavanja dokumenta
document.addEventListener('DOMContentLoaded', function() {
    addCartEventListener();
});

document.querySelectorAll('input[type="number"]').forEach(function(input) {
    input.addEventListener('input', function() {
        // Ukupna cijena
        let totalPrice = 0;

        // Prolazak kroz sve proizvode
        document.querySelectorAll('input[name^="quantity"]').forEach(function(quantityInput) {
            let productID = quantityInput.name.replace('quantity', '');

            // Dobijanje količine proizvoda
            let quantity = parseInt(quantityInput.value) || 0;

            // Dobijanje cijene proizvoda iz dataset-a
            let productInput = document.querySelector('input[name="product"][value="' + productID + '"]');
            if (productInput) {
                let productPrice = parseFloat(productInput.dataset.price);

                // Račun ukupne cijene za ovaj proizvod
                let productTotalPrice = quantity * productPrice;

                // Dodavanje cene proizvoda ukupnoj ceni
                totalPrice += productTotalPrice;
            }
        });

        // Ažuriranje ukupne cijene korisniku
        document.getElementById('totalprice').textContent = 'Ukupna cijena: ' + totalPrice.toFixed(2) + ' KM';
    });
});
