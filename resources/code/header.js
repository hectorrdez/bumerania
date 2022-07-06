const menuBtn = document.querySelectorAll(".menuBtn");
const menu = document.querySelector("header nav");
console.log(window.innerWidth);
for (let i = 0; i < menuBtn.length; i++) {
    menuBtn[i].addEventListener("click", () => {
        menu.classList.toggle("active")
        if (menu.classList.contains("active")) {
            document.querySelector(".menuBtnTransparent").display = "block"
        } else {
            document.querySelector(".menuBtnTransparent").display = "none"
        }
    })
}



const category = document.querySelectorAll(".category");
const categoryContent = document.querySelectorAll(".categoryContent");
const productContainer = document.querySelectorAll(".products li");
const products = document.querySelectorAll(".productName")
const productContent = document.querySelector(".productContent");


// MOSTRAR CATEGORYCONTENT
for (let i = 0; i < category.length; i++) {
    category[i].addEventListener('mouseover', () => {
        if (screen.orientation.type == "landscape-primary") {
            if (window.innerWidth > 1300) {
                if (categoryContent[i].innerHTML.includes("productName")) {
                    categoryContent[i].style.display = "block";
                } else {
                    categoryContent[i].style.display = "flex";

                }
            }
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
                productContentIMG.src = "http://localhost/resources/img/bumibot.png";
                break
            case "Temi":
                productContentIMG.src = "http://localhost/resources/img/temi.jpg";
                break
            case "SmartTable":
                productContentIMG.src = "http://localhost/resources/img/smarttable.png";
                break
            case "Ares":
                productContentIMG.src = "http://localhost/resources/img/ares.png";
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


const btnUp = document.querySelector(".btnUp")

btnUp.addEventListener("click", function () {
    window.scrollTo(0, 0)
})