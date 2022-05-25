<form action="" method="post"   enctype="multipart/form-data">
    <input type="file" name="image"  >
    <input type="submit" name="submit" >
</form>



<?php





// File upload path 
$uploadPath = "uploads/";  


if(isset($_POST["submit"])){ 
    if(!empty($_FILES["image"]["name"])) { 

        $fileName = basename($_FILES["image"]["name"]); 
        $imageTemp = $_FILES["image"]["tmp_name"];
        $imageUploadPath = $uploadPath . $fileName; 
        $compressedImage = compressImage($imageTemp, $imageUploadPath, 40); 
         
    }    
} 
 

?>