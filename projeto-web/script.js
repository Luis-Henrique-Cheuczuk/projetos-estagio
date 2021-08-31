let indexSlide = 0
let slides = document.querySelectorAll('div[class="img-fundo"]')
slides[indexSlide].style.display = "block"


function setSlide(index) {
    indexSlide += index

    // indexSlide = indexSlide % 4
    // if(indexSlide < 0) {
    //     indexSlide = slides.length - 1
    // }

    if (indexSlide < 0) {
        indexSlide = slides.length - 1
    }

    if (indexSlide >= slides.length) {
        indexSlide = 0
    }

    for (let i = 0; i <= slides.length; i++) {
        let style = (indexSlide == i) ? "block" : "none"
        slides[i].style.display = style
    }
}
//-------------------------------------------------------------
const btnMenu = document.getElementById('btn-menu')

function Menu() {
    const nav = document.getElementById('nav')
    nav.classList.toggle('active')
}
//-------------------------------------------------------------
function Modal() {
    const modalcontact = document.getElementById('modal-screen-contact')
    modal = modalcontact.classList.add('active')
}

//-------------------------------------------------------------
function Cancel(){
    const modalcontact = document.getElementById('modal-screen-contact')
    modal = modalcontact.classList.remove('active')
}

//-------------------------------------------------------------
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -25.396934943939826, lng: -51.470080032047925 },
    zoom: 10,
  });
}

//-------------------------------------------------------------
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('uf').value = ("");
    document.getElementById('complemento').value = ("");
    document.getElementById('number').value =("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('uf').value = (conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('uf').value = "...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
}