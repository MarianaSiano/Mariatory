//Funcionamento do modal
const fadeExcluir = document.querySelector('.excluir');
const fadeCadastrar = document.querySelector('.cadastrar');
const fadeEditar = document.querySelector('.editar');
const fadeVisualizar = document.querySelector('.visualizar');

function openModalExcluir(){
    fadeExcluir.classList.add('actived');
}

function closeModalExcluir(){
    fadeExcluir.classList.remove('actived');
}

function openModalCadastrar(){
    fadeCadastrar.classList.add('actived');
}

function closeModalCadastrar(){
    fadeCadastrar.classList.remove('actived');
}

function openModalEditar(){
    console.log('Foda-se')
    fadeEditar.classList.add('actived');
}

function closeModalCadastrar(){
    fadeEditar.classList.remove('actived');
}

function openModalVisualizar(){
    console.log('Foda-se')
    fadeVisualizar.classList.add('actived');
}

function closeModalVisualizar(){
    fadeVisualizar.classList.remove('actived');
}

window.addEventListener('click', (event) => {
    if(event.target == fadeExcluir){
        fadeExcluir.classList.remove('actived');
    }else if(event.target == fadeCadastrar){
        fadeCadastrar.classList.remove('actived');
    }else if(event.target == fadeEditar){
        fadeEditar.classList.remove('actived');
    }else if(event.target == fadeVisualizar){
        fadeVisualizar.classList.remove('actived');
    }
})
