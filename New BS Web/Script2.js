// JavaScript source code
emptyC();

function emptyC() {
    if (sessionStorage.getItem('cart')) {
        sessionStorage.removeItem('cart');
        printCart();
    }
}