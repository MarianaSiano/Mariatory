//Funcionamento do modal
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

function pseudoDelete(){
    fade.classList.remove('actived');
    window.alert('Post deletado com sucesso!');
}