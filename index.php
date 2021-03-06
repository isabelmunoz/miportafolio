<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  
    <title>Isabel Muñoz Portafolio</title>

  </head>
  <body>
    <a id="whatsapp" href="https://wa.me/56950129707"><img src="imagenes/whatsapp.png" alt=""></a>
    <header>
    <div class="menu">
      <div class="contenedor">
        <p class="logo">Isabel Muñoz</p>
        <nav>
          <ul>
            <li><a href="">Sobre mi</a></li>
            <li><a href="">Skills</a></li>
            <li><a href="">Mis Trabajos</a></li>
            <li><a href="">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="contenedor" id="contenedor-titulo-flex">
      <div class="contenedor-titulo">
        <h1>Isabel Muñoz</h1>
        <h2>Desarrolladora web Front End</h2>
        <a href="">VER MIS TRABAJOS</a>
      </div>
    </div>
  </header>
  <main>
    <section id="sobre-mi">
      <div class="contenedor">
        <h3>Sobre mi</h3>
        <div class="contenedor-sobremi">
          <div class="computadoras">
            <img src="imagenes/computadoras.png" alt="">
          </div>
          <div class="texto">
            <p>Hola, mi nombre es Isabel Muñoz soy títulada de Ingeniería en Redes y además soy desarrolladora Front End, por ahora tengo experiencia en desarrollo de sitios web para emprendedores y algunos proyectos menores.</p>
            <p>Actualmente me encuentro investigando y sigo aprendiendo sobre nuevas tecnologías de forma autodidacta para complementar mis conocimientos y también siguiendo cursos en línea.</p>
            <p>Me pueden contactar a mi numero telefónico, en redes sociales o a través del formulario de contacto al pie de mi sitio web.</p>
            <a href="">VER MIS TRABAJOS</a>
          </div>
        </div>
      </div>
    </section>
    <section id="skills">
      <div class="contenedor">
        <h3>Skills</h3>
        <div class="imagenes-skills">
          <div><img class="img-html5" src="imagenes/html5.png" alt=""></div>
          <div><img class="img-js" src="imagenes/js.png" alt=""></div>
          <div><img class="img-css3" src="imagenes/css3.png" alt=""></div>
          <div><img class="img-bootstrap" src="imagenes/bootstrap.png" alt=""></div>
          <div><img class="img-php" src="imagenes/php.png" alt=""></div>
          <div><img class="img-wp" src="imagenes/wp.png" alt=""></div>
          <div><img class="img-git" src="imagenes/git.png" alt=""></div>
        </div>
      </div>
    </section>
    <section id="mis-trabajos">
      <div class="contenedor">
        <h3>Mis trabajos</h3>
        <div class="owl-carousel owl-theme">
          <div class="item"><img src="imagenes/gato.png" alt=""><a class="enlace-trabajos" href="">primer  gato</a></div>
          <div class="item"><img src="imagenes/gato1.png" alt=""><a class="enlace-trabajos" href="">segundo gato</a></div>
          <div class="item"><img src="imagenes/gato2.png" alt=""><a class="enlace-trabajos" href="">tercer gato</a></div>
        </div>
      </div>
    </section>
    <section id="contacto">
    <?php
      if(@$_GET['i']=='ok') { ?>

      <h3>Su mensaje a sido enviado correctamente. Responderé a la brevedad.</h3>

      <?php
      } else{
      ?>
      <div class="contenedor">
        <h3>Contacto</h3>
        <form action="envio-formulario.php" method="post" enctype="multipart/form-data">
          <input type="text" placeholder="Nombre" name="nombre" required>
          <input type="email" placeholder="Email" name="email" required>
          <textarea placeholder="Mensaje" name="mensaje" required></textarea>
          <input type="submit" value="ENVIAR">
        </form>
            <?php } ?>
            <div class="contacto-info">
                <div class="mail"><img src="imagenes/mail.png" alt="imagen de email">isabelmunozq@gmail.com</div>
                <div class="whatsapp"><img src="imagenes/whatsapp.png" alt="imagen de whatsapp">+56950129707</div>
            </div>
      </div>
    </section>

  </main>
  <footer>
  <div class="contenedor">
        <div class="redes">
           <a href="#"><img src="imagenes/linkedin.png" alt="imagen de linkedin"></a>
           <a href="#"><img src="imagenes/github.png" alt="imagen de github"></a>
           <a href="#"><img src="imagenes/facebook.png" alt="imagen de facebook"></a>
        </div>
        <div class="parrafo">
        <p>© 2020 Isabel Muñoz | Ingeniera en Redes & Diseñador web Front End.</p>
        </div>
  </div>
  </footer>

    <!-- JavaScript -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>