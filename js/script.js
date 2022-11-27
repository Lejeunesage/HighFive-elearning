/*Sticky Navbar : change navbar styles on scroll*/

window.addEventListener('scroll', ()=> {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 100);
})

/* Show / hide FAQS answers*/
/*
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

*/
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




<<<<<<< HEAD
/*SWIPERJS TESTIMONIAL */
/*
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    //When window width is => 600px

    breapoints: {
        600:{
            slidesPerView: 2
        }
    }
  });
  */



  /*show/hide nav menu */
/*
  const menu = document.querySelector('.nav_menu');
  const menuBtn = document.querySelector('#open-menu-btn');
  const closeBtn = document.querySelector('#close-menu-btn');


  const openNav = ()=> {
      menu.style.display = 'flex';
      closeBtn.style.display = 'inline-block';
      menuBtn.style.display = 'none';
  }

  const closeNav = ()=> {
    menu.style.display = 'none';
    closeBtn.style.display = 'none';
    menuBtn.style.display = 'inline-block';
  }
  
  menuBtn.addEventListener('click',openNav );
  closeBtn.addEventListener('click', closeNav);

    
*/
=======
>>>>>>> 80ffd0c542f2b6d8a5d515ce80278713d263c6d0
