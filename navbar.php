 <!-- Start of Navbar -->
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