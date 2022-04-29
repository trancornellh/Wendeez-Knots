// JavaScript source code
var btn = document.getElementsByClassName('addtocart');
var cart = [];
for (var i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', function () { addToCart(this); });
}

function addToCart(elem)
{
    var getPrice;
    var getName;
    var getQty;
    var sibs = [];

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
 
    cart.push(product);
    printCart(cart);
}

function printCart(cart)
{
    var total = 0;
    var price = 0;
    var qty = "";
    var name = "";
    var carttable = "";

    for (let i = 0; i < cart.length; i++) {
        //price = cart[i].price;
        name = cart[i].productname;
        qty = cart[i].quantity;

        price = parseFloat(cart[i].price.split('$')[1]);

        total += (qty * price);
        carttable += qty + "x " + name + "     $" + (price * qty) + "<br>";
    }
    document.getElementById("cart").innerHTML = carttable;
    document.getElementById("total").innerHTML = total.toFixed(2);
}