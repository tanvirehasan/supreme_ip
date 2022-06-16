<?php 
    include 'inc/header.php';
    (isset($_GET['pageid'])) ? $page_id = $_GET['pageid'] : Reconect('pages.php');


    if (isset($_POST['page_update'])) {
        
        $page_title     = $_POST['page_title'];
        $page_content   = htmlspecialchars($_POST['page_content']);
        $page_parent_id = $_POST['page_parent_id'];     
        $page_status    = $_POST['page_status'];

        $bg_color       = $_POST['bg_color'];
        $seo_title      = $_POST['seo_title'];
        $seo_keyword    = $_POST['seo_keyword'];
        $seo_description= $_POST['seo_description'];

        $contact_parson= $_POST['contact_parson'];
        $contact_parson_titel= $_POST['contact_parson_titel'];
        $contact_parson_color= $_POST['contact_parson_color'];
        $contact_parson_text_color= $_POST['contact_parson_text_color'];

        $header_overlay_color= $_POST['header_overlay_color'];
        $bgimag_off_on = (isset($_POST['bgimag_off_on'])) ? 1 : 0 ;

        $Section_Title_Price= $_POST['Section_Title_Price'];
        $Section_Title_Flowchart= $_POST['Section_Title_Flowchart'];
        $Section_Title_Faq= $_POST['Section_Title_Faq'];
        $Section_Title_File= $_POST['Section_Title_File'];

        $Section_gap_off_on=(isset($_POST['Section_gap_off_on'])) ? 1 : 0 ;
        $client_off_on=(isset($_POST['client_off_on'])) ? 1 : 0 ;
        $services_off_on=(isset($_POST['services_off_on'])) ? 1 : 0 ;
        $global_color = (isset($_POST['global_color'])) ? 1 : 0 ;




        if ($_FILES["page_featured_image"]["name"]!='') {
            $target_dir = "../assets/mediacenter/";
            $page_featured_image    = $_FILES["page_featured_image"]["name"];            
            $target_file = $target_dir . basename($_FILES["page_featured_image"]["name"]);
            move_uploaded_file($_FILES["page_featured_image"]["tmp_name"], $target_file);
        }else{

            $page_featured_image    = $_POST['page_featured_image2'];
        }


        if ($_FILES["header_bg_img"]["name"]!='') {
            $target_dir2 = "../assets/mediacenter/";
            $header_bg_img    = $_FILES["header_bg_img"]["name"];            
            $target_file2 = $target_dir2 . basename($_FILES["header_bg_img"]["name"]);
            move_uploaded_file($_FILES["header_bg_img"]["tmp_name"], $target_file2);
        }else{

            $header_bg_img= $_POST['header_bg_img2'];
        }

        if ($_FILES["header_img_two"]["name"]!='') {
            $target_dir2 = "../assets/mediacenter/";
            $header_img_two    = $_FILES["header_img_two"]["name"];            
            $target_file2 = $target_dir2 . basename($_FILES["header_img_two"]["name"]);
            move_uploaded_file($_FILES["header_img_two"]["tmp_name"], $target_file2);
        }else{

            $header_img_two= $_POST['header_img_two2'];
        }

        $update = "UPDATE  pages SET

                    page_title='$page_title',
                    page_content='$page_content',
                    page_parent_id='$page_parent_id',
                    page_featured_image='$page_featured_image',
                    page_status='$page_status',

                    bg_color='$bg_color',
                    seo_title='$seo_title',
                    seo_keyword='$seo_keyword',
                    seo_description='$seo_description',

                    contact_parson='$contact_parson',
                    contact_parson_titel='$contact_parson_titel',
                    contact_parson_color='$contact_parson_color',
                    contact_parson_text_color='$contact_parson_text_color',

                    header_bg_img='$header_bg_img',
                    bgimag_off_on='$bgimag_off_on',
                    header_img_two='$header_img_two',
                    header_overlay_color='$header_overlay_color',

                    Section_Title_Price='$Section_Title_Price',
                    Section_Title_Flowchart='$Section_Title_Flowchart',
                    Section_Title_Faq='$Section_Title_Faq',
                    Section_Title_File='$Section_Title_File',

                    Section_gap_off_on='$Section_gap_off_on',
                    client_off_on='$client_off_on',
                    services_off_on='$services_off_on',
                    global_color='$global_color'

                  WHERE page_id='$page_id'";             
        
        if ($conn->query($update)) {
            //  echo "<script>alert('Success')</script>";
        }else{
            // echo "Error: " . $sql . "<br>" . $conn->error;
             echo "<script>alert('Sorry')</script>";

        }
    }

    $data = SelectData('pages',"WHERE page_id='$page_id'");
    $row = $data->fetch_object();
