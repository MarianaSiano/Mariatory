/*Efeito de fechar do menu*/

const body = document.querySelector("body");
const sidebar = body.querySelector(".sidebar");
const toggle = body.querySelector(".toggle");

toggle.addEventListener('click', () => {
    sidebar.classList.toggle("close");
})