<?php 

    include "inc/db.php";
    include "inc/function.php";

    $reques = $_SERVER['REQUEST_URI'];
    $data = SelectData('custom_url',"WHERE Request_Url='$reques' ");
    $urlrow = $data->fetch_object();
    $data->num_rows;

    if ($data->num_rows>0) {        
        header('location:'.$urlrow->Forward_Url);
    }else{
        header('location:/');
    }
?> 
