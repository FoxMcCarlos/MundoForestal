<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">
        <img src="/img/logoGreen.png" id="logo" >
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menú
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item i">
          <a class="nav-link" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/nosotros">Quiénes Somos</a>
        </li>
        <li class="nav-item dropdown" id="albu">
          <a class="nav-link" role="button" data-toggle="dropdown">Álbumes</a>
          <ul  class="dropdown-menu" style="border:none; margin-left:20px;" >
          <?php foreach ($albums as $album){

            echo "<li id='ddmenu'class='nav-link'><a  href='/album/".$album->Name."'>".$album->Name."</a></li>";

          } ?>

        </ul>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="/terminologia">Terminología</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mantenimiento">Consultorio del Dr.Arbol</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/nosotros#contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
<style media="screen">

  a:hover{
    text-decoration:none;
    color:white;
}

  #ddmenu:hover
  {
    background-color: green;
  }
  #ddmenu:hover a{

   color:white;
 }

</style>
