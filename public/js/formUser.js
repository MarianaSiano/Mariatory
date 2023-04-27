//Variável para visualizar a senha
let btn = document.querySelector('.fa-eye');

//Funcionalidade para visualizar a senha
btn.addEventListener('click', ()=>{
    let inputSenha = document.querySelector('#userPassword')

    if (inputSenha.getAttribute('type') == 'password'){
        inputSenha.setAttribute('type', 'text')
    }
    else {
        inputSenha.setAttribute('type', 'password')
    }

});

//Javascript para o modal
const fade = document.querySelector('.fade');

function openModal(){
    fade.classList.add('actived');
}

function closeModal(){
    fade.classList.remove('actived');
}

window.addEventListener('click', (event) => {
    if(event.target == fade){
        fade.classList.remove('actived');
    }
})