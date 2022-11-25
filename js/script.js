/*Sticky Navbar : change navbar styles on scroll*/

window.addEventListener('scroll', ()=> {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 100);
})

/* Show / hide FAQS answers*/

const faqs = document.querySelectorAll('.faq');
faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open');

        //change icon

        const icon = faq.querySelector('.faq_icon i');
        if (icon.className === "fa-solid fa-plus") {
            icon.className = "fa-solid fa-minus";
        }else  
        if (icon.className === "fa-solid fa-minus") {
            icon.className = "fa-solid fa-plus";
            
        }
    })
})


/*Login form */


const displayform = _('displayform');
const forLogin = _('forLogin');
const formLogin = _('formLogin');
const forRegister = _('forRegister');
const formRegister = _('formRegister');
const formContainer = _('formContainer');
displayform.addEventListener('click',showform);

forLogin.addEventListener('click', () =>{
    forLogin.classList.add('active');
    forRegister.classList.remove('active');
    if (formLogin.classList.contains('toggleform')) {
        formContainer.style.transform = 'translate(0%)';
        formContainer.style.transition = 'transform 0.5s';
        formRegister.classList.add('toggleform');
        formLogin.classList.remove('toggleform');


    }
})

forRegister.addEventListener('click', () =>{
    forLogin.classList.remove('active');
    forRegister.classList.add('active');
    if (formRegister.classList.contains('toggleform')) {
        formContainer.style.transform = 'translate(-100%)';
        formContainer.style.transition = 'transform 0.5s';
        formRegister.classList.remove('toggleform');
        formLogin.classList.add('toggleform');


    }
})

function _(e) {
    return document.getElementById(e);
    
}

function showform() {
    document.querySelector('.form').classList.toggle('active');
    document.body.classList.toggle("active");
}

/*
const OpenNav = document.querySelector(".icon1")
const FermerNav = document.querySelector(".fermer")
const Menu = document.querySelector(".menu")

const PositionMenu = Menu.getBoundingClientRect().left;

OpenNav.addEventListener("click", () =>{
    if(PositionMenu <0)
    {
        Menu.classList.add("montrer")
    }
})

FermerNav.addEventListener("click", () =>{
    if(PositionMenu <0)
    {
        Menu.classList.remove("montrer")
    }
})*/




