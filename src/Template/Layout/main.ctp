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


$cakeDescription = 'Mundo Forestal';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">
        <img src="/img/logoGreen.png" id="logo" >
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menú
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item i">
          <a class="nav-link" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/nosotros">Quiénes Somos</a>
        </li>
        <li class="nav-item dropdown" id="albu">
          <a class="nav-link" role="button" data-toggle="dropdown">Álbumes</a>
          <ul  class="dropdown-menu" style="border:none; margin-left:20px;" >
          <?php foreach ($albums as $album){

            echo "<li id='ddmenu'class='nav-link'><a  href='/album/".$album->Name."'>".$album->Name."</a></li>";

          } ?>

        </ul>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="/terminologia">Terminología</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mantenimiento">Consultorio del Dr.Arbol</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/nosotros#contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
<style media="screen">

  a:hover{
    text-decoration:none;
    color:white;
}

  #ddmenu:hover
  {
    background-color: green;
  }
  #ddmenu:hover a{

   color:white;
 }

</style>

    <?= $this->fetch('content') ?>

<!-- Footer -->
<footer id="footer">
<hr id="separator">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <p class="copyright text-muted">Copyright &copy; Mundo Forestal 2017</p>
      </div>
    </div>
  </div>
</footer>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<!--   <script src="js/clean-blog.min.js"></script>-->

</body>
</html>
