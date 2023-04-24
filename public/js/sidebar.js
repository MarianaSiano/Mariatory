/*Efeito de clicar do mouse*/

var itensMenu = document.querySelectorAll('.item-li');

//Percorre todos os li's da lista removendo o ativo, e a que foi clicada(this) ganha a classe ativo.
function selectLi(){
    itensMenu.forEach(element => {
        element.classList.remove('actived');
    });
    this.classList.add('actived');
}

//Listener para escutar o clique do mouse e ativar a função selectLi
itensMenu.forEach(element => {
    element.addEventListener('click', selectLi);
})

/*Efeito de fechar do menu*/

var btn = document.querySelector('.btn-reduce');
var sidebar = document.querySelector('.sidebar');
var content = document.querySelector('.main-content');

btn.onclick = function(){
    sidebar.classList.toggle("on");
    content.classList.toggle("on");
}
