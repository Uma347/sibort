<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIBORT</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url()?>public/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url()?>public/assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url()?>#page-top"><img style="height:3.5rem" src="<?= base_url()?>public/assets/img/navbar-logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav  ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url()?>#page-top">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url()?>#infosistema">Sobre el sistema</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url()?>#marcolegal">Marco Legal</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url()?>#enlaces">Enlaces</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url()?>#team">Reglamentos Tecnicos</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url()?>#contact">Ingresar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Informacion Sistema-->
        <br><br>
        <section class="page-section" id="glosario">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Preguntas Frecuentes</h3> 
                </div>
                <div class="row text-center m-4 mt-5 align-items-center">
                  
                
                
                <div class="container-fluid">
                    <div class="row ">
                        <div style="border-radius: 25% 10%;" class="col-md-5 bg-info p-4 m-2"  >
                            <h4>¿Por qué debo crear una cuenta?</h4> 
                             <p>Al crear una cuenta podra observar y comentar los proyecctos  de reglamentacion técnica, su opinión será tomada en cuenta</p>
                        </div>
                        <div style="border-radius: 25% 10%; "class="col-md-5 bg-primary p-4 m-2">
                            <h4>¿Qué tipo de información puedo encontrar en la página? </h4> 
                            <p>Usted podrá encontrar reglamentos tecnicos vigentes listos para ser visualizados y descargados, para lo cual no necesita crear una cuenta, 
                                también podrá encontrar enlaces relacionados de paginas externas.</p>
                         </div>
                        <div style="border-radius: 25% 10%; background-color: rgb(176, 0, 211);" class="col-md-5 p-4 m-2">
                            <h4>¿Quién está a cargo del sistema web?</h4> 
                            <p>La entidad a cargo del sistema es el Viceministerio de producción a pequeña y gran escala.</p>
                        </div>
                        <div style="border-radius: 25% 10%; background-color: rgb(86, 184, 47);" class="col-md-5  p-4 m-2">
                            <h4>¿Quiénes pueden comentar los reglamentos técnicos?</h4> 
                            <p>Sólo los usuarios registrados</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        

        <!-- Footer-->
        <footer class="bg-dark text-center text-white">
            <div class= "container p-4">
                <div class="row align-items-center">
                <div class="col-xs-12 col-md-12">
		   <ul class="list-unstyled mb-0">
 			<li>
			Direccion: Av 16 de julio, Edif Correos piso 16
  			</li>
  			<li>
   			Email: ejemplo@produccion.gob.bo
  			</li>
  			<li>
  			Telefonos: 2XXXXXX- 2XXXXXX
  			</li>
		</ul>
		</div>
                </div>
            </div>
        </footer>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url()?>public/assets/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

