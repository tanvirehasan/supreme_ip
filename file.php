<?php
include "inc/db.php";
include "inc/function.php";

if (isset($_GET['file'])) {
   
    $row = mysqli_fetch_array(SelectData('file_management',"where file_url='{$_GET['file']}' "));
    Reconect("http://test.supremeip.com/assets/mediacenter/files/". $row['File_uploaded']);
}

?>