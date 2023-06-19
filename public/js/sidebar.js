/*Efeito de fechar do menu*/

const body = document.querySelector("body");
const sidebar = body.querySelector(".sidebar");
const toggle = body.querySelector(".toggle");

sidebar.classList.toggle("close");
toggle.addEventListener('click', () => {
    sidebar.classList.toggle("close");
    // console.log(podeFechar);
    if(podeFechar)
        podeFechar = false;
    else
        podeFechar = true;
    // console.log(podeFechar);
})

var podeFechar = true;

function verificarTamanhoJanela() {
    var larguraJanela  = window.innerWidth;
    // console.log(larguraJanela);
    // console.log(podeFechar);
    if (larguraJanela < 1000 && podeFechar) {
        podeFechar = false;
        sidebar.classList.toggle("close");
        toggle.style.display = 'none';
    } else if(larguraJanela >= 1000 && !podeFechar){
        podeFechar = true;
        sidebar.classList.remove("close");
        toggle.style.display = 'block';
    }
}

// Verificar tamanho da janela inicialmente
verificarTamanhoJanela();

// Verificar tamanho da janela sempre que a janela for redimensionada
window.addEventListener('resize', verificarTamanhoJanela);