?>


<form action="" method="POST" enctype="multipart/form-data" >
<div class="container-fluid">
	<div class="row">
	  <div class="col-12 col-md-10 my-5 ">  
	   <div class="bg-white p-5"> 
		<div class="card"> 
			<div class="card-body">      
		        <input type="text" class="form-control mb-4" value="<?=$row->page_title?>"  placeholder="Page Title"  name="page_title" require>
		        <textarea id="summernote" class="form-control mb-5" name="page_content" require >
                    <?=$row->page_content?>      
                </textarea>
	    	</div>
	     </div>

        <div class="row" id="widget_view"></div>
        <!-- Widget row -->

	    </div>
	   </div>

		<div class="col-md-2 my-5 bg-white">
            <div class="mt-3">
                <input type="submit" name="page_update" value="UPDATE" class="form-control btn btn-success m-0">                                
            </div>
		  <div class="px-4 py-3">
		  	<h5  class=""><i class="fas fa-image"></i> Featured Image</h5>
			<div class="drop-zone">
			    <?php 
                    if ($row->page_featured_image==null) {?>
                        <span class="drop-zone__prompt">Set Featured Image</span>                        
                    <?php }else{ ?>
                        <img class="drop-zone__prompt" width="200px" src="../assets/mediacenter/<?=$row->page_featured_image?>"  alt="<?=$row->page_title?>">
                        <input type="hidden" name="page_featured_image2" value="<?=$row->page_featured_image?>">
                <?php } ?>                                              
			     <input type="file" name="page_featured_image" class="drop-zone__input">
			 </div>

			 <div class="perent_select mt-5">
			 	<h5  class=""><i class="fas fa-file-alt"></i> Parent Page:<?=pagename('manu_title',$row->page_parent_id)?></h5>
			 	<select type="text" style="width:100%; height: 35px; border:1px solid #979797; padding: 0px 8px;" name="page_parent_id" placeholder="ex. Home">
                    <option value="<?=$row->page_parent_id?>">select</option>
                    <option value="0">None</option>
                    <?php 
                        $parentdata = SelectData('pages',"WHERE page_parent_id='0'");
                        while($prow = $parentdata->fetch_object()){?>
                        <option value="<?=$prow->page_id?>"><?=$prow->page_title?></option> 
                    <?php } ?>
				</select>
			 </div>


            <div class="Visibility mt-5">
                <h6 class="m-0 p-0"><i class="fas fa-eye"></i> Visibility : <?=$retVal = ($row->page_status=='0') ? "<span class='text-danger'>Private</span>" : "<span class='text-success'>Published</span>";?></h6>
                <select style="width:100%; height: 35px; border:1px solid #979797; padding: 0px 8px; margin-top:5px;" name="page_status">
                    <option value="<?=$row->page_status?>">select</option>                    
                    <option value="1">Public</option>
                    <option value="0">Private</option>
                </select>
             </div>

			 <div class="Widget mt-5">
		 		<h5 class=""><i class="fas fa-clipboard-list"></i> Widget</h5>
			 	<a class="btn btn-primary text-white m-1" onclick="widget('views/widget/widget_insert.php?priceadd=<?=$row->page_id?>&title=Price')" >+ Price</a>
			 	<a class="btn btn-primary text-white m-1" onclick="widget('views/widget/widget_insert.php?flowchartadd=<?=$row->page_id?>&title=Flowchart')" >+ Flowchart</a>	 	
			 	<a class="btn btn-primary text-white m-1" onclick="widget('views/widget/widget_insert.php?faqadd=<?=$row->page_id?>&title=FAQ')">+ FAQ List</a>
                <a class="btn btn-primary text-white m-1" onclick="widget('views/widget/widget_insert.php?fileadd=<?=$row->page_id?>&title=File')">+ File List</a>
                <a class="btn btn-primary text-white m-1" onclick="widget('views/widget/widget_insert.php?readmore=<?=$row->page_id?>&title=Read More')">+ Read More</a>	 	
                <a class="btn btn-primary text-white m-1" onclick="widget('views/widget/widget_insert.php?clientsadd=<?=$row->page_id?>&title=Client')">+ client</a>	 	
                <a class="btn btn-primary text-white m-1" onclick="widget('views/widget/widget_insert.php?teamadd=<?=$row->page_id?>&title=Team')">+ Team</a>	 	
                <a class="btn btn-primary text-white m-1" onclick="widget('views/widget/widget_insert.php?images=<?=$row->page_id?>&title=Images')">+ Images</a>	 	
			 </div>

            <div class="Widget mt-5">
                <div class="Widget">                                   
                    <label >Our Clients: </label>
                    <label class="switch mt-3">
                        <input type="checkbox" name="client_off_on" <?=($row->client_off_on==1) ? 'checked' : '' ;?>>
                        <span class="slider round"></span>
                    </label>

                    <label >Our Services: </label>
                    <label class="switch mt-3">
                        <input type="checkbox" name="services_off_on" <?=($row->services_off_on==1) ? 'checked' : '' ;?>>
                        <span class="slider round"></span>
                    </label>


                </div>
             </div>

		</div>
	   </div>	   

       <div class="col-md-12">
           <div class="page-seting bg-white p-0 m-0" >
               <h3 class="px-5 py-3 font-weight-bold text-uppercase text-white bg-success">Page Settings</h3>           
           </div>  

            <div class="row mb-5 bg-white p-5 m-0">

                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="card-header p-0">
                            <h5 class="py-3 text-danger">Background Image & Color</h5>
                        </div>
                        <table class="table">
                            <tr>
                                <td style="width: 50%;">
                                <h6>Header 1</h6>
                                    <div class="drop-zone mb-3">
                                        <img class="drop-zone__prompt" width="100%" src="../assets/mediacenter/<?php echo ($row->header_bg_img=='') ? settings('default_img') : $row->header_bg_img; ?>"  alt="<?=$row->page_title?>">
                                        <input type="hidden" name="header_bg_img2" value="<?php echo ($row->header_bg_img=='') ? settings('default_img') : $row->header_bg_img; ?>" class="drop-zone__input">                                                                               
                                        <input type="file" name="header_bg_img" class="drop-zone__input">
                                    </div>

                                    <span class="">BG color</span> 
                                    <div style='height:50px;width:100%; border:none; padding:0; background:<?php echo ($row->bg_color=='') ? settings('default_theam_color') : $row->bg_color;?>'></div>
                                    <select name="bg_color" id="" class="form-control">
                                            <?php $bgcolor= ($row->bg_color=='') ? settings('default_theam_color') : $row->bg_color;?>
                                            <option value="<?php echo $bgcolor;?>" ><?php echo color_name($bgcolor); ?></option>
                                            
                                        <?php 
                                            $data = SelectData('color_settings','');
                                            while ($textcolor = $data->fetch_object()) {?>
                                            <option value="<?=$textcolor->color_code?>" ><?=$textcolor->color_name?></option>
                                        <?php } ?>
                                    </select>

                                    <label >Image: </label>
                                    <label class="switch mt-3">
                                        <input type="checkbox" name="bgimag_off_on" <?=($row->bgimag_off_on==1) ? 'checked' : '' ;?>>
                                        <span class="slider round"></span>
                                    </label>                                              

                                </td>

                                <td>
                                    <h6>Header 2</h6>
                                    <div class="drop-zone mb-3">
                                        <img class="drop-zone__prompt" width="100%" src="../assets/mediacenter/<?php echo ($row->header_img_two=='') ? settings('default_img2') : $row->header_img_two; ?>"  alt="<?=$row->page_title?>">
                                        <input type="hidden" name="header_img_two2" value="<?php echo ($row->header_img_two=='') ? settings('default_img2') : $row->header_img_two; ?>" class="drop-zone__input">                                                                               
                                        <input type="file" name="header_img_two" class="drop-zone__input">
                                    </div>        
                                    
                                    <span class="">Overlay color</span>  
                                    <div style='height:50px;width:100%; border:none; padding:0; background:<?php echo ($row->header_overlay_color=='') ? settings('Overlay_color') : $row->header_overlay_color; ?>'></div>
                                     <select name="header_overlay_color" id="" class="form-control">
                                         <?php $overlaybgcolor= ($row->header_overlay_color=='') ? settings('Overlay_color') : $row->header_overlay_color; ?>
                                        <option value="<?=$overlaybgcolor?>" ><?php echo color_name($overlaybgcolor)?></option>
                                            
                                        <?php 
                                            $data = SelectData('color_settings','');
                                            while ($textcolor = $data->fetch_object()) {?>
                                            <option value="<?=$textcolor->color_code?>" ><?=$textcolor->color_name?></option>
                                        <?php } ?>
                                    </select>                                                                                                   
                                   
                                    <label >Global:Color </label>
                                    <label class="switch mt-3">
                                        <input type="checkbox" name="global_color" <?=($row->global_color==1) ? 'checked' : '' ;?>>
                                        <span class="slider round"></span>
                                    </label> 
                                   
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div class="col-md-4">

                    <div class="card p-3">
                        <div class="card-header p-0"><h5 class="py-3 text-danger">SEO</h5></div>
                        <input type="text" class="form-control" name="seo_title" value="<?=$row->seo_title?>">
                        <input type="text" class="form-control" name="seo_keyword" value="<?=$row->seo_keyword?>"> 
                        <textarea class="form-control" name="seo_description" cols="30" rows="5"><?=$row->seo_description?></textarea>
                    </div>

                    <div class="card p-3">
                        <div class="card-header p-0"><h5 class="py-3 text-danger">Section Title</h5></div>
                        <input type="text" class="form-control" name="Section_Title_Price" value="<?=$row->Section_Title_Price?>">
                        <input type="text" class="form-control" name="Section_Title_Flowchart" value="<?=$row->Section_Title_Flowchart?>"> 
                        <input type="text" class="form-control" name="Section_Title_Faq" value="<?=$row->Section_Title_Faq?>"> 
                        <input type="text" class="form-control" name="Section_Title_File" value="<?=$row->Section_Title_File?>"> 

                        <div class="section_gap">                                   
                            <label >Section gap: </label>
                            <label class="switch mt-3">
                                <input type="checkbox" name="Section_gap_off_on" <?=($row->Section_gap_off_on==1) ? 'checked' : '' ;?>>
                                <span class="slider round"></span>
                            </label>
                        </div>

                    </div>

                </div>


                <div class="col-md-4">
                <!-- Contract me -->
                <?php 
                    $pdata = SelectData('pages',"WHERE page_id='$page_id'");
                    $pagerow = $pdata->fetch_object();

                    if ($pagerow->contact_parson>0) {
                    $tdata = SelectData('our_team',"WHERE team_id={$pagerow->contact_parson}");                    
                    $prow = $tdata->fetch_object(); ?>

                    <div class="col-12 p-0">
                    <!-- Price -->
                        <div class="card">
                            <div class="card-header p-1 px-2" style="background-color:<?php echo $pagerow->contact_parson_color?> !important;">
                                <h5 class="mt-2 text-white"><i class="fas fa-list"></i> Contact</h5>  
                            </div>
                        
                                <div class="row p-3">
                                    <div class="col-md-4">
                                        <img src="../assets/mediacenter/team/<?=$prow->Profile_pic?>" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                            <h4 class="h4 m-0 p-0 mt-5"><?=$prow->Name?></h4>
                                            <h6 class="h6 m-0 p-0"><?=$prow->Designation?></h6>
                                            <p class="m-0 p-0"><?=$prow->Phone_No?></p>
                                            <p class="m-0 p-0"><?=$prow->Email?></p>
                                        
                                    </div>
                                </div> 
                                </div>             
                    </div>

                <?php } ?>



                    <div class="card p-3">
                        <input type="text" class="form-control" name="contact_parson_titel" value="<?=$row->contact_parson_titel?>" placeholder=" Heading" >
                        <select name="contact_parson" class="form-control" >
                            <option value="<?=$row->contact_parson?>">select</option>
                            <option value="0" >None</option>
                            <?php                                        
                                $tdata = SelectData('our_team',"");
                                while ($trow = $tdata->fetch_object()) {?>
                                    <option value="<?=$trow->team_id?>" ><?=$trow->Name?>-<?=$trow->Designation?></option>
                            <?php } ?>                         
                        </select>
                        <table class="mt-3">
                        <tr>
                            <td>
                                <span style="font-size: 12px;">BG Color</span>
                                <input type="color" class="form-control" name="contact_parson_color" value="<?=$row->contact_parson_color?>" style="height: 60px;" > 
                            </td>
                            <td>
                                <span style="font-size: 12px;">Text Color</span>                      
                                <input type="color" class="form-control" name="contact_parson_text_color" value="<?=$row->contact_parson_text_color?>" style="height: 60px;" > 
                            </td>
                        </tr>
                        </table>
                    </div>
                </div>
               </div>  
                    <div class="my-5">
                        <input type="submit" name="page_update" value="UPDATE" class="form-control btn btn-success m-0">                                
                    </div>         
       </div>
	</div><!-- row -->
</div>
</form>


<!-- widget load -->
<script>
    setInterval(function(){
        $("#widget_view").load('controller/widget/widget_view.php?pageid=<?php echo $_GET['pageid']?>')
    }, 3000);
</script>


<!-- popup -->
<script> 
    function widget(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#video").html(data);
                $("#dataModal").modal("show");
            },
        });
    }
</script>

<!-- Modal for Video -->
<div class="modal fade" id="dataModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="video">

    </div>
  </div>
</div>



<?php include 'inc/footer.php'; ?>



</body>
</html>