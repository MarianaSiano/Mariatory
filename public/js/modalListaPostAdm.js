// Modal para excluir------------------------------------------
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");
var obtn = document.getElementById("moBtn");

var cbtn = document.getElementById("cBtn");
var sbtn = document.getElementById("sBtn");
var fecharExcluir = document.getElementById("fecharExcluir");

function abrirModalExcluir() {
  modal.showModal();
}

function fecharModalExcluir() {
  modal.close();
}

btn.onclick = abrirModalExcluir;
obtn.onclick = abrirModalExcluir;

fecharExcluir.onclick = fecharModalExcluir;
cbtn.onclick = fecharModalExcluir;
sbtn.onclick = fecharModalExcluir;

//-------------------------------------------------------------

//Modal de edição----------------------------------------------
var modalEdicao = document.getElementById("modalEdicao");
var fecharEditar1 = document.getElementById("fecharEditar1");
var fecharEditar2 = document.getElementById("fecharEditar2");
var fecharEditar3 = document.getElementById("fecharEditar3");
var botaoEditar1 = document.getElementById("botaoEditar1");
var botaoEditar2 = document.getElementById("botaoEditar2");

botaoEditar1.onclick = function () {
  modalEdicao.showModal();
};
botaoEditar2.onclick = function () {
  modalEdicao.showModal();
};

fecharEditar1.onclick = function () {
  modalEdicao.close();
};
fecharEditar2.onclick = function () {
  modalEdicao.close();
};
fecharEditar3.onclick = function () {
  modalEdicao.close();
};

modalEdicao.onclick = function (event) {
  if (event.target == modalEdicao) {
    modalEdicao.close();
  }
};
//-------------------------------------------------------------

//Modal de vizualização ----------------------------------------
var modalVisualizacao = document.getElementById("modalVisualizacao");
var botaoVisualizar1 = document.getElementById("botaoVisualizar1");
var botaoVisualizar2 = document.getElementById("botaoVisualizar2");

var fecharVisualizacao = document.getElementById("fecharVisualizacao");

botaoVisualizar1.onclick = function () {
  modalVisualizacao.showModal();
};

botaoVisualizar2.onclick = function () {
  modalVisualizacao.showModal();
};

modalVisualizacao.onclick = function (event) {
  if (event.target == modalVisualizacao) {
    modalVisualizacao.close();
  }
};

fecharVisualizacao.onclick = function () {
  modalVisualizacao.close();
};
//-------------------------------------------------------------

//Modal de Criação---------------------------------------------
var modalCriacao = document.getElementById("modalCriacao");
var botaoCriar = document.getElementById("botaoCriar");
var fecharCriacao = document.getElementById("fecharCriacao");
var fecharCriar1 = document.getElementById("fecharCriar1");
var fecharCriar2 = document.getElementById("fecharCriar2");

botaoCriar.onclick = function () {
  closeCheckbox();
  modalCriacao.showModal();
};

fecharCriar1.onclick = function () {
  modalCriacao.close();
};
fecharCriar2.onclick = function () {
  modalCriacao.close();
};

modalCriacao.onclick = function (event) {
  if (event.target == modalCriacao) {
    modalCriacao.close();
  }
};

fecharCriacao.addEventListener("click", () => {
  modalCriacao.close();
});

//-------------------------------------------------------------

//Modal de Gênero---------------------------------------------

var expanded = false;

function showCheckboxesGenero() {
  var checkboxes = document.getElementById("checkboxesGenero");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

//-------------------------------------------------------------

//Modal de Redflags---------------------------------------------

var expanded = false;

function showCheckboxesRedflag() {
  var checkboxes = document.getElementById("checkboxesRedflag");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

//-------------------------------------------------------------

//Modal de Fechar checkbox-------------------------------------

function closeCheckbox() {
  var expanded = false;

  var checkboxes = document.getElementById("checkboxesGenero");
  console.log(expanded);
  if (!expanded) {
    checkboxes.style.display = "none";
    expanded = false;
  }

  var checkboxes = document.getElementById("checkboxesRedflag");
  if (!expanded) {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
