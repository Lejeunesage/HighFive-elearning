 <!-- Start of Navbar -->


 <style>

    
/*MEDIA QUERIES*/
@media screen and (max-width: 1024px) {
    .container{
        width: var(--container-width-md);
       
    }

    h1{
        font-size: 1.8rem;
    }

    h2{
        font-size: 1.5rem;
    }

    h3{
        font-size: 1.2rem;
    }

    h4{
        font-size: 1rem;
    }

    /*Nav*/

    nav button{
        display: inline-block;
        background: transparent;
        font-size: 1.8rem;
        color: var(--color-primary);
        cursor: pointer;
    }

    nav button#close-menu-btn{
        display: none;
    }

    .nav_menu{
        position: fixed;
        top: 5rem;
        right: 5%;
        height: fit-content;
        width: 18rem;
        flex-direction: column;
        gap: 0;
        display: none;
    }
    .nav_menu li{
        width: 100%;
        height: 5.8rem;
        animation: animationsNavItems 400ms linear forwards;
        transform-origin: top right;
        opacity: 0;
    }

    .nav_menu li:nth-child(2){
        animation-delay: 200ms;
    }
    .nav_menu li:nth-child(3){
        animation-delay: 400ms;
    }
    .nav_menu li:nth-child(4){
        animation-delay: 600ms;
    }
    .nav_menu li:nth-child(5){
        animation-delay: 800ms;
    }
    .nav_menu li:nth-child(6){
        animation-delay: 1000ms;
    }

    @keyframes animationsNavItems {
        0%{
            transform: rotateZ(-90deg) rotateX(90deg) scale(0.1);
        }

        100%{
            transform: rotateZ(0) rotateX(0) scale(1);
            opacity: 1;
        }
    }

    .nav_menu li a{
        background: var(--color-primary);
        box-shadow: -4rem 6rem 10rem rgba(0, 0, 0, 0.6);
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
        border-radius: 0;
        border: none;
    }

    .nav_menu li a:hover{
        background: var(--color-bg1);
        color: var(--color-black);
        place-items: center;
        display: grid;
        place-items: center;
        
    }

    /*HEADER*/

    header{
        height: 60vh;
        margin-bottom: 4rem;
    }

    .header_container{
        gap: 0;
        padding-bottom: 3rem;
    }

    /*CATEGORIES*/

    .categories{
        height: auto;

    }

    .categories_container{
        grid-template-columns: 1fr;
        gap: 3rem;
    }

    .categories_left{
        margin-right: 0;
    }

    /*POPULAR COURSES*/

    .courses{
        margin-top: 0;
    }

    .courses_container{
        grid-template-columns: 1fr 1fr;
    }

    /*FAQS*/

    .faqs_container{
        grid-template-columns: 1fr;
    }

    .faq{
        padding: 1.5rem;
    }
    
    /*FOOTER*/

    .footer_container{
        grid-template-columns: 1fr 1fr;
    }

}

/*MEDIA QUERIES PHONE*/
@media screen and (max-width: 600px) {
    .nav_menu{
        right: 3%;
    }   

    header{
        height: 100vh;
    }

    .header_container{
        grid-template-columns: 1fr;
        text-align: center;
        margin-top: 0;
    }

    .header_left p{
        margin-bottom: 1.3rem;
    }

    /*CATEGORIES*/

    .categories_right{
        grid-template-columns: 1fr 1fr;
        gap: .7rem;
    }

    .category{
        padding: 1rem;
        border-radius: 1rem;
    }

    .category_icon{
        margin-top: 4px;
        display: inline-block;
    }

    /*POPULAR COURSES*/

    .courses_container{
        grid-template-columns: 1fr;

    }

    /*TESTIMONIALS*/

    .testimonial_body{
        padding: 1.2rem;
    }

    /*FOOTER*/

    .footer_container{
        grid-template-columns: 1fr;
        text-align: center;
        gap: 2rem;
    }

    .footer_1 p{
        margin: 1rem auto;
    }

    .footer_socials{
        justify-content: center;
    }

    .footer_adress{
        display: flex;
        flex-direction: column;
    }

    .toTop{
    
        /* color: var(--color-primary); */
        background: var(--color-primary);
        width: 40px;
        height: 40px;
        bottom: 30px;
        right: 30px;
    
    
    }

    .toTop>i{
        position:relative;
        font-size: 20px;
        bottom: -10px;
    }
}
 </style>
 <nav>
        <div class="container nav_container">
            <a  href="index.php"><h1>Teroc<span style="color:#f4a62a;">.digital</span></h1></a>
            <ul class="nav_menu">
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="about.php">A-propos</a></li>
                <li><a href="courses.php">Cours</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <a href="sign-in-up.php" class="btn top" id="displayform">Se Connecter / S'inscrire</a>
                </li>
            </ul>
            <button id="open-menu-btn">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
            <button id="close-menu-btn">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </nav>
    <!-- End of Navbar -->

    <script>
        /*show/hide nav menu */

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
    </script>