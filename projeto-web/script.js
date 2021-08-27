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

btnMenu.addEventListener('click', Menu)


//-------------------------------------------------------------
const contact = document.getElementById('contact-modal')

function ContactModal() {
    const modalscreen = document.getElementById('modal-screen')
    modalscreen.addEventListener('click', (e) => {
        console.log(e.target)
    })
    modalscreen.classList.toggle('active')
}

contact.addEventListener('click', Contact)
