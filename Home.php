<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Home</title>
  </head>
  <body>

  <!-- barra de navegacion -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light  d-flex">
      <div class="container navbarMargen d-flex">
          <img class="header_fondo logobarra " src="images/logo.png" alt="fondo">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
              <button type="button" class="btn  btnHome txtnavbar ">INICIO</button>
            <li class="nav-item">
              <a class="nav-link dis txtnavbar" href="ansiedad.html">ANSIEDAD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link txtnavbar" href="depresion.html">DEPRESION</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <!-- Banner imagen-->
<div id="carouselExampleIndicators" class="carousel slide-fluid" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block  w-100" src="/images/ansiedad.jpg" alt="...">
            <div class="carousel-caption">
                <h1 class="display-2"><span>
                  La salud mental: depresión y ansiedad</span>
                </h1>
                <p>Vive sin depresión y sin ansiedad, mejora tu calidad de vida</p>
                <div class="slider-btn">
                    <a class="btn btn-outline-light btn-1 " href="ansiedad.html">Ansiedad</a>
                    <a class="btn btn-2 " href="depresion.html">Depresión</a>

                </div>
            </div>
        </div>
    </div>

</div>

<!--Botones abajo del banner-->
<div class="bts d-grid gap-2 d-md-block text-center ms-4 me-4">
  
  <a href="ansiedad.html">
    <button class="btn btn-primary " style="color: black; " type="button "><span class="text-primary"><img src="images/tormenta.png" alt="" class="mt-3"> </span> <br><br>Consultar Ansiedad</button>
  </a> 
  <a href="depresion.html">
    <button class="btn btn-primary " style="color: black;" type=" button "> <span class="text-primary"><img src="images/fatiga.png" alt="" class="mt-3"></span> <br><br>Consultar Depresión</button>
  </a> 
  <a href="https://www.psicoactiva.com/test/diagnosticos/test-de-ansiedad-profesional/">
    <button class="btn btn-primary " style="color: black;" type="button "><span class="text-primary"><img src="images/trabajar.png" alt="" class="mt-3"></i></span> <br><br>Realiza test</button>
  </a> 
</div>

<!-- Información  -->
<section class="containere about">
  <h2 class="subtitle">Depresión y ansiedad: ¿puedo tener ambas?</h2>
  <p class="about__paragraph">La depresión y la ansiedad son afecciones diferentes, pero con frecuencia se manifiesten juntas. Los tratamientos para ambas también son similares.
    <br>
    <br>
    Sentirse desanimado o triste cada tanto es normal. Y todos nos sentimos ansiosos de vez en cuando; es una respuesta normal a las situaciones estresantes. Sin embargo, los sentimientos constantes e intensos de ansiedad y depresión pueden ser un signo de un trastorno de salud mental de fondo.
  </p>

</section>

<!-- ¿Cuál es la diferencia entre ansiedad y depresión? -->
<section class="knowledge">
  <div class="knowledge__container containere">
      <div class="knowledege__texts">
          <h2 class="subtitle">¿Cuál es la diferencia entre ansiedad y depresión?</h2>
          <p class="knowledge__paragraph">La mayor diferencia es que la ansiedad se caracteriza por el miedo y la angustia constante, mientras que la depresión suele ser un trastorno en el que la persona se siente deprimida y no tiene motivación ni interés para realizar tareas que antes eran satisfactorias.</p>
          <ul class="text-left">
            <li>Factores desencadenantes comunes relacionados con los efectos de la ansiedad y la depresión incluyen los cambios en la vida, la muerte, la pérdida, los traumas, el aislamiento y otras situaciones estresantes. </li>
        </ul>
        </div>
      <figure class="knowledge__picture">
          <img src="./images/pexels-kat-smith-736843.jpg" class="knowledge__img">
      </figure>
  </div>
</section>

  <!--Ansiedad y depresión, dos enfermedades de nuestro tiempo -->
  <section class="contenedor sobre-nosotros">
    <h2 class="titulo">Ansiedad y depresión, dos enfermedades de nuestro tiempo</h2>
    <div class="contenedor-sobre-nosotros">
        <img src="/images/pexels-anna-shvets-4226215.jpg" alt="" class="imagen-about-us">
        <div class="contenido-textos">
          <br>
            <h3></h3>
            <p>En la actualidad, estos trastornos se diagnostican precozmente, lo que favorece el tratamiento en un rango edad en la que los jóvenes se enfrentan a muchos cambios</p>
            <p>La salud mental es importante. De vez en cuando, todo el mundo se siente triste o ansioso. Pero si una persona tiene sentimientos intensos o prolongados de ansiedad y depresión, u otros síntomas como alucinaciones, entumecimiento u hormigueo, y cambios en el apetito, el peso o los patrones de sueño que duran dos semanas o más e interfieren en su vida cotidiana, puede estar sufriendo un trastorno de salud mental</p>
        </div>
    </div>
