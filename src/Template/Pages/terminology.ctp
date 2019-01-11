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
    <style media="screen">

        #show
        {
          position:absolute;
          z-index: 1000;
          background-color: white;
          margin-top: -4%;

        }
        .liveSearchLi a:hover
        {
          color:green;
        }
        .liveSearchLi
        {
          list-style: none;
          width: 100%;
          padding-top: 2%;


        }

        .treeview
        {
          width: 2%;
          height: 2%;
          margin-bottom: 1%;
          margin-right: 1%;
        }


        #liveSearchLu
        {
          list-style: none;
          width: 100%;
          height: 100%;
          border: none;






        }
        .visible
        {

          -moz-transition: 0.2s ease;
          -webkit-transition: 0.2s ease;
          -o-transition:  0.2s ease;
          transition:  0.2s ease;
        }

        .negRot {
          transform: rotate(-90deg);
          -moz-transition: 0.2s ease;
          -webkit-transition: 0.2s ease;
          -o-transition:  0.2s ease;
          transition:  0.2s ease;
        }
        .posRot {
          transform: rotate(0deg);
          -moz-transition:  0.2s ease;
          -webkit-transition:  0.2s ease;
          -o-transition:  0.2s ease;
          transition:  0.2s ease;
        }

        .result
        {
          min-height: 200%;
          max-height: 200%;
          overflow-y: hidden;
        }
        #show
        {
          width: 92%;
          max-height: 400%;
          overflow-y:scroll;
          clear: both;
          border: 1px solid rgba(0,0,0,.15);
          border-radius: 5px;




        }
        #show::-webkit-scrollbar
        {
          width: 7px;

          background-color: #F5F5F5;
          border-radius: 20px;
        }
        #show::-webkit-scrollbar-track {
        background-color: white;
        border-radius: 20px;
        }

        #show::-webkit-scrollbar-thumb {
            border-radius: 20px;
            background:green;
        }
        #search
        {
          border-radius: 20px;
        }
        #spin{

          width: 30%;
          height: auto;
        }
        #spinner
        {
            display: block;
            margin-top: -6%;
        }
        .letter
        {
          color: green;
        }
        html {
          scroll-behavior: smooth;
      }

      #termsC
      {
        overflow-y: scroll;
        height:500px;


        scroll-behavior: smooth;

      }
      #terms
      {
        height: 75%;

      }


      #termsC::-webkit-scrollbar
      {
        width: 7px;
        background-color: #F5F5F5;

      }
      #termsC::-webkit-scrollbar-track {

      background-color: white;

      }

      #termsC::-webkit-scrollbar-thumb {


          background:green;
      }
      .card
      {
        border: none;
      }
      #abc
      {
        text-align: center;
        margin-bottom: 5%;
      }
      .items
      {
        text-align: justify;
      }
      .tBody
      {
        margin-left: 5%;
      }
      .dText
      {

      }


      .tImg
      {
        width: 50%;
        height: 50%;

      }
      .tDesc
      {
        margin-left: 42%;
        width: 60%;
        height: 50%;



      }
      .zoomImg
      {
        width: 80%;
        height: 80%;
        max-width:100%;
        max-height:100%;
        display:inline-block;
        float:left;
        padding-left:0.5%;
        padding-right: 0.5%;
        padding-bottom: 0.5%;
        padding-top: 0.5%;
        -webkit-transition: ease 0.5s;
        transition: ease 0.5s;
        background-color: green;


      }
      .zoomImg:hover
      {
        box-shadow: 0 0 2px 1px green;
        cursor: zoom-in ;
        -webkit-transition: ease 0.5s;
        transition: ease 0.5s;
      }

@media only screen and (max-width:500px)
{
  .zoomImg
  {
    width: 80%;
    height: 80%;
    max-width:100%;
    max-height:100%;
    display:inline-block;
    float:left;
    padding-left:0.5%;
    padding-right: 0.5%;
    padding-bottom: 0.6%;
    padding-top: 0.6%;
    -webkit-transition: ease 0.5s;
    transition: ease 0.5s;
    background-color: green;


  }
  .card
  {
    border: none;
    margin-left: -20px;
  }
  .tBody
  {
    margin-left: 0%;
  }
  .treeview
  {
    width: 20px;
    height: 20px;
    margin-bottom: 1%;
    margin-right: 1%;
  }
  .tImg
  {
    width: 100%;
    height: 50%;
    display: block;
    margin-left: 25px;

  }
  .tDesc
  {
    margin-top: 200px;
    margin-left: 0%;
    width: 100%;
    height: 50%;



  }
}



    </style>
    <br>
    <div class="row" style="position:relative;">

      <div class="col-lg-4 col-md-6 mb-4">
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
  <footer>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <p class="copyright text-muted">Copyright &copy; Mundo Forestal 2017</p>
        </div>
      </div>
    </div>
  </footer>

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
