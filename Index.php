<!DOCTYPE html>
<html lang="en">

<head>
  <title>TitanGYM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />

  <link rel="shortcut icon" href="ftco-32x32.png">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style2.css">




</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

<!-- menú -->

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="index.php">CAFMY </a></div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Inicio</a></li>
                <li><a href="#calculadora" class="nav-link">Calculadora</a></li>
                <li><a href="#mantente-sano" class="nav-link">Mantente sano</a></li>
                <li><a href="#classes-section" class="nav-link">Clases</a></li>
                <li><a href="#trainer-section" class="nav-link">Entrenadores</a></li>
                <li><a href="#services-section" class="nav-link">Servicios</a></li>
               <li><a href="#contact-section" class="nav-link">Contáctenos</a></li>
               
              
               
                <li><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ingresar</button> </li>

                
                
                

               
                
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      </div>

    </header>

    <!-- final menú-->

    <!-- enlace vídeo de parallax-->

    <a id="bgndVideo" class="player"
      data-property="{videoURL:'https://www.youtube.com/watch?v=w-cRWOjlk8c',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:255, stopAt: 271, opacity:1}">
    </a>
    <!-- final enlace vídeo -->


    
    <div class="intro-section" id="home-section" style="background-color: #ccc;">

      
    </div>
     




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INICIAR SESIÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="php/validar.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="recipient-name" name="usuario">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" id="recipient-name" name="contrasena">
          </div>
          <div class="modal-footer">
        <button type="submit" name="enviar" class="btn btn-primary" value="Ingresar">Ingresar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
        </form>
      </div>
      </div>
  </div>
</div>
   


   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="php/validar.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre(s):</label>
            <input type="text" class="form-control" id="recipient-name" name="nombre">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido(s):</label>
            <input type="text" class="form-control" id="recipient-name" name="apellido">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo de documento:</label>
            <input type="passwo" class="form-control" id="recipient-name" name="apellido">
          </div>
          <div class="modal-footer">
        <button type="submit" name="enviar" class="btn btn-primary" value="Ingresar">Ingresar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
        </form>
      </div>
      </div>
  </div>
</div>

    <!-- final parallax -->


     

    <div class="schedule-wrap">



      <div class="d-md-flex align-items-center">
        <div class="hours mr-md-4 mb-4 mb-lg-0">
          <strong class="d-block">Horario</strong>
          Abierto desde las 5:30am &mdash;
          hasta las 9:00pm.
        </div>
     
      </div>
    </div>
     <div class="site-section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5" id="calculadora" style="margin-top: 0px;">
          <div class="col-md-8 section-heading">
            <span class="subheading">Harris-Bennedit</span>
            <h2 class="heading mb-3">Calculadora</h2>
           
          </div>
        </div>



        <iframe src="https://es.calcuworld.com/calculadora-nutricional/calculadora-de-calorias-harris-benedict/?iframe=1" width="100%" height="400"></iframe>


  

<form name="calc" class="form-horizontal"> 
  <fieldset> 
