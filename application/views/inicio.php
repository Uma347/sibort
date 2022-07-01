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
                <a class="navbar-brand" href="#page-top"><img style="height:3.5rem" src="<?= base_url()?>public/assets/img/navbar-logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav  ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#page-top">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#infosistema">Sobre el sistema</a></li>
                        <li class="nav-item"><a class="nav-link" href="#marcolegal">Marco Legal</a></li>
                        <li class="nav-item"><a class="nav-link" href="#enlaces">Enlaces</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Reglamentos Tecnicos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Ingresar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header style='background-image: url(<?= base_url("public/assets/img/header-bg.png")?>);' class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenido</div>
                <div class="masthead-heading text-uppercase"><?=$nombresistema?></div>
                <a class="btn btn-outline-success btn-xl text-uppercase mb-2" href="<?= base_url()?>/inicio/glosario">Glosario</a>
                <a class="btn btn-outline-info btn-xl text-uppercase mb-2" href="<?= base_url()?>/inicio/pregfrec">Preguntas Frecuentes</a>
                <a class="btn btn-outline-danger btn-xl text-uppercase mb-2" href="#infosistema">Registrarse</a>
            </div> 
        </header>
        <!-- Informacion Sistema-->
        <section class="page-section" id="infosistema">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Sobre el sistema</h3> 
                </div>
                <div class="row text-center m-4 mt-5 align-items-center">
                    <div class="col-md-6">
                        <img classs="img-fluid " style="max-width: 70%; height: auto;" src="<?= base_url("public/assets/img/mapaBolivia.png")?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted "><?=$lsistema?></p>
                       
                    </div>

                </div>
            </div>
        </section>
        <!-- Marco Legal-->
        <section class="page-section bg-light" id="marcolegal">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Marco Legal</h3>
                    <p class="section-subheading text-muted"><?=$lmarcolegal?></p>
                </div>
                <div class="row justify-content-around">
                <?php
                         for ($i = 0; $i < $nrodocNormas; $i++) {
                            $num="portfolioModal".$i;
                ?>
                    <div class="col-lg-3 col-sm-4 col-4 m-3">
                   
                        <!-- Portfolio item i-->
                        <div class="portfolio-item ">
                            <a class="portfolio-link "data-bs-toggle="modal" href="#<?=$num?>">
                            <div class="row justify-content-center mb-4">
                            <img  class="img-fluid rounded-circle"style="width:60%; heigth:auto" src="<?= base_url()?>public/assets/img/doc/<?=$docsmarcolegal[$i]["img"]?>" alt="..." />
                            </div>  
                            </a>
                            <div class="portfolio-caption ">
                                <div class="portfolio-caption-heading text-center"><?= $docsmarcolegal[$i]["name"];?></div>
                            </div>
                        </div>
                    </div>
    
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- Enlaces -->
                <section class="page-section " id="enlaces">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Enlaces Relacionados</h3>
                    <p class="section-subheading text-muted"> </p>
                </div>
                <div class="row justify-content-around">
                <?php
                         for ($i = 0; $i < $nroEnlaces; $i++) {
                            $num="portfolioModal".$i;
                ?>
                    <div class="col-lg-2 col-sm-4 col-4 m-3">
                   
                        <!-- Portfolio item i-->
                        <div class="portfolio-item ">
                            <a class="portfolio-link " href="<?= $enlaces[$i]["ubicacion"];?>" target="_blank">
                            <div class="row justify-content-center mb-4">
                            <img  class="img-fluid rounded-circle"style="heigth:auto; width:90%;" src="<?= base_url()?>public/assets/img/doc/<?=$enlaces[$i]["img"]?>" alt="..." />
                            </div>  
                            </a>

                        </div>
                    </div>
    
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- Enlaces -->


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

        <!-- Portfolio item 1 modal popup-->
        <?php
        for ($i = 0; $i < $nrodocNormas; $i++) {
            $num="portfolioModal".$i;
            
        ?>
        <div class="portfolio-modal modal fade" id="<?= $num?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?= base_url()?>public/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <embed src="<?= base_url()?>public/assets/doc/<?=$docsmarcolegal[$i]["ubicacion"]?>" type="application/pdf" width="100%" height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php    
        }
        ?>
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

