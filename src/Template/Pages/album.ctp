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
<?php echo $this->render("../Commons/_navbar"); ?>
  <!-- Page Header -->
<?php
  if ($album[0]['Name'] === 'Árboles') {
  echo "<header id='arboles' class='masthead'>";
  }elseif ($album[0]['Name'] === 'Ornamentales') {
  echo "<header id='ornamentales' class='masthead ornamentales'>";
}elseif ($album[0]['Name'] === 'Medicinales') {
  echo "<header id='medicinales' class='masthead medicinales'>";
  }
?>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2><?= $album[0]['Name'] ?></h2>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->
  <div class="container" >

<br>

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
    img {
    pointer-events: none;
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
    .paginator
    {
      margin-top: 10%;
      display: block;
      text-align: center;
      padding-bottom: 5%;
    }
    .pagination
    {

    }
    .pagination li
    {
      margin-right: 2%;
      text-align: center;
      width: 100%;
    }
    .pagination li a
    {
      display:block;
      text-decoration: none;
      width: 60%;
      border-radius: 50px;
      color: green;
    }
    .active a {

      background-color: green !important;

      color: white !important;




}


.pagination a:hover:not(.active)
{
  background-color: green; color: white !important;
}
#arboles
{
  background-image: url('/img/Portadas/(Portada)_Album.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}
#ornamentales
{
   background-image: url('/img/Portadas/(Portada)_Ornamentales.jpg');
   background-size: cover;
   background-repeat: no-repeat;
}
#medicinales
{
  background-image: url('/img/Portadas/(Portada)_Medicinales.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}




</style>

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


      <?php foreach ($contentsByAlbum as $contentA):?>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
           <?php


           if (empty($contentA->content->resources[0]['Resource'])) {
             echo "<img  style=' max-width:100%;
             max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  >";
           }elseif(!empty($contentA->content->resources[0]['Resource'])) {
            if (file_exists( WWW_ROOT . "/".$contentA->content->resources[0]['Resource']."" )) {
            echo "<img  style=' max-width:100%;max-height:100%; border-radius:2px;'src='/". $contentA->content->resources[0]['Resource']."'  >";



            }elseif (!file_exists( WWW_ROOT . "/".$contentA->content->resources[0]['Resource'])) {
              echo "<img  style=' max-width:100%;
              max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  >";

            } {


            }
          }


             ?>




          <div class="card-body">
            <h4 class="card-title" style="text-align:center;">
              <?= $this->Html->link(__($contentA->content->Name), ['action' => 'detail', $contentA->content->Name]); ?>
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

<hr>

        <div class="row">
          <div class="col-lg-2 col-md-2">

          </div>
          <div class="col-lg-8 col-md-8">
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('')) ?>
                    <?= $this->Paginator->prev('< ' . __('')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('') . ' >') ?>
                    <?= $this->Paginator->last(__('') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}')]) ?></p>
            </div>
          </div>
          <div class="col-lg-2 col-md-2">

          </div>
        </div>
        </div>

        </div>
      </div>

        </div>
        </div>
  <hr id="separator">

  <!-- Footer -->


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
  echo $this->Html->script('liveSearch.js');

  ?>


  <!--<script src="webroot/js/clean-blog.min.js"></script>-->

</body>
</html>
