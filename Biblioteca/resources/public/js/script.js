//------------------------------------------------------------- Modal -------------------------------------------------------------
const modalbook = document.getElementById('modal-screen')
const modalInfoBook = document.getElementById('modal-screen-info-book')
const modalAddBook = document.getElementById('modal-screen-add-book')

function openModal() {
    modal = modalbook.classList.add('active')
}

function openModalInfoBook() {
    infoBook = modalInfoBook.classList.add('active')
}

function openModalAddBook() {
    addBook = modalAddBook.classList.add('active')
}

//-------------------------------------------------------------

function closeModal(){
    modal = modalbook.classList.remove('active')
}

function closeModalInfoBook(){
    infoBook = modalInfoBook.classList.remove('active')
}

function closeModalAddBook() {
    addBook = modalAddBook.classList.remove('active')
}

//------------------------------------------------------------- Disabled/enable -------------------------------------------------------------
//Função de habilitar troca de data de locação de livro

/* const enableAttDateStart = document.getElementById('date_start')
const enableAttDateEnd = document.getElementById('date_end')
const optionYes = document.getElementById('devolution')

function desabledEnable(){
    if (optionYes == "yes"){ 
        document.getElementById('data_start').setAttribute('enable','')
        document.getElementById('data_end').setAttribute('enable','')
    } else{
        document.getElementById('data_start').setAttribute('disabled','')
        document.getElementById('data_end').setAttribute('disabled','')
    }
} */
