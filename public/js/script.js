// let header = document.getElementById("header");

let edificios = document.getElementById("edificios");
let gato = document.getElementById("gato");
let btn = document.getElementById("btn");
let persona1 = document.getElementById("persona1");
let persona2 = document.getElementById("persona2");
let slogan = document.getElementById("slogan");

window.addEventListener("scroll", () => {
    let value = window.scrollY;

    edificios.style.marginTop = value * 0.5 + "px";
    gato.style.marginTop = value * 0.7 + "px";
    btn.style.marginTop = value * 0.7 + "px";
    slogan.style.marginBottom = value * -1 + "px";
    persona1.style.left = value * -1 + "px";
    persona2.style.left = value * 1 + "px";
    // header.style.marginTop = value * 0.4 + "px";
});

// RESPONSIVE

const navigation = document.querySelector("nav");
document.querySelector(".menu").onclick = function () {
    this.classList.toggle("active");
    navigation.classList.toggle("active");
};
