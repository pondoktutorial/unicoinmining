<?php
// https://unicoin-api.appspot.com/api/member
$rawurl=$_SERVER['REQUEST_URI'];
$url=explode("/",$rawurl);
array_shift($url);
if(strlen($url[0])>1){
  if(file_exists("../view/".$url[0].".php")){
    require_once("../controller/".$url[0].".php");
    require_once("../view/".$url[0].".php");
  }else{
    require_once("../view/404.php");
  }
}else{
  require_once("../controller/home.php");
  require_once("../view/home.php");
}
?>
