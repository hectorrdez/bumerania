// BOTON GO TOP UP ARRIBA

const btnUp = document.querySelector(".btnUp")

btnUp.addEventListener("click", function () {
    window.scrollTo(0, 0)
})

// MENU DESPLEGABLE MODO MOVIL

for (i = 0; i < categoryContainer.length; i++) {
    categoryContainer[i].style.height = 0
    console.log(categoryContainer[0]);

    if (i == 0) {
        category[i].addEventListener('click', () => {
            if (categoryContainer[0].style.height == "0px") {
                categoryContainer[0].style.display = "block"

                categoryContainer[0].style.padding = "1em 0 0 0"
                categoryContainer[0].style.height = "fit-content"
                categoryContainer[1].style.height = 0
            } else {
                categoryContainer[0].style.height = 0
            }
        })
    }
    if (i == 1) {
        category[i].addEventListener('click', () => {
            if (categoryContainer[1].style.height == "0px") {
                categoryContainer[0].style.padding = "1em 0 0 0"
                categoryContainer[1].style.height = "fit-content"
                categoryContainer[0].style.height = 0
            } else {
                categoryContainer[1].style.height = 0
            }

        })
    }
}
