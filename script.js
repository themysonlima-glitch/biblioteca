let btn_teste = document.getElementById("teste")

btn_teste.addEventListener("click", () => {
    btn_teste.innerHTML = "outro"
    btn_teste.style.backgroundColor = "black"
})

let jumbo = document.querySelector('#jumbo')

btn_teste.addEventListener("click", () => {
    jumbo.src = "imgs/thumb.jpg"
    //jumbo.setAttribute("src", "imgs/thumb.png")
})
let header = document.querySelector('header')
let controle = false

btn_teste.addEventListener("click", () => {
    if (controle == false) {
        header.style.display = "none"
        controle = true
    } else {
        header.style.display = "flex"
        controle = false
    }
})

let cards = document.getElementsByClassName('card')

for (const item of cards) {
    item.addEventListener("mouseover", () => {
        item.style.backgroundColor = "black"
    })
    item.addEventListener("mouseout", () => {
        item.style.backgroundColor = "#17e46c"
    })
}