<div  class="well well-large">
 <div class="form-group">
   
    <label class="col-sm-4 control-label" for="peso">Sexo:</label> 
    
    <div class="col-sm-8">
    <label class="checkbox inline" for="sexo1">
      <input type="radio" checked="" value="M" id="sexo1" name="sexo"> Hombre </label>
  
  <label class="checkbox inline" for="sexo2">
      <input type="radio" value="F" id="sexo2" name="sexo"> Mujer </label>
    </div>
  </div>
 <div class="form-group">
    <label for="peso" class="col-sm-4 control-label">Peso:</label> 
    <div class="col-sm-8">
    <input maxlength="5" type="text" class="span2" id="peso" name="peso"> 
    <label class="checkbox inline"  for="tipopeso1" class="noprompt"><input type="radio" checked="" value="K" id="tipopeso1" name="tipopeso"> Kilos</label> 
    <label class="checkbox inline"  for="tipopeso2" class="noprompt"><input type="radio" value="L" id="tipopeso2" name="tipopeso"> Libras</label> 
    </div>
  </div>
 <div class="form-group">
    <label for="estatura" class="col-sm-4 control-label">Estatura:</label> 
    <div class="col-sm-8">
    <div class="input-group">
    <input maxlength="3" id="estatura" type="text" class="span2 form-control" name="estatura"> 
    <div class="input-group-addon">cm</div> 
    </div>
    </div>
  </div>
   <div class="form-group"> 
    <label for="edad" class="col-sm-4 control-label">Edad:</label> 
    <div class="col-sm-8">
    <div class="input-group">
    <input maxlength="2" type="text" class="span2 form-control" id="edad" name="edad"> 
    <div class="input-group-addon">años</div>
    </div>
    </div> 
  </div>
 <div class="form-group"> 
    <label for="actividad" class="col-sm-4 control-label">Nivel de actividad:</label> 
    <div class="col-sm-8">
    <select id="actividad" size="1" name="actividad"> 
      <option selected="true" value="1.2">Sedentario</option> 
      <option value="1.375">Actividad ligera</option> 
      <option value="1.55">Actividad moderada</option> 
      <option value="1.725">Actividad intensa</option> 
      <option value="1.9">Actividad muy intensa</option> 
    </select>   </div> </div>
  <div align="center"> 
    <span type="button" name="Button1" class="btn btn-success" id="Button1" onclick="calcIt();return false;" value="Calcular">Calcular </span>
</div> 
</div>

  <div class="alert alert-success">
  <div> 
    <label>Metabolismo basal:</label> 
    <span id="tmb" style="margin-left: .5em; font-size:18px; font-weight:bold;"></span>
  </div>
 <div> 
    <label>Calorías necesarias para mantener el peso:</label> 
    <span id="mantener" style="margin-left: .5em; font-size:18px; font-weight:bold;"></span>
  </div>
  <div>
    <label>Calorías para adelgazar:</label> 
    <span id="quemar" style="margin-left: .5em; font-size:18px; font-weight:bold;"></span>
  </div>
  <div>
    <label>Calorías para subir de peso:</label> 
    <span id="subir" style="margin-left: .5em; font-size:18px; font-weight:bold;"></span>
  </div> 
  </div>
  </fieldset> 
</form>

 <a href="http://www.biotrendies.com/calcular-calorias?utm_source=calcuworld.com&utm_medium=Network&utm_campaign=post_button" target="_blank" style="margin: 0 0 10px; width:100%;" class="btn btn-info">Ir a la Calculadora de CALORÍAS por ALIMENTO</a> 
        
            
 <script>
  jQuery("div.related-posts ul li").addClass("col-xs-12 col-md-4");
  jQuery("div.related-posts ul li a").addClass("bg-links");
  //jQuery("div.related-posts ul li a").addClass("bg-links-related");
  jQuery("ins").css('background-color','white');
  /* jQuery("div.sd-social-icon-text").addClass("bg-links-related"); */

  // Si no estamos en la calculadora Santoral-dia aplica bg-links
  if( !jQuery('.calc-santoral-dia').length ) {
     
  }
 </script>
</iframe>


    <div class="site-section" >
      <div class="container">

        <div class="row justify-content-center text-center mb-5" id="mantente-sano">
          <div class="col-md-8 section-heading" style="margin-top: 80px;">
            <span class="subheading" >Mantente sano</span>
            <h2 class="heading mb-3">Consigue el cuerpo perfecto</h2>
             <p>Lo más importante es mantener el hábito de entrenar
Así que ya sabes, si no te apetece y prefieres dejarlo para otro día, sé fuerte y ve a entrenar ya mismo, no lo dejes escapar.

