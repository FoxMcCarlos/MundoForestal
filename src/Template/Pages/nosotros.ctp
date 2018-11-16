<?php
/**

 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;


?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
            Contacto
    </title>
    <?php
      echo $this->Html->css('bootstrap.min.css');
      echo $this->Html->css('clean-blog.css');
    ?>
    <!-- Bootstrap core CSS
    <link href="webroot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    Custom styles for this template
    <link href="webroot/css/clean-blog.min.css" rel="stylesheet">
    -->
</head>

<body>

  <!-- Navigation -->
  <?php
    $this->layout = 'main';
    ?>

<style media="screen">
  #titulo{
    text-shadow: 4px 4px #33331a;
    color: #eaeae1
  }
</style>

  <!-- Page Header -->
<header>

    <div class="container" align="center">
      <div class="row">
        <div class="col-lg-12 col-md-12 mb-12">

            <h1 style="color:green; align:center;padding-top:5%">Quienes Somos:</h1>


        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container" align="center">
    <div class="row" align="justify">

      <div class="col-lg-12 col-md-12 mb-12">
        <div align="center">
          <h5 style="color:black; align:center; font-style: italic; padding-top:10%"> ¡Hola!  Somos Yamileth Sánchez Vargas y Manuel Víquez Carazo
          <br/>Fundadores y creadores de la empresa familiar
          <br/>MundoForestal.com S.A. </h5></div>
         </div>
         <div class="col-lg-12 col-md-12 mb-12" align="center">
           <img src='/img/nosotros.jpg' alt="nosotros">
         </div>

<div><p style="color:black; font-style: italic;"> MundoForestal.com es una empresa privada ubicada en la ciudad de San José, Costa Rica, absolutamente independiente; creada en junio del año 2000 como respuesta a la demanda de una amplia población de empresarios productores forestales y público en general por satisfacer sus necesidades de información comercial y arbórea. Con el transcurrir de los años hemos logrado posicionarnos como una fuente confiable de información y un respaldo, especialmente para la población urbana, la cual posee grandes necesidades de espacios verdes y por ende del conocimiento que los mismos requieren para su establecimiento y mayor aprovechamiento, así como de los que se dedican a ser finqueros de fin de semana.
<br/>
<br/>En el año 2001 iniciamos el Programa de Educación Forestal con el desarrollo de las Misiones, las cuales generaron un proceso de investigación y recopilación de información sobre las especies forestales presentes en Costa Rica. Unido a ellas se han publicado en forma permanente cientos de boletines informativos, los cuales se envían por medio del correo electrónico a miles de personas en muchos países del mundo, complementándolos con nuestro perfil y página en Facebook.
<br/>
<br/>Utilizamos todos los medios disponibles para lograr llevar el programa a más y más personas cada día. Posteriormente se inició el Consultorio del Dr. Árbol, el cual es un servicio gratuito de asesoría en línea sobre todo lo relacionado al conocimiento, cuidado y manejo de las especies forestales. Por medio del mismo se ofrecen recomendaciones sobre las mejores especies a plantar en determinados sitios, dependiendo de las características del lugar y de los objetivos, así mismo se dan pautas sobre problemas de plagas y enfermedades que afectan a los árboles y en términos generales sobre el manejo y cuidado de los árboles.
<br/>
<br/>MundoForestal.com se concentra  en la continuidad del Programa de Educación Forestal por medio de la atención de consultas personales, telefónicas, por correo electrónico y facebook, asesorías y la generación de información sobre las distintas especies  forestales de Costa Rica, así como  de la alimentación del sitio web, el cual se ha constituido en una fuente de consulta de primer orden para los amantes de los árboles tanto dentro como fuera de Costa Rica.   </p></div>
        <div class="col-lg-12 col-md-12 mb-12" align="center" >
           <h4 style="color:green; align:center; font-style:bold;"> Misión </h4>
           <p style="color:black; font-style: italic;"align="justify">Utilizar todos los medios posibles para crear la conciencia social de que el conocimiento, conservación, reproducción, cultivo y aprovechamiento máximo de todas las especies de árboles, es un   asunto de enormes implicaciones del que dependen la estabilidad planetaria y el desarrollo y supervivencia de los seres humanos y de cientos de miles de especies</p>
        </div>
        <div class="col-lg-12 col-md-12 mb-12" align="center" >
           <h4 style="color:green; align:center; font-style:bold;"> Nuestro Lema </h4>
           <p style="color:#00008B; font-style: italic;">"No podemos cuidar algo si no lo conocemos..."</p>
           <p style="color:black; font-style: italic;">"Porque el más glorioso invento de la Humanidad, no es capaz de ofrecer el más simple de los beneficios que brinda un árbol..."  (Manuel Víquez)</p>
        </div>

        <div class="col-lg-12 col-md-12 mb-12">
          <div class="container">
            <h3 id="contacto"class="col-lg-12 col-md-12 mb-12" align="center" style="color:green;padding-top:5%; padding-bottom:5%">Contactenos:</h3>
            <div align="center"><h5 style="color:black;  font-style: italic;">  La Uruca, San José, Costa Rica
                  <br/>Tel.: (506)2296-5638
                  <br/>mundoforestal@elmundoforestal.com
                  <br/>MundoForestal.com S.A. </h5></div>
            <div class="row">

  </div>
 </div>

  <hr>

  <!-- Footer -->


  <!-- Bootstrap core JavaScript -->
<!--  <script src="webroot/js/jquery/jquery.min.js"></script>
  <script src="webroot/js/popper/popper.min.js"></script>
  <script src="webroot/js/bootstrap/js/bootstrap.min.js"></script> -->

  <!-- Custom scripts for this template -->
  <?php
  echo $this->Html->script('jquery.min.js');
  echo $this->Html->script('popper.min.js');
  echo $this->Html->script('bootstrap.min.js');

  ?>
  <!--<script src="webroot/js/clean-blog.min.js"></script>-->

</body>
</html>
