// JavaScript source code
printCart();
var btn = document.getElementsByClassName('addtocart');
var ept = document.getElementsByClassName('emptycart');
var chc = document.getElementsByClassName('proceed');

for (var i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', function () { addToCart(this); });
}
for (var i = 0; i < ept.length; i++) {
    ept[i].addEventListener('click', function () { emptyCart(); });
}
for (var i = 0; i < chc.length; i++) {
    chc[i].addEventListener('click', function () { checkout() });
}


function addToCart(elem)
{
    var getPrice;
    var getName;
    var getQty;
    var sibs = [];
    var cart = [];
    while (elem = elem.previousSibling)
    {
        if (elem.nodeType === 3) continue; // text node
        if (elem.className == "price")
        {
            getPrice = elem.innerText;
        }
        if (elem.className == "productname")
        {
            getName = elem.innerText;
        }
        if (elem.className == "qty")
        {
            getQty = elem.value;
        }
        sibs.push(elem);
    }

    var product = {
        productname: getName,
        price: getPrice,
        quantity: getQty
    };
    //document.getElementById("cart").innerHTML = getPrice + " " + getName + " " + getQty;
    var stringProduct = JSON.stringify(product);
    if (!sessionStorage.getItem('cart')) {
        cart.push(stringProduct);
        stringCart = JSON.stringify(cart);
        sessionStorage.setItem('cart', stringCart);
        printCart();
    }

    else {
        cart = JSON.parse(sessionStorage.getItem('cart'));
        cart.push(stringProduct);
        stringCart = JSON.stringify(cart);
        sessionStorage.setItem('cart', stringCart);
        printCart();
    }
}

function printCart()
{
    var total = 0;
    var price = 0;
    var qty = 0;
    var name = "";
    var carttable = "";

    if (sessionStorage.getItem('cart')) {
        var cart = JSON.parse(sessionStorage.getItem('cart'));
        for (let i = 0; i < cart.length; i++) {
            var x = JSON.parse(cart[i]);
            price = parseFloat(x.price.split('$')[1]);
            name = x.productname;
            qty = x.quantity;
            total += (qty * price);
            carttable += "<tr><td>" + name + "</td><td>" + qty + "</td><td>$" + (price * qty).toFixed(2) + "</td></tr>";
        }
    }

    document.getElementById("carttable").innerHTML = carttable;
    document.getElementById("total").innerHTML = "$" + total.toFixed(2);
}

function emptyCart()
{
    if (sessionStorage.getItem('cart')) {
        sessionStorage.removeItem('cart');
        printCart();
    }
}

function checkout()
{
    if (sessionStorage.getItem('cart')) {
        if(document.getElementById("Delivery").checked)
            window.location.replace("Address.php");
        else if (document.getElementById("Pickup").checked)
            window.location.replace("Billing.php");
        else
            alert("Please choose Pickup or Delivery");
    }
    else {
        alert("Cart is Empty");
    }
}