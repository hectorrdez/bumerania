let products = document.querySelectorAll("li.product a");
let productLink = document.querySelectorAll(".products a");
let productContent = document.querySelectorAll(".productContent");
let productsIMG = document.querySelectorAll(".productContent img");

console.log(productsIMG[0].src);

for (let i = 0; i < products.length; i++) {
    products[i].addEventListener('mouseover', () => {

        if (products[i].innerText.includes("BumiBot")) {
            productContent[i].innerHTML = "<img class='productContentIMG' src='http://localhost/resources/img/bumibot.jpg'>";
        }

    })
}