<?php
  ob_start(); // Open Buffer
  $vars = '/home/MAIN/stv9643/Sites/240/project2/assets/elems/globalVars.php';
  require_once $vars;
  require_once $dbConnect;
  require_once $header;
  require_once $nav;

  //load content
  $pages = array();
  $sqlContent = 'select pgName,pgContent from denverPages';
  $res=$mysqli->query($sqlContent);
  if($res){
    while($row = $res->FETCH_ASSOC()){
      $pages[] = $row;
    }
  }else{
    echo "Content Query Error";
  }
  //var_dump($pages);

  //load images (scraped, image quality low)
  // $images = array();
  // $sqlImages = 'select picIndex,picAlt,picPath,picLink,picDate,picLoc from denverImages';
  // $res=$mysqli->query($sqlImages);
  // if($res){
  //   while($row = $res->FETCH_ASSOC()){
  //     $images[] = $row;
  //   }
  // }else{
  //   echo "Image Query Error";
  // }
  //var_dump($images);
  
  // contains
  // if (strpos($a, 'are') !== false) {
  //   echo 'true';
  // }

  if (isset($_GET) && !empty($_GET)){
    if($page != $_GET['page']){
      $page = $_GET['page'];
      $title = $assocPageNames[$page];
    }
    if (isset($_GET['anchor']) && $anchor != $_GET['anchor']){
      $anchor = $_GET['anchor'];
    }
    foreach ($pages as $content) {
      if ($content['pgName'] == $page){
        echo eval("?>".$content['pgContent']);
      }
    }
  }else{
    if(!isset($page)){
      $page = 'home';
    }
    $title = $assocPageNames[$page];
    foreach ($pages as $content) {
      if ($content['pgName'] == $page){
        echo eval("?>".$content['pgContent']);
      }
    }
  }

  if ($page == 'survey' || $page == 'redirect') {
    $css = 'form';
  }else{
    $css = 'main';
  }

  $buffer=ob_get_contents(); //Store Buffered
  ob_end_clean(); // End Buffer

  $buffer=str_replace("%TITLE%",$title,$buffer); //Replace Title
  $buffer=str_replace("%ANCHOR%",$anchor,$buffer); //Replace Anchor
  $buffer=str_replace("%CSS%",$css,$buffer); //Replace Css
  echo $buffer;

  require_once $footer;
  mysqli_close($mysqli);
?>