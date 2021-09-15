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