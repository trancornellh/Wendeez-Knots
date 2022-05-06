// JavaScript source code
loadCart();
//push
function loadCart() {
    var food = "";
    var cost = 0;
    var price = 0;
    var qty = 0;
    var total = 0;

    if (sessionStorage.getItem('cart')) {
        var cart = JSON.parse(sessionStorage.getItem('cart'));
        for (let i = 0; i < cart.length; i++) {
            var x = JSON.parse(cart[i]);
            price = parseFloat(x.price.split('$')[1]);
            food = x.productname;
            qty = x.quantity;
            cost = (price * qty).toFixed(2);
            total += (price*qty);
            document.getElementById("food").innerHTML += qty + " " + food + "<br>";
            document.getElementById("cost").innerHTML += "$" + cost + "<br>";
        }
    }
    var tax = total * .0725;
    total += (total * .0725);
    document.getElementById("total").innerHTML = "Total: $" + total.toFixed(2);
    document.getElementById("tax").innerHTML = "Tax: $" + tax.toFixed(2);
}

