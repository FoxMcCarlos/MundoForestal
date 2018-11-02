
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
      echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
      echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card' >
      <div class='card-body'><h4 class='card-title'>";
      echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
      echo "</h4>";
      echo "<h5><i> $content->Description </i></h5>";
      echo "</div>";
      echo "</div>";
      echo "<hr width = 100%>";
      echo "</li>";


    }else {
      echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card' >
      <div class='card-body'><h4 class='card-title'>";
      echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
      echo "</h4>";
      echo "<h5><i> $content->Description </i></h5>";
      echo "</div>";
      echo "</div>";
      echo "<hr width = 100%>";
      echo "</li>";
      echo "</section>";
    }

    }elseif (preg_match_all("/^\ñ+/",$actual)  || preg_match_all("/^\Ñ+/",$actual)) {
      $actual = mb_strtoupper($content->Name);
      if ($letter != substr($actual,0,2)) {

        $letter =  substr($actual,0,2);
        echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
        echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card' >
        <div class='card-body'><h4 class='card-title'>";
        echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
        echo "</h4>";
        echo "<h5><i> $content->Description </i></h5>";
        echo "</div>";
        echo "</div>";
        echo "<hr width = 100%>";
        echo "</li>";

      }else {
        echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card' >
        <div class='card-body'><h4 class='card-title'>";
        echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
        echo "</h4>";
        echo "<h5><i> $content->Description </i></h5>";
        echo "</div>";
        echo "</div>";
        echo "<hr width = 100%>";
        echo "</li>";
        echo "</section>";
      }
    }
    else{
          $actual = strtoupper(iconv('utf-8','ASCII//IGNORE//TRANSLIT',$content->Name[0]));
           if ($letter != $actual[0]) {

             $letter = $actual[0];

             echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1></section>";
             echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card' >
             <div class='card-body'><h4 class='card-title'>";
             echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
             echo "</h4>";
             echo "<h5><i> $content->Description </i></h5>";
             echo "</div>";
             echo "</div>";
             echo "<hr width = 100%>";
             echo "</li>";

           }else {
             echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card' >
             <div class='card-body'><h4 class='card-title'>";
             echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
             echo "</h4>";
             echo "<h5><i> $content->Description </i></h5>";
             echo "</div>";
             echo "</div>";
             echo "<hr width = 100%>";
             echo "</li>";
             echo "</section>";
           }
         }



    ?>





  <?php  endforeach;?>

</ul>
