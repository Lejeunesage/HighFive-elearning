<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion/Incription</title>
    <!-- Stylesheet link -->
    <link rel="stylesheet" href="./css/style.css">

    <style>
 

 section
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px 0;
}

.form-wrapper
{
    display: flex;
    justify-content: center;
    align-items: center;
    flex: auto;
}

.form-wrapper .card
{
    width: 360px;
    padding: 20px;
    background-color: var(--color-bg1);
    overflow:hidden;
    transition: opacity 0.3s, visibility 0.3s;
    border-radius: 5px;
}

.card.show
{
    visibility: visible;
    opacity: 1;
}

.card-header
{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    margin: 30px 20px 0 ;
    font-size: 1.1rem;
    /* color: #94f7e6; */
    box-shadow: 2px 3px 8px var(--color-primary);
    border-radius: 50px;
   
}

.card-header .form-header
{
    flex: 50%;
    text-align: center;
    padding: 10px 0;
    border: 1px solid transparent;
    border-radius: 50px;
    user-select: none;
    cursor: pointer;
}

.card-header .form-header.active
{
    box-shadow: inset 1px 1px 2px var(--color-primary), inset -1px 1px 2px var(--color-primary), 
                inset -1px -1px 2px var(--color-primary),inset 1px -1px 2px var(--color-primary);
    border-color: var(--color-primary);
    transition: border-color 0.3s, box-shadow 0.3s;
}

.card-body
{
    display: flex;
    flex-wrap: nowrap;
    padding: 40px 0;
    text-align: center;
}
form
{
    flex: 0 0 100%;
}

.toggleform
{
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s, visibility 0.3s;
}

.form-control
{
    width: 100%;
    border: none;
    border-bottom: 1px solid var(--color-primary);
    background: none;
    outline: none;
    padding: 10px 5px;
    margin-bottom: 20px;
    color: #fff;
    cursor:ns-resize;
}



.formbutton
{
    border: 1px solid transparent;
    padding: 1rem 1rem;
    width: 10rem;
    background-color: var(--color-primary);
    border-radius: 50px;
    margin-top: 1rem;
    font-size: 1rem;
    transition: transform 0.3s, box-shadow 0.3s;
}

.formbutton:hover
{
    background: var(--color-bg1);
    border: 1px solid var(--color-primary);
}


@media  (max-width:1080px) {
    

   .nav_list
    {
        align-items:baseline;
        display: inline-block;
    }
    nav ul li a:hover
    {
        border-bottom: none;
        justify-content: first baseline;
        display: block;
        color: var(--color-primary);
    }
    
}





</style>

</head>
<body>

<?php 

require "navbar.php";
?>
<!-- LOGIN FORM -->
<section>
            <div class="sec-container">
                <div class="form-wrapper">
                    <div class="card">
                        <div class="card-header">
                            <div id="forLogin" class="form-header active">Se Connerter</div>
                            <div id="forRegister" class="form-header">S'inscrire</div>
                        </div>

                        <div class="card-body" id="formContainer">
                            <form id="formLogin">
                                <input type="text" class="form-control" placeholder="@Utilisateur">
                                <input type="password" class="form-control" placeholder="@Mot de passe">
                                <button class="formbutton">Connexion</button>
                            </form>
                            <form id="formRegister" class="toggleform">
                                <input type="text" class="form-control" placeholder="@Utilisateur">
                                <input type="password" class="form-control" placeholder="@Mot de passe">
                                <input type="password" class="form-control" placeholder="@Confirmer mot de passe">
                                <input  class="formbutton" type="submit" value="Inscription">
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <?php 
        require "footer.php";
        ?>

<script>
    
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
</script>
    
</body>
</html>