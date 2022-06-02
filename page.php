<?php include "inc/header.php";

if (isset($_GET['page'])) {
    $pageurl = $_GET['page'];
    $pagedata = SelectData('pages', "WHERE page_url='$pageurl'");
    $page = $pagedata->fetch_object();
    $pageid = $page->page_id;
    $sharelink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
} ?>

<?php 
    if (!isset($_GET['child'])) {
        $page_data = SelectData('pages', "WHERE page_id='$pageid' AND page_status='1' ");
    }else{
        $cpageurl = $_GET['child'];
        $page_data = SelectData('pages', "WHERE page_url='$cpageurl' AND page_status='1' ");
    }            
        $pageinfo = $page_data->fetch_object();            
?>

<!-- main content -->
 <main class="col-md-10 ms-sm-auto col-lg-10  m-0 p-0">
 	<div class="header_img">
 		<div class="row mx-0 m-0 p-0">

 			<div class="col-9  m-0 p-0" style="background:<?php echo ( $pageinfo->global_color==1) ? settings('Overlay_color'):  $pageinfo->header_overlay_color;?>;">			
              
             <img src="assets/mediacenter/<?php             
                    if ($pageinfo->bgimag_off_on==1) {
                        if ($pageinfo->global_color==1) {
                            echo settings('default_img');
                        }else{echo $pageinfo->header_bg_img;
                        }              
                    }else{echo '';}       
                 ?>" alt="" style="height: 200px; position: absolute; opacity:<?=settings('Overlay_color_opasity')?>">
                <h1 class="text-white h2 pe-5 " style="position: absolute;"><?=$page->page_title?></h1>                     
 			</div>


 			<div class="col-3 m-0 p-0 position-relative"  style="background:<?=settings('Overlay_color2')?>;">                
 				<div class="d-flex flex-column">
 					<img src="assets/mediacenter/<?php
                    if ($pageinfo->bgimag_off_on==1) {
                        if ($pageinfo->global_color==1) {
                            echo settings('default_img2');
                        }else{echo $pageinfo->header_img_two;
                        }              
                    }else{echo '';}                                         
                                          
                     ?>"style="height:200px; opacity:<?=settings('Overlay_color2_opasity') ?>;"> 

 				</div>
               

                <!-- breadcrumb -->
                    <nav aria-label="" class="breadcrumb_menu header_icon">
                        <ol class="nav" style="cursor: pointer;">
                            <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-5 "></i></a> </li>
                            <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-5 "></i></a></li>
                            <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-5 "></i></a></li>
                            <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-5 "></i></a></li>
                            <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-5 "></i></a></li>
                            <li class="nav-link p-1 "><a href="print.php?id=<?= $pageinfo->page_id?>" target="null" > <i class="fas fa-print  fs-5"></i> </a> </li>
                        </ol>                     
                    </nav>                   
 			</div>
 		</div>
 	</div>


     <!-- mobile side menu -->
     <div class="d-md-none d-sm-block mb-3">        
         <nav class="navbar navbar-expand-lg navbar-light" style="background:<?php echo ( $pageinfo->global_color==1) ? settings('default_theam_color'):  $pageinfo->bg_color;?>;">
              <div class="">               
                <button class="navbar-toggler m-3 border-0" style="color:<?=sub_menu('font_color')?> !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars fs-4 pe-1 ps-3"></i> <?=$page->manu_title?></button>
                <div class="collapse navbar-collapse p-3 px-4" id="navbarNav">
                      <ul class="navbar-nav">
                        <?php 
                            $data = SelectData('pages',"WHERE page_parent_id='$pageid' ORDER BY main_menu ASC");
                            while($row = $data->fetch_object()){?> 
                            <li class="nav-item">
                              <a class="nav-link  text-white"  href="page.php?page=<?=$pageurl?>&child=<?=$row->page_url;?>"  style="color:<?=sub_menu('font_color')?> !important;"><?=$row->manu_title;?></a>
                            </li>
                            <?php }?>
                      </ul>
                </div>
              </div>
       </nav>
     </div>

 	<!-- detail content --> 
 	<div class="row mx-0" style="background:<?php echo ( $pageinfo->global_color==1) ? settings('default_theam_color'):  $pageinfo->bg_color;?>;">
 		 <!--short sidebar -->
 		<div class="col-md-2 col-lg-2 pt-4 p-3 m-0 h-100 side-menu">
            <ul class="nav flex-column main_header">
                <li class="nav-item">                
                  <a class="nav-link nav_menu <?php if ($baseurl=='page.php?page='.$pageurl) { echo "active_menu";} ?>
                  "  href="page.php?page=<?=$pageurl?>"><i class="<?=$page->menu_icon?>" style="display: inline-block!important;transform: rotate(0deg);"></i> <?=$page->manu_title;?>
                    <?php if ($baseurl=='page.php?page='.$pageurl) { echo "<i class='fas fa-location-arrow' style='display: inline-block!important;transform: rotate(45deg);'></i>";} ?>                                                   
                  </a>
                </li>
                    <?php 
                    $data = SelectData('pages',"WHERE page_parent_id='$pageid' ORDER BY main_menu ASC");
                    while($row = $data->fetch_object()){?>
                <li class="nav-item">
                    <a class="nav-link nav_menu 
                        <?php if ($baseurl=='page.php?page='.$pageurl.'&child='.$row->page_url) { echo "active_menu";} ?>                    
                        " href="page.php?page=<?=$pageurl?>&child=<?=$row->page_url;?>"><i class="<?=$row->menu_icon?>" style="display: inline-block!important;transform: rotate(0deg);"></i> <?=$row->manu_title;?>
                        <?php if ($baseurl=='page.php?page='.$pageurl.'&child='.$row->page_url) {  echo "<i class='fas fa-location-arrow' style='display: inline-block!important;transform: rotate(45deg);'></i>";} ?>                                                   
                   </a>
                </li>
            <?php } ?>
            </ul>	
 		</div>

        <div class="col-12 col-md-9 col-lg-8 pb-5 pt-4  <?=($pageinfo->Section_gap_off_on==0) ? "bg-white" : '' ;?>">                 
            <nav class="mb-3 d-md-none d-lg-none ">
                <ol class="nav" style="cursor: pointer;">
                    <li class="nav-link p-2 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-3 text-muted"></i></a> </li>
                    <li class="nav-link p-2 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-3 text-muted"></i></a></li>
                    <li class="nav-link p-2 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-3 text-muted"></i></a></li>
                    <li class="nav-link p-2 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-3 text-muted"></i></a></li>
                    <li class="nav-link p-2 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-3 text-muted "></i></a></li>
                </ol>                     
            </nav>

                            
        <div class="page_content" ><?=html_entity_decode($pageinfo->page_content)?></div> 
        <?php 
        $price_data = SelectData('prices', "WHERE price_page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
        if ($price_data->num_rows>0) {?>                      
            <!-- price table -->
            <div class="p-3 bg-white mt-4">
                <h3 class="section_title_page ps-2"><i class="fas fa-money-check-alt px-1"></i> <?=$pageinfo->Section_Title_Price?></h3>
                <div class="row mx-0">                       
                    <table class="table table-striped">
                        <?php while ($price = $price_data->fetch_object()) {?> 
                                <tr>
                                    <td style="width: 80%;" class="p-3" >
                                        <h5 ><?=$price->price_title?></h5>
                                        <p class="p-0 m-0"> <?=html_entity_decode($price->Price_Description)?></p>
                                    </td>
                                    <td><h5 class="p-0 m-0 pt-4"><?=$price->Priceamount?></h5></td>
                                </tr>
                        <?php } ?>
                    </table>   
                </div>
            </div>
        <?php } ?>
        <!-- price table end -->


        <!-- flowchart -->
        <?php 
        $i=1;
        $flowchart_data = SelectData('flowchart', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
        if ($flowchart_data->num_rows>0) {?>                
            <div class="flowchart bg-white p-3 mt-4" >
                <h3 class="section_title_page ps-2"><i class="fas fa-chart-line px-1"></i> <?=$pageinfo->Section_Title_Flowchart?></h3>
                <div class="">
                <?php while ($flowchart = $flowchart_data->fetch_object()) {?>
                    <!-- stage1 -->
                    <div class="bg-light p-3  mb-2">
                        <h6 class="border-0 border-bottom pb-2" style="width: 40px;"><?=$flowchart->Process_Title?></h6>
                        <h5><?=$flowchart->Flowchart_Titel?></h5>
                        <p><?=html_entity_decode($flowchart->Flowchart_descripstion)?></p>
                    </div>
                <?php } ?>
                </div>
            </div>
        <?php } ?>
        <!-- flowchart end -->

        <!-- FAQ -->                 
        <?php $faq_data = SelectData('faq', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
        if ($faq_data->num_rows>0) {?>      
            <div class="faq bg-white p-3 mt-4">  
                <h3 class="section_title_page "><i class="fas fa-question-circle px-1"></i><?=$pageinfo->Section_Title_Faq?></h3>                   
                <?php while ($faq = $faq_data->fetch_object()) {?>
                <button class="accordion p-1" style="color:<?=$faq->Font_color?>"><?=$faq->faq_title?></button>
                <div class="panel"><p class="my-2"><?=html_entity_decode($faq->faq_descrippstion)?></p></div><?php } ?>                
            </div>
        <?php } ?>
        <!-- FAQ End--> 


        <!-- download fle -->
        <?php  $service_file_data = SelectData('page_file', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
        if ($service_file_data->num_rows>0) {?>  
            <div class="downlod_file p-3 mt-4 bg-white">
                <h3 class="section_title_page"><i class="fas fa-file-download px-1"></i><?=$pageinfo->Section_Title_File?></h3>
                <li class=" px-3 my-4 d-flex justify-content-between align-items-start">
                    <p class="fw-bold m-0 p-0 ">TTLE</p>
                    <p class="fw-bold m-0 p-0">LAST MODIFIED</p>
                </li>
            <div class="downlod_file_item">
                <ul class="list-group list-group-flush">     
                <?php  while ($servicefile = $service_file_data->fetch_object()) {?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <a href="assets/servicefile/<?=$servicefile->file_name?>" class="text-dark" download><i class="fas fa-file-pdf px-1 text-danger"></i> <?=$servicefile->file_title?></a>
                        <span><?=$servicefile->fileuploaddate?></span>
                    </li>  
                <?php } ?>                            
                </ul>
            </div>
        </div>
        <?php } ?> 
            <!-- download fle end -->   

        <!-- clients -->                 
        <?php
        if ($pageinfo->client_off_on!=0) {
            $client_data = SelectData('our_clients', "ORDER BY client_countri ASC");?>                 
            <div class="p-4 faq  mt-5 bg-white">
                <h3 class="section_title_page">
                <i class="fas fa-users px-1"></i>Our Clients</h3>
                <!-- acordng1 -->
                <?php while ($client = $client_data->fetch_object()) {?>
                <button class="accordion fw-bold" style="background-color:<?=$client->bgcolor?>; color:<?=$client->Font_color?>; font-size:18px; margin-bottom:5px;"><?=$client->client_countri?></button>
                <div class="panel" style="background-color:<?=$client->bgcolor?>;">
                    <img class="py-2" src="assets/mediacenter/client/<?=$client->client_logo?>" alt="" width="200" >
                    <p class="mb-3"><?=$client->client_ditils?></p>
                </div><?php } ?>                
            </div>
        <?php } ?>
        <!-- clients End-->  

        <!-- image_gallay-->
        <?php 
        $imagedata = SelectData('image_gallay',"WHERE page_id={$pageinfo->page_id}");
        if ($imagedata->num_rows>0) {?>
            <div class="row p-4 mb-5">
                <!-- <h4 class="text-danger mb-4"><i class="fas fa-users px-1"></i>Our Team</h4>                   -->
                    <div class="col-12">                                                                                           
                        <div class="owl-carousel">
                            <?php
                            $imgrow = $imagedata->fetch_object();
                            foreach (explode(",",$imgrow->images) as $value) {?>
                                <img src="assets/mediacenter/image_gallay/<?=$value?>" style="width:100%; height:100px">
                        <?php } ?>
                    </div>

                </div> 
            </div> 
            <?php } ?>           
                    

            <!-- team -->
            <?php 
                $team_data = SelectData('page_team', "INNER JOIN our_team ON page_team.team_member_id=our_team.team_id WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC ");
                if ($team_data->num_rows>0) {?>
                    <div class="row bg-white p-3 mt-4 mx-0 gx-3">
                        <h3 class="section_title_page mb-4"><i class="fas fa-users px-1"></i>Our Team</h3>
                        <?php while ($teaminfo = $team_data->fetch_object()) {?>                    
                            <div class="col-md-3">                                        
                                <div class="team-card" >    
                                    <div class="team_icon"><i class="fas fa-phone-alt"></i><i class="fas fa-envelope"></i></div>                                      
                                    <div class="profile_pic"><a href="team.php?team=<?=str_replace(' ', '-', $teaminfo->Name)?>"><img src="assets/mediacenter/team/<?=$teaminfo->Profile_pic?>" alt="" > </a> </div>                                            
                                    <div class="team_info">
                                        <b><?=$teaminfo->Name?></b>
                                        <p ><?=$teaminfo->Designation?></p> 
                                    </div>                                 
                                </div>                                                            
                            </div> 
                        <?php }?>
                    </div> 
            <?php } ?>


            <?php if ($pageinfo->services_off_on!=0) {
            $servicedata = SelectData('our_services',"ORDER BY service_name ASC");?>
            <div class="our_services">        
                <div class="row mx-3 mt-5">
                    <h3 class="section_title_page p-3 mb-4"><i class="fas fa-briefcase pe-2"></i> Our serives</h3>

                    <?php while ($service = $servicedata->fetch_object()) {?> 
                    <div class="col-md-3 d-flex align-self-stretch">
                        <div class="service_card" style="background-color: <?=$service->service_bgcolor?>;">
                            <i class="<?=$service->service_icon?>"></i>
                            <h3 class="h3 py-3"><?=$service->service_name?></h3>
                            <div class="button_bar">
                                <?=html_entity_decode($service->service_text_link)?>
                            </div>
                        </div>
                    </div>   
                    <?php } ?>

                </div>
            </div>
            <?php } ?>               
        </div> 
        
        <div class="col-lg-2 d-md-none d-lg-block bg-white pt-4"> 
            <div class="lawyer">
                <?php 
                    if ($pageinfo->contact_parson!=0) {
                        $teag_data = SelectData('our_team', "WHERE team_id='$pageinfo->contact_parson'");
                        $contentinfo = $teag_data->fetch_object();?>      

                        <h6 class="row section_title m-0" id="ylhbtn">
                            <div class="col-11 p-0"><i class="fas fa-user-graduate pe-2"></i><?=settings('Your_Lawyer_text');?></div>
                            <div class="col-1 p-0 text-end"><i class="fal fa-angle-down"></i></div> </h6> 

                                <div class="team-card" id="ylh" >    
                                    <div class="team_icon">
                                        <a href="tel:<?=$contentinfo->Phone_No?>"><i class="fas fa-phone-alt"></i></a> 
                                        <a href="mailto:<?=$contentinfo->Email?>"><i class="fas fa-envelope"></i></a>
                                    </div>                                      
                                    <div class="profile_pic"> <a href="team.php?team=<?=str_replace(' ', '-', $contentinfo->Name)?>"><img src="assets/mediacenter/team/<?=$contentinfo->Profile_pic?>" alt="" > </a></div>                                            
                                    <div class="team_info">
                                        <b><?=$contentinfo->Name?></b>
                                        <p ><?=$contentinfo->Designation?></p> 
                                    </div>                                 
                                </div> 
                                
                <?php } ?>

                <?php //Read More. . . 
                $red_data = SelectData('read_more', "WHERE page_id={$pageinfo->page_id}");
                if ($red_data->num_rows>0) {
                    $redmore = $red_data->fetch_object();?>              
                    <h6 class="row m-0 section_title mt-3 readbtn" style="background:<?php echo $pageinfo->contact_parson_color;?>;">
                    <div class="col-11 p-0"><i class="fas fa-book-reader pe-1"></i> Read More</div> <div class="col-1 p-0 text-end"><i class="fal fa-angle-down"></i></div></h6>
                    <div class="px-2 read " style="display: none; text-decoration:none !important;" ><?=html_entity_decode($redmore->ditails) ;?></div>                               
                    
                <?php } ?> 
            </div>
        </div>   

    </div><!-- row end  -->
</main>
<?php include"inc/footer.php";?>

<script>
    $(document).ready(function(){

        $("#ylhbtn").click(function(){
            $("#ylh").toggle(300);
        });

        $(".readbtn").click(function(){
            $(".read").toggle(200);
        });

    });
</script>
