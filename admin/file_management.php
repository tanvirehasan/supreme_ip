<?php include "inc/header.php";?> 

<script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Are you sure?');
    }
</script>

<div class="container-fluid flex-grow-1 container-p-y"> 
    <div class="row">
        <div class="col-10"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> File Management</h3></div>
        <div class="col-2"><h3 class="bg-white text-center p-3 text-uppercase text-info"><button class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3></div>
    </div>

    <div class="row">
        <div class="col-12" >
            <form action="" method="post" class="bg-white" enctype="multipart/form-data">
                <table class='table ' >
                    <tr>
                        <td><input type="text" name="file_name" class="form-control" value="File Name"></td>
                        <td><input type="file" name="fileToUpload" class="form-control"></td>
                        <td><input type="submit" class="form-control btn-success" name="file_upload" value="Upload"></td>
                    </tr>
                </table>
                
            </form>
        </div>
    </div>
 

    <?php
        if (isset($error)) {?><div class="alert  <?=$bg?>" role="alert"> <?=$error?> </div><?php } ?>
    <div class="row">        
        <div class="col-md-12" id="clients">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="data_table" class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Actino</th>
                                </tr>
                            </thead>
                            <tbody>

                        <?php 
                            $i=1;
                            $teab_data = SelectData('file_management', "");
                            while ($file = $teab_data->fetch_object()) {?>

                                <tr>
                                    <td><?=$i++?></td>
                                        <td><?=$file->file_name?></td>
                                        <td><?='http://'.$_SERVER['HTTP_HOST'].'/file/'.$file->file_url?></td>
                                    <td>
                                        <a onclick="popup('views/clients/edit.php?team_id=<?=$file->fileid?>')"  class="btn btn-warning btn-sm text-white">Edit</a>                     
                                        <a href="ourclients.php?delete_id=<?=$file->fileid?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>                          
                                    </td>
                                </tr> 

                            <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
    </div><!-- row -->
</div>



<?php 
    if (isset($_POST['file_upload'])) {

        $file_name = $_POST['file_name'];
        $file = $_FILES["fileToUpload"]["name"];
        $file_url = uniqid().time();
        $target_dir = "../assets/mediacenter/files/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        $sql = "INSERT INTO `file_management`(`file_name`, `file_url`, `file`) VALUES ('$file_name','$file_url','$file ') ";

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            mysqli_query($conn, $sql);
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

            
    }

?>






<?php include 'inc/footer.php';?>