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


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/tree.jpg'); -webkit-filter: grayscale(50%); ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Especies</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">

      <?php foreach ($contents as $content):?>

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
            <h4 class="card-title">
              <?= $this->Html->link(__($content->Name), ['action' => 'detail', $content->IdContent]) ?>
            </h4>
            <h5>Fotos de Bosques</h5>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>

      <?php  endforeach;?>

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
  echo $this->Html->script('clean-blog.min.js');
  ?>
  <!--<script src="webroot/js/clean-blog.min.js"></script>-->

</body>
</html>
