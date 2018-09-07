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
      echo $this->Html->css('clean-blog.min.css');
    ?>

    <!-- Bootstrap core CSS
    <link href="webroot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    Custom styles for this template
    <link href="webroot/css/clean-blog.min.css" rel="stylesheet">
    -->
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Mundo Forestal</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Agricultura</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Consultorio del Dr.Arbol</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('/img/tree.jpg'); -webkit-filter: grayscale(50%); ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2><?= $album->Name ?></h2>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>




  <!-- Main Content -->
  <div class="container">

    <div class="row">
      <form class="" action="/pages/buscar" method="post">
        <div class="input-group mb-3">
    <input id="sb" type="text" class="form-control" placeholder="Ingrese su búsqueda" aria-label="Ingrese su búsqueda" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-outline-success" type="button">Buscar</button>
    </div>
  </div>
      </form>
    </div>

    <div class="row">

      <?php foreach ($contentsByAlbum as $contentA):?>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <?php foreach($Reso as $img):?>

          <?php if ($img == null) {
              echo "No Tengo imagen";
              break;
          }elseif ($img[0]['IdContent'] == $contentA->IdContent) {

         echo "<a href='#'><img  style=' max-width:100%;
max-height:100%; border-radius:2px;'src='/".$img[0]['Resource']."' alt='test' ></a>";

                break;
          }


          ?>

          <?php endforeach;?>
          <div class="card-body">
            <h4 class="card-title" style="text-align:center;">
              <?= $this->Html->link(__($contentA->content->Name), ['action' => 'detail', $contentA->IdContent]) ?>
            </h4>
            <h5></h5>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>

      <?php  endforeach;?>

    </div>
  </div>

  <!-- End content-->
<div class="container">


        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="paginator">
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

        </div>
      </div>

        </div>
        </div>
  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
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
  echo $this->Html->script('jquery.min.js');

  echo $this->Html->script('popper.min.js');
  echo $this->Html->script('bootstrap.min.js');
  echo $this->Html->script('clean-blog.min.js');
  ?>
  <script>
  $(document).ready(function(){
    load_data();
    function load_data(query)
    {
      $.ajax({
        url:"../pages/detail",
        method:"post",
        data:{query:query},
        success:function(data)
        {
          $('#result').html(data);
        }
      });
    }

    $('#sb').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
        load_data(search);
      }
      else
      {
        load_data();
      }
    });
  });
  </script>
  <!--<script src="webroot/js/clean-blog.min.js"></script>-->

</body>
</html>
