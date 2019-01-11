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
    <?php
      echo $this->Html->css('bootstrap.min.css');
      echo $this->Html->css('clean-blog.css');
      echo $this->Html->css('lightbox.css');
      echo $this->Html->css('terminologia.css');

    ?>
    <!-- Bootstrap core CSS
    <link href="webroot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    Custom styles for this template
    <link href="webroot/css/clean-blog.min.css" rel="stylesheet">
    -->
</head>

<body onload="myFunction()">

  <!-- Navigation -->


  <!-- Page Header -->
  <header class="masthead" id="head" style="background-image: url('img/Portadas/(Portada)_Terminologia.jpg' ); background-size: 100% 80%; background-repeat: no-repeat; background-position-y: bottom;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1></h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">

    <br>
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-4" style="z-index: 0;">
        <form class="" action="" method="post" autocomplete="off">
          <div class="input-group mb-3">
                    <input id="search" type="text" name="search" class="form-control" placeholder="Ingrese su búsqueda" aria-label="Ingrese su búsqueda">

          </div>

        </form>
        <div class="result">
            <span id="show" hidden></span>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 mb-2">
        <span id="spinner" hidden> <img src="../../img/Ripple-1s-200px.gif" alt="" id="spin"> </span>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 mb-3">

      </div>
      <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
      <div class="col-lg-6 col-md-6 mb-6 col-xs-4" id="abc">
        <a href="#lA" class="btns">A</a return false> <a href="#lB" class="btns">B</a> <a href="#lC" class="btns">C</a> <a href="#lD" class="btns">D</a> <a href="#lE" class="btns">E</a>
        <a href="#lF" class="btns">F</a> <a href="#lG" class="btns">G</a> <a href="#lH" class="btns">H</a> <a href="#lI" class="btns">I</a> <a href="#lJ" class="btns">J</a>
        <a href="#lK" class="btns">K</a> <a href="#lL" class="btns">L</a> <a href="#lM" class="btns">M</a> <a href="#lN" class="btns">N</a> <a href="#lÑ" class="btns">Ñ</a>
        <a href="#lO" class="btns">O</a> <a href="#lP" class="btns">P</a> <a href="#lQ" class="btns">Q</a> <a href="#lR" class="btns">R</a> <a href="#lS" class="btns">S</a>
        <a href="#lT" class="btns">T</a> <a href="#lU" class="btns">U</a> <a href="#lV" class="btns">V</a> <a href="#lW" class="btns">W</a> <a href="#lX" class="btns">X</a>
        <a href="#lY" class="btns">Y</a> <a href="#lZ" class="btns">Z</a>
      </div>

       <div class="col-lg-3 col-md-3 mb-3">

       </div>
    </div>
    <div class="row">

      <div class="col-lg-12 col-md-12 mb-12" id="termsC">
        <div class="terms">
            <?php include '_terms.php'; ?>
        </div>
      </div>

    </div>
  </div>

  <!-- End content-->


      </div>

        </div>
        </div>
  <hr>

  <!-- Footer -->
  <?php echo $this->render("../Commons/_navbar"); ?>

  <!-- Bootstrap core JavaScript -->
<!--  <script src="webroot/js/jquery/jquery.min.js"></script>
  <script src="webroot/js/popper/popper.min.js"></script>
  <script src="webroot/js/bootstrap/js/bootstrap.min.js"></script> -->

  <!-- Custom scripts for this template -->
  <?php
  echo $this->Html->script('jquery.js');
  echo $this->Html->script('jquery-ui.js');
  echo $this->Html->script('popper.min.js');
  echo $this->Html->script('bootstrap.min.js');
  echo $this->Html->script('liveSearchT.js');
  echo $this->Html->script('lightbox.js');

  ?>

  <!--<script src="webroot/js/clean-blog.min.js"></script>-->


</body >
</html>
