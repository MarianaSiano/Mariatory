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
