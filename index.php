<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teroc.digital</title>

    <!--CSS stylesheet link  -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- swiperjs.com link -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

   
</head>
<body>

<?php
        require "navbar.php";
    ?>
   
    <!-- Start of Header -->

    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Développer vos compétences pour faire avancer votre carrière</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur Magnam velit porro, amet quia beatae veritatis nihil et omnis esse, voluptatum libero illo praesentium! 
                </p>
                <a href="courses.html" class="btn btn-primary">Commencer</a>
            </div>
            <div class="header_right">
                <img src="./ressources/images/header.svg" alt="header)image">
            </div>
        </div>

    </header>
    <!-- End of Header -->

    <!-- SECTION CATEGORIES -->

    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Catégories</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur Doloremque, ipsam cum temporibus numquam at perspiciatis minus fugiat eligendi nihil esse voluptates labore voluptatibus nostrum? In dolores ratione nemo quas ipsam?
                </p>
                <a href="a" class="btn btn-primary ">En savoir plus</a>
            </div>
            <div class="categories_right">
                <article class="category">
                    <span class= "category_icon">
                        <i class="fa-solid fa-code"></i>
                    </span>
                    <h4>Intégration Web</h4>
                    <p>Lorem ipsum dolor sit amet consectetur !</p>
                </article>
                <article class="category">
                    <span class= "category_icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </span>
                    <h4>Develop-<span>pement Web</span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur !</p>
                </article>
                <article class="category">
                    <span class= "category_icon">
                        <i class="fa-brands fa-phoenix-framework"></i>
                    </span>
                    <h4>Framework</h4>
                    <p>Lorem ipsum dolor sit amet consectetur !</p>
                </article>
                <article class="category">
                    <span class= "category_icon">
                        <i class="fa-brands fa-wordpress"></i>
                    </span>
                    <h4>CMS</h4>
                    <p>Lorem ipsum dolor sit amet consectetur !</p>
                </article>
                <article class="category">
                    <span class= "category_icon">
                        <i class="fa-solid fa-database"></i>
                    </span>
                    <h4>Base de donnée</h4>
                    <p>Lorem ipsum dolor sit amet consectetur !</p>
                </article>
                <article class="category">
                    <span class= "category_icon">
                        <i class="fa-solid fa-pen-nib"></i>
                    </span>
                    <h4>Design UI/UX</h4>
                    <p>Lorem ipsum dolor sit amet consectetur !</p>
                </article>
            </div>
        </div>
    </section>

    

    <!-- SECTION COURS POPULAIRES -->

    <section class="courses">
        <h2>Nos cours Popolaires</h2>
        <div class="container courses_container">
            <article class="course">
                <div class="course_image">
                    <img src="./ressources/images/htmlAI.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>HTML</h4>
                    <p>
                        Dans ce cours vous allez apprendre les bases du HTML
                    </p>
                    <a href="courses.html" class="btn btn-primary">En savoir plus</a>
                </div>
            </article>

            <article class="course">
                <div class="course_image">
                    <img src="./ressources/images/cssAI.jpg" alt="">
                </div>
               <div class="course_info">
                    <h4>CSS</h4>
                    <p>
                        Dans ce cours vous allez apprendre les bases du CSS
                    </p>
                    <a href="courses.html" class="btn btn-primary">En savoir plus</a>
               </div>
            </article>

            <article class="course">
                <div class="course_image">
                    <img src="./ressources/images/javascriptAI.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>JAVASCRIPT</h4>
                    <p>
                        Dans ce cours vous allez apprendre les bases du JavaScript
                    </p>
                    <a href="courses.html" class="btn btn-primary">En  savoir plus</a>
                </div>
            </article>
        </div>
    </section>

   <?php
    require "faqs.php";
   ?>

    <!-- Testimonials -->

    <section class="container testimonials_container mySwiper">
        <h2>Témoignages des étudiants </h2>
        <div class = "swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./ressources/images/avatar1.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Diana Ayi</h5>
                    <small>Etudiante</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur Quo quidem consectetur non officiis. Fuga expedita laboriosam est consequatur eum exercitationem!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./ressources/images/avatar2.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Ernest Kodjo</h5>
                    <small>Developpeur Web</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur Quo quidem consectetur non officiis. Fuga expedita laboriosam est consequatur eum exercitationem!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./ressources/images/avatar3.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Edem GNANBODE</h5>
                    <small>Etudiant</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur Quo quidem consectetur non officiis. Fuga expedita laboriosam est consequatur eum exercitationem!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./ressources/images/avatar4.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Nadia BINTOU</h5>
                    <small>Etudiante</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur Quo quidem consectetur non officiis. Fuga expedita laboriosam est consequatur eum exercitationem!
                    </p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./ressources/images/avatar5.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Emma DOSSOU</h5>
                    <small>Etudiante</small>
                </div>
                <div class="testimonial_body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur Quo quidem consectetur non officiis. Fuga expedita laboriosam est consequatur eum exercitationem!
                    </p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination" style="color:  #f4a62a ;"></div>
    </section>

    <?php
        require "footer.php";
    ?>
     <!-- CDN font Awesome  link-->
     <!-- <script src="https://kit.fontawesome.com/b48549a02e.js" crossorigin="anonymous"></script> -->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/script.js"></script>

    <!-- swiperjs.com script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
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
      </script>
</body>
</html>
