
<ul class="list-inline" id="myList">


  <?php
  $letter = null;
  $actual = null;
  $contentV = null;
  $first = 0;
  $last =  count($contents->toArray()) -1;
  foreach ($contents as $content):


    if (preg_match_all('/(\~)+/i',iconv('utf-8','ASCII//IGNORE//TRANSLIT',$content->Name)[0])) {
      $actual = mb_strtoupper(substr($content->Name,0,2));
      if ($first == 0) {
        $first = $first + 1;
        if ($letter !== $actual) {

          $letter = $actual;
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";

        }else {
          $first = $first + 1;
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
        }
      }elseif ($first === $last) {
        if ($letter !== $actual) {

          $letter = $actual;
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
          echo "/section";

        }else {
          $first = $first + 1;
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
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
      }else {
        $first = $first + 1;
        if ($letter !== $actual) {

          $letter = $actual;
          echo "</section>";
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";

        }else {
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
        }
      }

      //preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0)
    }elseif (preg_match_all('/(\')+/i',iconv('utf-8','ASCII//IGNORE//TRANSLIT',$content->Name)[0])) {
      $actual = strtoupper(iconv('utf-8','ASCII//IGNORE//TRANSLIT',$content->Name)[1]);
      if ($first == 0) {
        $first = $first + 1;
        if ($letter !== $actual) {

          $letter = $actual;

          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";

        }else {
          $first = $first + 1;
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
        }
      }elseif ($first === $last) {
        if ($letter !== $actual) {

          $letter = $actual;
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
          echo "/section";

        }else {

          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
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
      }else {

        if ($letter !== $actual) {

          $letter = $actual;
          echo "</section>";
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";

        }else {
          echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
          echo "</h4>";
          echo "<h5><i> $content->Description </i></h5>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
        }
      }
    }else {
        $actual = strtoupper($content->Name[0]);
        if ($first == 0) {
          $first = $first + 1;
          if ($letter !== $actual) {

            $letter = $actual;
            echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
            echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
            echo "</h4>";
            echo "<h5><i> $content->Description </i></h5>";
            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";

          }else {
            $first = $first + 1;
            echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
            echo "</h4>";
            echo "<h5><i> $content->Description </i></h5>";
            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";
          }
        }elseif ($first === $last) {
          if ($letter !== $actual) {


            echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
            echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
            echo "</h4>";
            echo "<h5><i> $content->Description </i></h5>";
            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";
            echo "/section";

          }else {

            echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
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
        }else {
          $first = $first + 1;
          if ($letter !== $actual) {

            $letter = $actual;
            echo "</section>";
            echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'>".   $letter. "</h1>";
            echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
            echo "</h4>";
            echo "<h5><i> $content->Description </i></h5>";
            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";

          }else {
            echo "<li class='list-inline-item items' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo $this->Html->link(__($content->Name), ['action' => 'detail', $content->Name]);
            echo "</h4>";
            echo "<h5><i> $content->Description </i></h5>";
            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";
          }
        }
    }


    ?>





  <?php  endforeach;?>

</ul>
