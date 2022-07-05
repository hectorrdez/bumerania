const category = document.querySelectorAll(".category");
const categoryContent = document.querySelectorAll(".categoryContent");
const productContainer = document.querySelectorAll(".products li");
const products = document.querySelectorAll(".productName")
const productContent = document.querySelector(".productContent");


// MOSTRAR CATEGORYCONTENT
for (let i = 0; i < category.length; i++) {
    category[i].addEventListener('mouseover', () => {
        if (categoryContent[i].innerHTML.includes("productName")) {
            categoryContent[i].style.display = "block";
        } else {
            categoryContent[i].style.display = "flex";
        }
    });
    category[i].addEventListener('mouseout', () => {
        categoryContent[i].style.display = "none";
    })
}


// // MOSTRAR LA IMAGEN DE PRODUCTO
for (let i = 0; i < productContainer.length; i++) {
    productContainer[i].addEventListener('mouseover', () => {
        const productContentIMG = document.querySelector(".productContentIMG");

        switch (products[i].innerText) {
            case "BumiBot":
                productContentIMG.src = "http://localhost/resources/img/bumibot.jpg";
                break
            case "Temi":
                productContentIMG.src = "http://localhost/resources/img/temi.jpg";
                break
            case "SmartTable":
                productContentIMG.src = "http://localhost/resources/img/smarttable.jpg";
                break
            case "Ares":
                productContentIMG.src = "http://localhost/resources/img/ares.jpg";
                break
        }
        productContent.style.display = "block"
        productContentIMG.addEventListener('mouseover', () => {
            productContainer.style.display = "block"
        })
    });
    productContainer[i].addEventListener('mouseout', () => {
        productContent.style.display = "none"
    })
}