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
<style media="screen">
  #titulo{
    text-shadow: 4px 4px #33331a;
    color: #eaeae1
  }
  .term
  {
    color: green;

  }
  #content
  {
    margin-top: 40px;
  }
</style>

  <!-- Page Header -->
  <?php echo "<header class='masthead' style='background-image: url(".'"/'.$content[0]['resources'][0]['Resource'].'"'."); background-repeat: no-repeat; background-position-x:center; background size-y: 500px;'>" ;?>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading" >
            <h1 id="titulo"><?= $content[0]['Name'] ?></h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">

      <div id="content" class="col-lg-12 col-md-12 mb-12">
        <?php
            if ($content[0]['ScientificName'] != "" || $content[0]['ScientificName'] != null) {
              echo "<div><h4 style='color:green;  font-style: italic;''>Nombre científico:".' '.$content[0]['ScientificName']. "</h4></div>";
            }

            if ($content[0]['botanicalfamily'] != "" || $content[0]['botanicalfamily'] != null) {
              echo "<div><h4 style='color:red;  font-style: none;''>Familia botánica:" .' '.$content[0]['botanicalfamily']['Description']."</h4></div>";
            }
         ?>


        <div class"panel panel-info" align="justify">
          <?php

              foreach ($terms as $term) {



              if ( strstr((string) $content[0]['Description'], $term->Name)) {
                if ($content[0]['Name'] !== $term->Name) {
                  //echo "Text found". ' '. strpos($content->Description,$term->Name);
                  //echo substr ( $content->Description , strpos($content->Description,$term->Name) , strlen($term->Name));
                  //echo strpos($content->Description,$term->Name) + strlen($term->Name);

                  $content[0]['Description'] = str_replace($term->Name, '<a class="term" href="/terminology#'.$term->Name.'" target="_blank">'.$term->Name.'</a>', substr($content[0]['Description'], 0, strlen($content[0]['Description'])));
                }
                }


              }



            echo  '<p>' .  $content[0]['Description'] . '</p>';
        ?>
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

  ?>
  <!--<script src="webroot/js/clean-blog.min.js"></script>-->

</body>
</html>
