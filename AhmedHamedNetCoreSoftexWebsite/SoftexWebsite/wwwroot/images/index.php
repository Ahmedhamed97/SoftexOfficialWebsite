<?php
if(file_exists("local-config.php")){ //local centerlized config
    include "local-config.php";
}
else{
    exit("Error Loading Configuration file1");
}
if(file_exists($pathtoroot."config.php")){//path to root , holds the centerlized path root var
    include $pathtoroot."config.php";
}
else{
    exit("Error Loading Configuration file");
}
header("location:".$pathtowebsite."index.php");
?>