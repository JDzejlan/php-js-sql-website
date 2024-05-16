function checkUserLoginStatus(callback) {
    fetch('check_login_status.php')
        .then(response => response.json()) 
        .then(data => {
            callback(data.isLoggedIn);
        })
        .catch(error => {
            console.error('Error checking login status:', error);
            callback(false);
        });
}

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


document.addEventListener('DOMContentLoaded', function() {
    addCartEventListener();

    
    document.querySelectorAll('input[type="number"]').forEach(function(input) {
        input.addEventListener('input', updateTotalPrice);
    });
});

function updateTotalPrice() {
    
    let totalPrice = 0;

    const allProductsEls = document.querySelectorAll('input[name^="quantity"]');
    allProductsEls.forEach(productEl => {
        const productId = productEl.name.replace('quantity', '');

        let quantity = parseInt(productEl.value) || 0;

        const productPriceElement = document.getElementById('cijena' + productId);
        if (productPriceElement) {
            const productPrice = parseFloat(productPriceElement.textContent);

            
            const productTotalPrice = quantity * productPrice;

            totalPrice += productTotalPrice;
        }
    });


    document.getElementById('totalprice').textContent = 'Ukupna cijena: ' + totalPrice.toFixed(2) + ' KM';
}
