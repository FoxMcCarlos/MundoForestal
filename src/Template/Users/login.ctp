


<!DOCTYPE html>
<?php
  $this->layout = false;
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Identificarse</title>
    <?php
      echo $this->Html->css('bootstrap.min.css');
      echo $this->Html->css('login.css');

    ?>
  </head>
  <body>
    <div class="sidenav">
             <div class="login-main-text">
                <img src="/img/logo_white2.png" alt="">
                <p>Dashboard para la gestión de la información</p>
             </div>
          </div>
          <div class="main">
             <div class="col-md-6 col-sm-12">
               <?= $this->Flash->render('negative') ?>
               <?= $this->Form->create() ?>
                <div class="login-form">

                      <div class="form-group">
                         <?= $this->Form->control('username',array('class'=>'form-control', 'label' => 'Usuario')) ?>

                      </div>
                      <div class="form-group">

                         <?= $this->Form->control('password',array('class'=>'form-control', 'label' => 'Contraseña')) ?>
                      </div>
                      <button type="submit" class="btn btn-success">Ingresar</button>
                      <?= $this->Form->end() ?>

                </div>
             </div>
          </div>


  </body>

</html>
