// JavaScript source code
loadCart();
var chk = document.getElementsByClassName('checkB');
for (var i = 0; i < chk.length; i++) {
    chk[i].addEventListener('click', function () { checkBlanks() });
}

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
    total += (total * .095);
    document.getElementById("total").innerHTML = "$" + total.toFixed(2);
}

function checkBlanks() {
    if (!document.getElementById('firstname').value.match(/\S/))
        alert("Please Fill All The Required Blanks");
    else if (!document.getElementById('lastname').value.match(/\S/))
        alert("Please Fill All The Required Blanks");
    else if (!document.getElementById('address').value.match(/\S/))
        alert("Please Fill All The Required Blanks");
    else if (!document.getElementById('email').value.match(/\S/))
        alert("Please Fill All The Required Blanks");
    else if (!document.getElementById('phone').value.match(/\S/))
        alert("Please Enter A Valid Phone Number");
    else
    window.location.replace("Billing.php");
}