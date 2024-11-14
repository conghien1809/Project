<?php
    session_start();
   // require("class/clssdb.php");
    require("layout/header.php");
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page='homepage';
    }
    if(isset($_GET['cate'])){
        $cate=$_GET['cate'];
    }
    if(file_exists("page/".$page."/index.php")){
        include("page/".$page."/index.php");
    }
    include("layout/footer.php");

?>