// let btn_teste = document.getElementById("teste")

// btn_teste.addEventListener("click", () => {
//    btn_teste.innerHTML = "outro"
//    btn_teste.style.backgroundColor = "black"
// })

// let jumbo = document.querySelector('#jumbo')

// btn_teste.addEventListener("click", () => {
//    jumbo.src = "imgs/thumb.jpg"
//jumbo.setAttribute("src", "imgs/thumb.png")
// })
// let header = document.querySelector('header')
// let controle = false

// btn_teste.addEventListener("click", () => {
//    if (controle == false) {
//        header.style.display = "none"
//        controle = true
//    } else {
//        header.style.display = "flex"
//        controle = false
//    }
// })

// let cards = document.getElementsByClassName('card')

// for (const item of cards) {
//    item.addEventListener("mouseover", () => {
//        item.style.backgroundColor = "black"
//    })
//    item.addEventListener("mouseout", () => {
//        item.style.backgroundColor = "#17e46c"
//    })
// }

// preciso selecionar o olho e o input
let olho = document.getElementById('btn-olho')
let senha = document.getElementById('senha')
let visivel = false
// criar um evento de click no olho 
olho.addEventListener('click', () => {
    // ao clicar, abre o olho e exibe o valor do campo
    if (visivel == false) {
        olho.src = "imagens/visibility.png"
        senha.type = "text"
        visivel = true
    } else {
        olho.src = "imagens/visibility_off.png"
        senha.type = "password"
        visivel = false
    }
})

// no evento ao clicar troca a foto do olho
// troca o tipo do input