</section>

<br>
<div class="text-center txtCategora ">
  <h2>Cosas que debes saber</h2>
<br>

<!-- Galerias -->
<section id="portafolio" class="row g-0 py-3  ">
  <div class="col-lg-4 col-sm-6 px-0">
      <div class="portafolio-item">
          <img src="/images/p.jpg" alt="">
          <div class="portafolio-overlay">
              <h1 class="font-weight-bold">La depresión es una afección real.
              </h1>
          </div>
      </div>
  </div>
  <div class="col-lg-4 col-sm-6 px-0">
      <div class="portafolio-item">
          <img src="/images/pexels-energepiccom-313690 (9).jpg" alt="">
          <div class="portafolio-overlay">
              <h1 class="font-weight-bold">La depresión puede doler, ¡literalmente!</h1>
          </div>
      </div>
  </div>
  <div class="col-lg-4 col-sm-6 px-0">
      <div class="portafolio-item ">
          <img src="/images/pexels-shvets-production-7176325 (1).jpg" alt="">
          <div class="portafolio-overlay">
              <h1 class="font-weight-bold">La depresión y la ansiedad se puede tratar.</h1>
          </div>
      </div>
  </div>

</section>

<!-- INFORMACIÓN SABIAS QUE..? -->
<section class="section-1">
  <div class="container text-center">
      <div class="row">
          <div class="col-md-6 col-12">
              <div class="pray">
                  <img src="/images/pexels-kindel-media-8172277.jpg" alt="Pray" class="" />
              </div>
          </div>
          <div class="col-md-6 col-12">
              <div class="panel text-left">
                  <h1>¿Sabías que..?</h1>
                
                    <ul class="text-left">
                      <li>264 millones de personas en todo el mundo viven con depresión
                      </li>
                      <li>En 2017, alrededor de 17.3 millones de adultos mayores de 18 años en México habían experimentado al menos un episodio depresivo mayor en el último año (6.7% de los adultos en México)
                      </li>
                      <li>  La depresión es la causa de discapacidad en México entre las personas de 15 a 44 años.</li>
                      <li> Alrededor del 39% de los adultos con episodios depresivos mayores no recibieron tratamiento</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>
       
<!-- TELEFONOS DE AYUDA -->
    <section id="team" class="seccion section-bg mt-5 mb-5">
        <div class="container">
            <div class="col-12 section-intro ">
              <br>
              <br>
                <h2>Líneas de ayuda en México para la depresión y ansiedad</h2>
                <div class="hline"></div>
                <br>
                <br>
          
            </div>
            <div class=" row text-center ">
                <div class="col-lg-3 col-sm-6 team-member ">
                    <div class=" team-member-img ">
                        <img src="/images/descarga.png " alt=" ">
                    </div>
                    <div class="p-4 ">
                        <h5 class="title-sm mt-3 mb-0  ">Línea de Ayuda Oceánica</h5>
                        <small class=" ">+52 (55) 5615-3333</small>
                        <div class="hline "></div>
                        <p class=" ">https://oceanica.com.mx/
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-member ">
                  <div class=" team-member-img ">
                      <img src="/images/unam.png " alt=" ">
                  </div>
                  <div class="p-4 ">
                      <h5 class="title-sm mt-3 mb-0  ">Atención Psicológica A Distancia UNAM</h5>
                      <small class=" ">+52 55 5025 0855 </small>
                      <div class="hline "></div>
                      <p class=" ">https://www.psicologia.unam.mx/
                      </p>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 team-member ">
                <div class=" team-member-img ">
                    <img src="/images/gob.jpg " alt=" ">
                </div>
                <div class="p-4 ">
                    <h5 class="title-sm mt-3 mb-0  ">Línea De La Vida </h5>
                    <small class=" ">800 911 2000</small>
                    <div class="hline "></div>
                    <p class=" ">https://www.gob.mx/
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 team-member ">
              <div class=" team-member-img ">
                  <img src="/images/help.jpg " alt=" ">
              </div>
              <div class="p-4 ">
                <h5 class="title-sm mt-3 mb-0  ">SAPTEL </h5>
                <small class=" ">(55) 5259-8121  </small>
                <div class="hline "></div>
                <p class=" ">www.saptel.org.mx
                </p>
            </div>
          </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="contenedor-footer">

        </div>
        <h2 class="titulo-final">&copy; Unidad Académica Multidisciplinaria Mante | Tamaulipas</h2>
    </footer>
  





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>