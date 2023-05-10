// Modal para excluir------------------------------------------
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");
var obtn = document.getElementById("moBtn");

var cbtn = document.getElementById("cBtn");
var sbtn = document.getElementById("sBtn");
var span = document.getElementsByClassName("close")[0];

function abrirModalExcluir() {
  modal.showModal();
}

function fecharModalExcluir() {
  modal.close();
}

btn.onclick = abrirModalExcluir;
obtn.onclick = abrirModalExcluir;

span.onclick = fecharModalExcluir;
cbtn.onclick = fecharModalExcluir;
sbtn.onclick = fecharModalExcluir;

modal.onclick = function (event) {
  if (event.target == modal) {
    modal.close();
  }
};
//-------------------------------------------------------------

//Modal de edição----------------------------------------------
var modalEdicao = document.getElementById("modalEdicao");
var botaoEditar = document.getElementById("botaoEditar");

botaoEditar.onclick = function () {
  modalEdicao.showModal();
};

modalEdicao.onclick = function (event) {
  if (event.target == modalEdicao) {
    modalEdicao.close();
  }
};
//-------------------------------------------------------------

//Modal de vizualização----------------------------------------
var modalVisualizacao = document.getElementById("modalVisualizacao");
var botaoVisualizar = document.getElementById("botaoVisualizar");

botaoVisualizar.onclick = function () {
  modalVisualizacao.showModal();
};

modalVisualizacao.onclick = function (event) {
  if (event.target == modalVisualizacao) {
    modalVisualizacao.close();
  }
};
//-------------------------------------------------------------

//Modal de Criação---------------------------------------------
var modalVisualizacao = document.getElementById("modalCriacao");
var botaoVisualizar = document.getElementById("botaoCriar");

botaoCriar.onclick = function () {
  modalCriacao.showModal();
};

modalCriacao.onclick = function (event) {
  if (event.target == modalCriacao) {
    modalCriacao.close();
  }
};

//-------------------------------------------------------------

//Modal de Gênero---------------------------------------------

const ul = document.querySelector("ul"),
  input = document.querySelector("input"),
  tagNumb = document.querySelector(".details span");

let maxTags = 5,
  tags = [];

countTags();
createTag();

function countTags() {
  input.focus();
  tagNumb.innerText = maxTags - tags.length;
}

function createTag() {
  ul.querySelectorAll("li").forEach((li) => li.remove());
  tags
    .slice()
    .reverse()
    .forEach((tag) => {
      let liTag = `<li class="bg-roxo-claro-1 text-white rounded-lg px-2">${tag} <i class="uit uit-multiply" onclick="remove(this, '${tag}')"></i></li>`;
      ul.insertAdjacentHTML("afterbegin", liTag);
    });
  countTags();
}

function remove(element, tag) {
  let index = tags.indexOf(tag);
  tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
  element.parentElement.remove();
  countTags();
}

function addTag(e) {
  if (e.key == "Enter") {
    let tag = e.target.value.replace(/\s+/g, " ");
    if (tag.length > 1 && !tags.includes(tag)) {
      if (tags.length < 5) {
        tag.split(",").forEach((tag) => {
          tags.push(tag);
          createTag();
        });
      }
    }
    e.target.value = "";
  }
}

input.addEventListener("keyup", addTag);

const removeBtn = document.querySelector(".details button");
removeBtn.addEventListener("click", () => {
  tags.length = 0;
  ul.querySelectorAll("li").forEach((li) => li.remove());
  countTags();
});

//-------------------------------------------------------------

//Modal de Red flags---------------------------------------------
const ul_red = document.querySelector("ul"),
  input_red = document.querySelector("input"),
  tagNumb_red = document.querySelector(".redflags span");

let maxTags_red = 5,
  tags_red = [];

countTags();
createTag();

function countTags() {
  input_red.focus();
  tagNumb_red.innerText = maxTags_red - tags_red.length;
}

function createTag() {
  ul_red.querySelectorAll("li").forEach((li) => li.remove());
  tags_red
    .slice()
    .reverse()
    .forEach((tag) => {
      let liTag_red = `<li class="bg-roxo-claro-1 text-white rounded-lg px-2">${tag} <i class="uit uit-multiply" onclick="remove(this, '${tag}')"></i></li>`;
      ul_red.insertAdjacentHTML("afterbegin", liTag_red);
    });
  countTags();
}

function remove(element, tag) {
  let index_red = tags_red.indexOf(tag);
  tags_red = [
    ...tags_red.slice(0, index_red),
    ...tags_red.slice(index_red + 1),
  ];
  element.parentElement.remove();
  countTags();
}

function addTag(e) {
  if (e.key == "Enter") {
    let tag = e.target.value.replace(/\s+/g, " ");
    if (tag_red.length > 1 && !tags.includes(tag)) {
      if (tags_red.length < 5) {
        tag.split(",").forEach((tag) => {
          tags_red.push(tag);
          createTag();
        });
      }
    }
    e.target.value = "";
  }
}

input.addEventListener("keyup", addTag);

const removeBtn_red = document.querySelector(".details button");
removeBtn.addEventListener("click", () => {
  tags_red.length = 0;
  ul_red.querySelectorAll("li").forEach((li) => li.remove());
  countTags();
});
