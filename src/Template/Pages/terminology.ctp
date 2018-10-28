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

    ?>
    <!-- Bootstrap core CSS
    <link href="webroot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    Custom styles for this template
    <link href="webroot/css/clean-blog.min.css" rel="stylesheet">
    -->
</head>

<body>

  <!-- Navigation -->


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/tree.jpg'); -webkit-filter: grayscale(50%); ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Terminologia</h1>
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
        .liveSearchLu a:hover
        {
          color:green;
        }
        .liveSearchLu
        {
          list-style: none;
          width: 100%;
          padding-top: 2%;


        }
        #liveSearchLi
        {
          list-style: none;
          width: 100%;
          height: 100%;
          border: none;






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

      }
      #terms
      {
        height: 75%;
      }




    </style>
    <br>
    <div class="row" style="position:relative;">

      <div class="col-lg-4 col-md-6 mb-4">
        <form class="" action="" method="post" autocomplete="off">
          <div class="input-group mb-3">
                    <input id="search" type="text" class="form-control" placeholder="Buscar en este album" aria-label="Ingrese su búsqueda">

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
      <div class="col-lg-6 col-md-6 mb-6" id="abc">
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
    <div class="row" id="termsC">
      <div class="" id="terms">

        <ul class="list-inline" id="myList">

          <?php
          $letter = null;
          $actual = null;
          foreach ($contents as $content):
            $actual =  strtoupper($content->Name);
            if (    preg_match_all("/(^á)+/",$actual) || preg_match_all("/(^Á)+/",$actual)
                 || preg_match_all("/(^é)+/",$actual) || preg_match_all("/(^É)+/",$actual)
                 || preg_match_all("/(^í)+/",$actual) || preg_match_all("/(^Í)+/",$actual)
                 || preg_match_all("/(^ó)+/",$actual) || preg_match_all("/(^Ó)+/",$actual)
                 || preg_match_all("/(^ú)+/",$actual) || preg_match_all("/(^Ú)+/",$actual)
                 || preg_match_all("/(^ü)+/",$actual) || preg_match_all("/(^Ü)+/",$actual)

               )
            {
              $actual = strtoupper(iconv('utf-8','ASCII//IGNORE//TRANSLIT',$content->Name));
               if ($letter != $actual[1]) {


              $letter = $actual[1];
              echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1></section>";

                }

            }elseif (preg_match_all("/^\ñ+/",$actual)  || preg_match_all("/^\Ñ+/",$actual)) {
              if ($letter != substr($actual,0,2)) {

                $letter = substr($actual,0,2);
                echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1></section>";
              }
            }
            else{
                  $actual = strtoupper(iconv('utf-8','ASCII//IGNORE//TRANSLIT',$content->Name[0]));
                   if ($letter != $actual[0]) {

                     $letter = $actual[0];

                     echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1></section>";
                   }
                 }



            ?>

            <hr>

          <li class="list-inline-item">
            <div class="card" style="width: 60rem;">

              <div class="card-body">
                <h4 class="card-title">
                  <?= $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]) ?>
                </h4>
                <h5><i><?= $content->Description ?></i></h5>
              </div>
            </div>
          </li>

          <?php  endforeach;?>

        </ul>
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
  echo $this->Html->script('searchByLetter.js');
  echo $this->Html->script('liveSearchT.js');

  ?>
  <!--<script src="webroot/js/clean-blog.min.js"></script>-->


</body>
</html>
