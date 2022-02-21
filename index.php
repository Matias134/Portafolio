<?php

    // require 'php/email.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>MATIAS BARRA</h1>
        </div>
        <div class="menu-mobile">
            <i id="icon-menu" class="fas fa-bars"></i>
        </div>
        <div class="header-menu">
            <ul>
                <a href="#about-me"><li>¿Quién soy?</li></a>
                <a href="#technologies"><li>Tecnologias</li></a>
                <a href="#projects"><li>Proyectos</li></a>
                <a href="#contact"><li>Contacto</li></a>
            </ul>
        </div>
    </header>
    
    <!-- MENU MOBILE -->
    <nav class="nav animate__animated">
        <ul>
            <a href="#about-me"><li>¿Quién soy?</li></a>
            <a href="#technologies"><li>Tecnologias</li></a>
            <a href="#projects"><li>Proyectos</li></a>
            <a href="#contact"><li>Contacto</li></a>
        </ul>
    </nav>
    <section>
        <article class="article-image">
        </article>
        <article class="text-image">
            <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit..</h2>
        </article>
        <article id="about-me" class="about-me">
            <div class="profile-image">
                <div class="container-profile-image">
                    <img src="img/profile.png" alt="">
                </div>
            </div>
            <div class="profile-description">
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem illo a, labore id maiores asperiores laudantium saepe neque exercitationem necessitatibus omnis, at porro possimus? Asperiores quod provident repellat amet optio."
            </div>
        </article>
        <article id="technologies" class="technologies">
            <h1>TECNOLOGÍAS</h1>
            <div class="container-technologies">
                <div class="technology">
                    <img src="img/html5.svg" alt="">
                </div>
                <div class="technology">
                    <img src="img/css.svg" alt="">
                </div>
                <div class="technology">
                    <img src="img/bootstrap.svg" alt="">
                </div>
                <div class="technology">
                    <img src="img/javascript.svg" alt="">
                </div>
                <div class="technology">
                    <img src="img/php.svg" alt="">
                </div>
                <div class="technology">
                    <img src="img/mysql.svg" alt="">
                </div>
                <div class="technology">
                    <img src="img/git.svg" alt="">
                </div>
            </div>
        </article>
        <article id="projects" class="projects">
            <h1>PROYECTOS</h1>
            <div class="container-projects">
                <div class="project">
                    <img src="img/projects.jpg" alt="">
                    <div class="cont-textos">
                        <div class="cont-title">
                            <h2>TITULO</h2>
                        </div>
                    </div>
                    <div class="cont-links">
                        <a href="#">GitHub</a>
                        <a href="#">Ver ahora</a>
                    </div>
                </div>
                <div class="project">
                    <img src="img/projects.jpg" alt="">
                    <div class="cont-textos">
                        <div class="cont-title">
                            <h2>TITULO</h2>
                        </div>
                    </div>
                    <div class="cont-links">
                        <a href="#">GitHub</a>
                        <a href="#">Ver ahora</a>
                    </div>
                </div>
                <div class="project">
                    <img src="img/projects.jpg" alt="">
                    <div class="cont-textos">
                        <div class="cont-title">
                            <h2>TITULO</h2>
                        </div>
                    </div>
                    <div class="cont-links">
                        <a href="#">GitHub</a>
                        <a href="#">Ver ahora</a>
                    </div>
                </div>
                <div class="project">
                    <img src="img/projects.jpg" alt="">
                    <div class="cont-textos">
                        <div class="cont-title">
                            <h2>TITULO</h2>
                        </div>
                    </div>
                    <div class="cont-links">
                        <a href="#">GitHub</a>
                        <a href="#">Ver ahora</a>
                    </div>
                </div>
                
            </div>
        </article>
        <article id="contact" class="contact">
            <h1>CONTACTO</h1>
            <div class="cont-form">
                <form action="php/email.php" method="POST" id="contact-form">
                    <input type="hidden" name="post-email">
                    <b>Nombre</b>
                        <input type="text" name="name" id="name">
                    <b>Correo electronico</b>
                        <input type="email" name="email" id="email">
                    <b>Comentario</b>
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                        <span class="error animate__animated animate__fadeIn">error</span>
                    <input type="button" value="Enviar" id="btn-email">
                </form>
            </div>
        </article>
    </section>
    <footer>
        <div class="created-by">
            <i class="far fa-copyright"></i>Copyright 2022, creado por Matias Barra.
        </div>
        <div class="social-media">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/animate.js"></script>
<script src="js/app.js"></script>
</html>