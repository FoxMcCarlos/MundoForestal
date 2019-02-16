
<ul class="list-inline" id="myList">


  <?php
  $letter = null;
  $actual = null;
  $contentV = null;
  $first = 0;
  $last =  count($contents->toArray()) -1;
  foreach ($contents as $content):


      if (preg_match('/nota\b/m',  mb_strtolower($content->Description))) {

        $content->Description = str_ireplace('nota.', '<br><p>Nota:</p>',substr($content->Description, 0, strlen($content->Description)));
        
      }




    if (preg_match_all('/(\~)+/i',iconv('utf-8','ASCII//IGNORE//TRANSLIT',$content->Name)[0])) {
      $actual = mb_strtoupper(substr($content->Name,0,2));
      if ($first == 0) {
        $first = $first + 1;
        if ($letter !== $actual) {

          $letter = $actual;
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
          echo "<ul>";
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  alt='".$content->Name ."'></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";

        }else {
          $first = $first + 1;
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
        }
      }elseif ($first === $last) {
        if ($letter !== $actual) {

          $letter = $actual;
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
          echo "<ul>";
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
          echo "</ul>";
          echo "</section>";

        }else {
          $first = $first + 1;
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";
          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
          echo "</ul>";
          echo "</section>";
        }
      }else {
        $first = $first + 1;
        if ($letter !== $actual) {

          $letter = $actual;
          echo "</section>";
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
          echo "<ul>";
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";

        }else {
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

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

          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
          echo "<ul>";
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";
          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";

        }else {
          $first = $first + 1;
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";


          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
        }
      }elseif ($first === $last) {
        if ($letter !== $actual) {

          $letter = $actual;
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
          echo "<ul>";
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
          echo "</ul>";
          echo "</section>";

        }else {

          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";
          echo "</ul>";
          echo "</section>";
        }
      }else {

        if ($letter !== $actual) {

          $letter = $actual;
          echo "</ul>";
          echo "</section>";
          echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
          echo "<ul>";
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

          echo "</div>";
          echo "</div>";
          echo "<hr width = 100%>";
          echo "</li>";

        }else {
          echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
          <div class='card-body'><h4 class='card-title'>";
          echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
          echo "</h4>";

          echo "<div class='tBody'>";
          if (empty($content->resources)) {
            echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
          }else {
            if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
            }else {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }


          }
          echo "<div class='tDesc'>";
          echo $content->Description;
          echo "</div>";
          echo "</div>";

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
            echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
            echo "<ul>";
            echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
            echo "</h4>";

            echo "<div class='tBody'>";
            if (empty($content->resources)) {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }else {
              if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                  echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
              }else {
                echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
              }


            }
            echo "<div class='tDesc'>";
            echo $content->Description;
            echo "</div>";
            echo "</div>";

            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";

          }else {
            $first = $first + 1;
            echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
            echo "</h4>";

            echo "<div class='tBody'>";
            if (empty($content->resources)) {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }else {
              if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                  echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
              }else {
                echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
              }


            }
            echo "<div class='tDesc'>";
            echo $content->Description;
            echo "</div>";
            echo "</div>";


            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";
          }
        }elseif ($first === $last) {
          if ($letter !== $actual) {


            echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
            echo "<ul>";
            echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
            echo "</h4>";

            echo "<div class='tBody'>";
            if (empty($content->resources)) {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }else {
              if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                  echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
              }else {
                echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
              }


            }
            echo "<div class='tDesc'>";
            echo $content->Description;
            echo "</div>";
            echo "</div>";

            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";
            echo "</ul>";
            echo "</section>";

          }else {

            echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
            echo "</h4>";

            echo "<div class='tBody'>";
            if (empty($content->resources)) {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }else {
              if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                  echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
              }else {
                echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
              }


            }
            echo "<div class='tDesc'>";
            echo $content->Description;
            echo "</div>";
            echo "</div>";


            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";
            echo "</ul>";
            echo "</section>";
          }
        }else {
          $first = $first + 1;
          if ($letter !== $actual) {

            $letter = $actual;
            echo "</ul>";
            echo "</section>";
            echo "<section id='l".$letter."'><h1 class='letter' id='l".$letter."'><img class='treeview negRot' src='img/treeview.png' />".   $letter. "</h1>";
            echo "<ul>";

            echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
            echo "</h4>";

            echo "<div class='tBody'>";
            if (empty($content->resources)) {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }else {
              if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                  echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
              }else {
                echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
              }


            }
            echo "<div class='tDesc'>";
            echo $content->Description;
            echo "</div>";
            echo "</div>";


            echo "</div>";
            echo "</div>";
            echo "<hr width = 100%>";
            echo "</li>";

          }else {
            echo "<li class='list-inline-item items ' id='liveSearchLu'><div class='card'>
            <div class='card-body'><h4 class='card-title'>";
            echo "<p id='".$content->Name."'>" .mb_convert_case($content->Name, MB_CASE_TITLE, "UTF-8").  "</p>";
            echo "</h4>";
            echo "<div class='tBody'>";
            if (empty($content->resources)) {
              echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
            }else {
              if (file_exists( WWW_ROOT . "/".$content->resources[0]['Resource']."" )) {
                  echo "<div class='tImg'><img class='zoomImg'  style='max-width:100%;max-height:100%; border-radius:2px;'src='/". $content->resources[0]['Resource']."' alt='".$content->Name ."'></div>";
              }else {
                echo "<div class='tImg'><img  class='zoomImg' style=' max-width:100%; max-height:100%; border-radius:2px;'src='/img/mfHolder.jpg'  ></div>";
              }


            }
            echo "<div class='tDesc'>";
            echo $content->Description;
            echo "</div>";
            echo "</div>";


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
