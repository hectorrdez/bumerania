const menuBtn = document.querySelectorAll(".menuBtn");
const headerNav = document.querySelector(".headerVertical nav");
for (let i = 0; i < menuBtn.length; i++) {
    menuBtn[i].addEventListener("click", () => {
        headerNav.classList.toggle("active")
        if (headerNav.classList.contains("active")) {
            document.querySelector(".menuBtnTransparent").style.display = "block"
        } else {
            document.querySelector(".menuBtnTransparent").style.display = "none"
        }
    })
}

const category = document.querySelectorAll(".category");
const categoryContent = document.querySelectorAll(".categoryContent");
const categoryContainer = document.querySelectorAll(".categoryContainer");
const productContainer = document.querySelectorAll(".products li");
const products = document.querySelectorAll(".productName")
const productContent = document.querySelector(".productContent");


// MOSTRAR CATEGORYCONTENT
for (let i = 0; i < category.length; i++) {
    category[i].addEventListener('mouseover', () => {
        if (screen.orientation.type == "landscape-primary") {

            if (categoryContent[i].innerHTML.includes("productName")) {
                categoryContent[i].style.display = "block";
            } else {
                categoryContent[i].style.display = "flex";

            }

        }

    });
    category[i].addEventListener('mouseout', () => {
        if (screen.orientation.type == "landscape-primary") {

            categoryContent[i].style.display = "none";

        }
    })
}
// // MOSTRAR LA IMAGEN DE PRODUCTO
for (let i = 0; i < productContainer.length; i++) {
    if (screen.orientation.type == "landscape-primary") {

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
}

// BOTON GO TOP UP ARRIBA

const btnUp = document.querySelector(".btnUp")

btnUp.addEventListener("click", function () {
    window.scrollTo(0, 0)
})

// MENU DESPLEGABLE MODO MOVIL

const categoryVertical = document.querySelectorAll(".categoryVertical")
const categoryContainerVertical = document.querySelectorAll(".categoryContainerVertical")
const categoryContentVertical = document.querySelectorAll(".categoryContentVertical")
const imgCategory = document.querySelectorAll(".symbolVertical")

for (i = 0; i < categoryContainerVertical.length; i++) {
    categoryContainerVertical[i].style.height = 0

    if (i == 0) {
        categoryVertical[i].addEventListener('click', () => {
            if (categoryContainerVertical[0].style.height == "0px") {
                categoryContainerVertical[0].style.height = "fit-content"
                categoryContainerVertical[1].style.height = 0

            } else {
                categoryContainerVertical[0].style.height = 0
            }
            if (imgCategory[0].style.transform == "rotate(0deg)") {
                imgCategory[0].style.transform = "rotate(180deg)"
            } else {
                imgCategory[0].style.transform = "rotate(0deg)"
            }
            imgCategory[1].style.transform = "rotate(180deg)"

        })
    }
    if (i == 1) {
        categoryVertical[i].addEventListener('click', () => {
            if (categoryContainerVertical[1].style.height == "0px") {
                categoryContainerVertical[1].style.height = "fit-content"
                categoryContainerVertical[0].style.height = 0
            } else {
                categoryContainerVertical[1].style.height = 0
            }

            if (imgCategory[1].style.transform == "rotate(0deg)") {
                imgCategory[1].style.transform = "rotate(180deg)"
            } else {
                imgCategory[1].style.transform = "rotate(0deg)"
            }
            imgCategory[0].style.transform = "rotate(180deg)"

        })
    }
}


// DIV PARA OCULTAR MENU DESPLEGABLE MOVIL

