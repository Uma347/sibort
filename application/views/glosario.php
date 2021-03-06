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
                    <h3 class="section-heading text-uppercase">Glosario</h3> 
                </div>
                <div class="row text-center m-4 mt-5 align-items-center">
                    <div class="col-md-6">
                       
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted "></p>
                       
                    </div>
                <table class="table table-sm">
                <thead>
                <tr>
                <th scope="col">Sigla</th>
                <th scope="col">Descripci??n</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-success">CAN</td>
                        <td >Comunidad Andina de Naciones</td>
                        </tr>
                        <tr>
                        <td class="table-success">OMC</td>
                        <td >Organizaci??n Mundial de Comercio</td>
                        </tr>
                        <tr>
                        <td class="table-success">ALADI</td>
                        <td >Asociaci??n Latinoamericana de Integraci??n</td>
                        </tr>
                        </tbody>
                </table>
                <br>
                <table class="table table-sm">
                <thead>
                <tr>
                <th scope="col">Concepto</th>
                <th scope="col">Definici??n</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-info">Reglamento T??cnico</td>
                        <td >Los reglamentos t??cnicos establecen las caracter??sticas de un producto o 
                            en los procesos y m??todos de producci??n conexos. Es obligatorio cumplirlos.
                             En los reglamentos t??cnicos tambi??n se pueden establecer requisitos en 
                             materia de terminolog??a, s??mbolos, envase y embalaje, marcado y etiquetado.</td>
                        </tr>
                        <tr>
                        <td class="table-info">Norma</td>
                        <td >Las normas son documentos aprobados por una instituci??n reconocida responsable 
                            de establecer reglas, directrices o caracter??sticas para los productos o los procesos 
                            y m??todos de producci??n conexos. No son obligatorias. En las normas tambi??n 
                            se pueden establecer requisitos en materia de terminolog??a, s??mbolos, envase 
                            y embalaje, marcado o etiquetado.</td>
                        </tr>
                        <tr>
                        <td class="table-info">Entidad Gestora</td>
                        <td >Entidades nacionales con competencias t??cnicas y responsabilidades 
                            en la elaboraci??n de los documentos 
                            de reglamentaci??n t??cnica en un determinado sector de actividad.</td>
                        </tr>
                        <tr>
                        <td class="table-info">Nueva Notificaci??n</td>
                        <td > Documento empleado para notificar el texto de un reglamento t??cnico 
                            o un procedimiento
                             de evaluaci??n de la conformidad en proyecto (en adelante, 
                             la ???medida notificada???). Si la medida notificada est?? relacionada 
                             con una medida notificada anteriormente (por ejemplo, si 
                             se notifican disposiciones que modifican o completan una medida
                              adoptada, o se notifica una medida que sustituye a otra ya 
                              retirada o derogada), la(s) signatura(s) de la(s) medida(s) 
                              notificada(s) correspondiente(s) deber??(n) indicarse en el 
                              punto 8 de la nueva notificaci??n</td>
                        </tr>
                        <tr>
                        <td class="table-info">Addendum</td>
                        <td >
                        Documento empleado para hacer modificaciones al Proyecto de Reglamento T??cnico. 
                        </td >
                        </tr>
                        <tr>
                        <td class="table-info">Corrigenda</td>
                        <td >
                        Documento empleado para enmendar errores administrativos y tipogr??ficos de poca importancia (que no entra??an ninguna modificaci??n del sentido del contenido)</td >
                        </tr>
                        <tr>
                        <td class="table-info">Revisi??n</td>
                        <td >
                        Documento empleado para indicar que la medida notificada se ha vuelto a redactar sustancialmente antes de su adopci??n o entrada en vigor. Una revisi??n reemplaza la notificaci??n original. Una revisi??n normalmente deber??a abrir un nuevo per??odo de comentarios.
                        </td >
                        </tr>
                        <tr>
                        <td class="table-info">Suplemento</td>
                        <td >
                        Documento empleado para indicar la existencia de traducciones no oficiales de las medidas notificadas
                        </td >
                        </tr>
                        </tbody>
                </table>



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

