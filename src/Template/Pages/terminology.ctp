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
      echo $this->Html->css('terminolgoy.css');
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
      <div class="card">

        <ul class="list-inline" id="myList">

          <?php foreach ($contents as $content):?>

          <li class="list-inline-item">
            <div class="card" style="width: 17rem;">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <?= $this->Html->link(__($content->Name), ['action' => 'detail', $content->IdContent]) ?>
                </h4>
                <h5>Fotos de Bosques</h5>
              </div>
            </div>
          </li>

          <?php  endforeach;?>

        </ul>
      </div>

    </div>
  </div>

  <!-- End content-->

        <div class="paginator" style="margin-left:430px;">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
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
  echo $this->Html->script('jquery.min.js');
  echo $this->Html->script('popper.min.js');
  echo $this->Html->script('bootstrap.min.js');
  echo $this->Html->script('clean-blog.js');
  echo $this->Html->script('liveSearchT.js');

  ?>
  <!--<script src="webroot/js/clean-blog.min.js"></script>-->


</body>
</html>
