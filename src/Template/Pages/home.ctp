<?php
  $this->layout = 'main';
?>
  <!-- Navigation -->

  <header class="masthead" style="background-image: url('img/arbolito.jpg'); ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
           <div class="site-heading; " >
            <div class="site-heading" >



              <div    >
                    <span >
                        <h2>Bienvenidos</h2> <br>
                            <span >
                                Desde Costa Rica, con mucho orgullo para el resto del mundo
                          </span>
                    </span>
              </div>

            </div>
         </div>

      </div>
    </div>
  </header>




<div class="container clearfix">


    <style media="screen">
        .black, .hover-black:hover {

        color: #fff !important;
        background-color: #008000 !important;

        }
        .animate-opacity {

            animation: opac 0.8s;

        }


    </style>
  <!-- Page Header -->


  <!-- Main Content -->

  <div class="container">
    <h1 style="padding-top:5%;">Álbumes</h1>
    <hr>
    <div class="row">

    <style media="screen">


      div.card {
        width: 80%;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 55px;

      }
      div.card:hover{
       box-shadow: 0 4px 8px 0 rgb(102, 153, 0), 0 6px 20px 0 rgb(136, 204, 0);

      }
      div.content {
        text-align: center;

        height: 175%;
      }
      @media only screen and (max-width:500px)
      {
          div.card
          {
            margin-left: 10%;
          }


      }
      </style>
    <?php foreach ($albums as $album): ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <?php
            if($album->IdAlbum == 1)
            {
                if ($reso == null) {
                  echo "<img  style=' max-width:100%;
                  max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  >";
                }else {
                  if (file_exists( WWW_ROOT . "/".$reso[0]->Resource."" )) {
                    echo "<img  style='max-width:100%;
                    max-height:100%; border-radius:2px;'src='".$reso[0]->Resource."' alt='test' >";
                  }else {
                    echo "<img  style=' max-width:100%;
                    max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  >";
                  }
                }



            }
            elseif ($album->IdAlbum==2)
            {
              if ($reso2 == null) {
                echo "<img  style=' max-width:100%;
                max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  >";
              }else {
                if (file_exists( WWW_ROOT . "/".$reso2[0]->Resource."" )) {
                  echo "<img  style='max-width:100%;
                  max-height:100%; border-radius:2px;'src='".$reso2[0]->Resource."' alt='test' >";
                }else {
                  echo "<img  style=' max-width:100%;
                  max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  >";
                }

              }



            }
            elseif($album->IdAlbum==3)
            {
              if ($reso3 == null) {
                echo "<img  style=' max-width:100%;
                max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  >";
              }else {
                if (file_exists( WWW_ROOT . "/".$reso3[0]->Resource."" )) {
                  echo "<img  style='max-width:100%;
                  max-height:100%; border-radius:2px;'src='".$reso3[0]->Resource."' alt='test' >";
                }else {
                  echo "<img  style=' max-width:100%;
                  max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  >";
                }
              }


            }


            ?>
            <div class="content">
              <h4 class="" style="text-align: center; padding-top:8%; padding-bottom:5%;">
                <?= $this->Html->link(__($album->Name), ['action' => 'album', $album->Name]) ?>
              </h4>
              <h5></h5>
            </div>
            <div class="3">
            </div>
          </div>
        </div>
      <?php endforeach;?>

        <!-- Pager
        <div class="clearfix">
          <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
        </div>-->

    </div>
  </div>
  <hr>
</div>


  <!-- Footer -->


  <!-- Bootstrap core JavaScript -->