Porque si dejas escapar esa sesión de entrenamiento, no sólo habrás perdido esa sesión, sino que habrás debilitado tu hábito de ir a entrenar, que es lo más importante de todo.</p>
           
          </div>
        </div>

        <!-- Slider -->
        <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
          <div class="slide">
            <div class="ftco-feature-1">
              <span><img src="images/saludable.png" style="height: 100px; width: 100px; margin-left: 120px;"></span>
              <div class="ftco-feature-1-text">
                <h2>Vive sano</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>
                
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span><img src="images/equipo.png" style="height: 100px; width: 100px; margin-left: 120px;"></span>
              <div class="ftco-feature-1-text">
                <h2>Trabajo en equipo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
               
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span><img src="images/gimnasio.png" style="height: 100px; width: 100px; margin-left: 120px;"></span>
              <div class="ftco-feature-1-text">
                <h2>Gimnasio</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
              
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span><img src="images/comida.png" style="height: 100px; width: 100px; margin-left: 120px;"></span>
              <div class="ftco-feature-1-text">
                <h2>Comer sano</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span><img src="images/limonada.png" style="height: 100px; width: 100px; margin-left: 120px;"></span>
              <div class="ftco-feature-1-text">
                <h2>Jugos de frutas</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          
          <div class="slide">
            <div class="ftco-feature-1">
              <span><img src="images/mental.png" style="height: 100px; width: 100px; margin-left: 120px;"></span>
              <div class="ftco-feature-1-text">
                <h2>Cuerpo y mente</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="bgimg" style="background-image: url('images/bg_2.jpg');"  data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Obtén el cuerpo deseado</h2>
            <p class="lead mx-auto desc mb-5">Da siempre lo mejor de ti. Lo que siembras hoy dara frutos mañana (Og Mandino)</p>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section" id="classes-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <span class="subheading">Clases grupales</span>
            <h2 class="heading mb-3">Clases</h2>
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="class-item d-flex align-items-center">
              <a href="" class="class-item-thumbnail">
                <img src="images/zumba.png" alt="">
              </a>
              <div class="class-item-text">
                
                <h2><a href="#">Aerobicos</a></h2>
                <span> Por José Daniel</span>
                <span>30 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href=" "  class="class-item-thumbnail">
                <img src="images/cardio.png" alt="">

              
              </a>
              <div class="class-item-text">
                
                <h2><a href="#">Cardio</a></h2>
                <span>Por Melinda Gutierrez</span>,
                <span>20 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="" class="class-item-thumbnail">
                <img src="images/banco.png" alt="Free website template by Free-Template.co">
              </a>
              <div class="class-item-text">
                
                <h2><a href="#">Coordinación</a></h2>
                <span>Por Carolina Guzman</span>,
                <span>30 minutos</span>
              </div>
            </div>
            
        
            
           
          </div>
          <div class="col-lg-6">
            <div class="class-item d-flex align-items-center">
              <a href="" class="class-item-thumbnail">
                <img src="images/peso.png" alt="Free website template by Free-Template.co">
              </a>
              <div class="class-item-text">
                
                <h2><a href="#">Resistencia</a></h2>
                <span>Por José David</span>,
                <span>40 minutos</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="" class="class-item-thumbnail">
                <img src="images/tonificar.png" alt="Free website template by Free-Template.co">
              </a>
              <div class="class-item-text">
                
                <h2><a href="#">Tonificación</a></h2>
                <span>Por José Daniel</span>,
                <span>45 minutos</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="" class="class-item-thumbnail">
                <img src="images/yoga.png" alt="Free website template by Free-Template.co">
              </a>
              <div class="class-item-text">
                
                <h2><a href="#">Flexibilidad</a></h2>
                <span>Por José Daniel</span>,
                <span>30 minutos</span>
              </div>
            </div>
            
   

          </div>
        </div>
      </div>
    </div>

    <div class="bgimg" style="background-image: url('images/bg_3.jpg');"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Contar los pasos</h2>
            <p class="lead mx-auto desc mb-5">La motivación es lo que te pone en marcha, y el hábito es lo que hace que sigas. (Jym Ryun)
              </p>
          </div>
        </div>
      </div>
    </div>

    

    
    
    <div class="site-section" id="trainer-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
          <div class="col-md-8  section-heading">
            <span class="subheading">Entrenador</span>
            <h2 class="heading mb-3">Nuestros entrenadores</h2>
            
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
            <div class="person">
              <img src="images/usuario.png" alt="Free website template by Free-Template.co" class="img-fluid">
              <h3>José Daniel</h3>
              <p class="position">Entrenador</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="person">
              <img src="images/mujer.png" alt="Free website template by Free-Template.co" class="img-fluid">
              <h3>Melinda Gutierrez</h3>
              <p class="position">Entrenador</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="person">
              <img src="images/usuario.png" alt="Free website template by Free-Template.co" class="img-fluid">
              <h3>Matías López</h3>
              <p class="position">Entrenador</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="person">
              <img src="images/mujer.png" alt="Free website template by Free-Template.co" class="img-fluid">
              <h3>Carolina Guzman</h3>
              <p class="position">Entrenador</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        
        </div>
      </div>
    </div>

    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
          <div class="col-md-8  section-heading">
            <span class="subheading">Servicios saludables</span>
            <h2 class="heading mb-3">Servicios</h2>
           
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
            <div class="ftco-feature-1">
              <span> <img src="images/resistencia.png" ></span>
              <div class="ftco-feature-1-text">
                <h2>Estar en forma</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="ftco-feature-1">
              <span><img src="images/mano.png"></span>
              <div class="ftco-feature-1-text">
                <h2>Entrenamiento personalizado</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="ftco-feature-1">
              <span><img src="images/caminadora.png"></span>
              <div class="ftco-feature-1-text">
                <h2>Clases colectivas</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
            <div class="ftco-feature-1">
              <span><img src="images/bienestar.png"></span>
              <div class="ftco-feature-1-text">
                <h2>Fisioterapia</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="ftco-feature-1">
              <span><img src="images/bicicleta.png"></span>
              <div class="ftco-feature-1-text">
                <h2>Entrenamiento funcional</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="ftco-feature-1">
              <span><img src="images/cerebro.png"></span>
              <div class="ftco-feature-1-text">
                <h2>Actividades cuerpo-mente</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                  texts.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light contact-wrap" id="contact-section">
      <div class="container">
        
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <span class="subheading">Entra en contacto</span>
            <h2 class="heading mb-3">Contáctenos</h2>
           
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-7">
            <form method="post" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Nombres">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Apellidos">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Tema">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Correo electrónico">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10"
                    placeholder="Escribe tu mensaje aquí"></textarea>
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-6">
    
                  <input type="submit" class="btn  btn-info  py-3 px-5 btn-block" value="Enviar mensaje">
                </div>
              </div>
    
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="schedule-wrap2 clearfix">
      <div class="d-md-flex align-items-center">
        <div class="hours mr-md-4 mb-4 mb-lg-0">
          <strong class="d-block">Horario</strong>
          Abierto desde las 7:30am &mdash;
          hasta las 9:00pm
        </div>
        <div class=" btn-dangercta ml-auto ">
         <a href="#contact-section" class="btn-danger smoothscroll  d-flex  d-md-flex  align-items-center  btn">
            <span class="mx-auto ">  <span>Contáctenos</span> <span class="arrow icon-keyboard_arrow_right "></span></span>
          </a>
          </a>
        </div>
      </div>
    </div>

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-dark">Acerca de Gimnasio</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. </p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3 class="text-dark">Enlaces</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section">Inicio</a></li>
              <li><a href="#classes-section">Clases</a></li>
              <li><a href="#trainer-section">Entrenador</a></li>
              <li><a href="#services-section">Servicios</a></li>
              <li><a href="#contact-section">Contáctenos</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3 class="text-dark">Contáctenos</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <form action="#">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Mensaje">
                <input type="submit" class=" btn btn-info rounded-0" value="Enviar">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
              <p class="copyright"><small>&copy;
                  <script>document.write(new Date().getFullYear());</script> Gimnasio. All Rights Reserved. Design by <a
                    href="https://free-template.co" target="_blank">Free-Template.co</a></small></p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->



  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>