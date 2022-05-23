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
        if (mysqli_num_rows($page_data)>0) {               
?>

<!-- main content -->
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-0 m-0 p-0" >
 	<div class="header_img bg-dark">
 		<div class="row mx-0 m-0 p-0">
 			<div class="col-8  m-0 p-0" style="background-image: url('assets/mediacenter/<?= ($pageinfo->bgimag_off_on==1) ? $pageinfo->header_bg_img : '' ;?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
 				<h1 class="text-white h2"><?=$pageinfo->page_title?></h1>                
 			</div>
 			<div class="col-4 m-0 p-0 position-relative">
 				<div class="d-flex flex-column">
 					<img src="assets/mediacenter/<?=$pageinfo->header_img_two?>"style="height:200px;"> 					
 				</div>
 				<div class="overlay" style="background-color:<?=$pageinfo->header_overlay_color?>; opacity: 0.7;"></div>
                <!-- breadcrumb -->
                    <nav aria-label="" class="breadcrumb_menu">
                        <ol class="nav" style="cursor: pointer;">
                            <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-5 text-white"></i></a> </li>
                            <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-5 text-white"></i></a></li>
                            <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-5 text-white"></i></a></li>
                            <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-5 text-white"></i></a></li>
                            <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-5 text-white "></i></a></li>
                            <li class="nav-link p-1 "><a href="print.php?id=<?= $pageinfo->page_id?>" target="null" > <i class="fas fa-print text-white fs-5"></i> </a> </li>
                        </ol>                     
                    </nav>                   
 			</div>
 		</div>
 	</div>


     <!-- mobile side menu -->
     <div class="p-1  d-md-none d-sm-block my-3">        
         <nav class="navbar navbar-expand-lg navbar-light bg-danger">
              <div class="container-fluid">               
                <button class="navbar-toggler bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars fs-4 pe-3"></i><?=$page->page_title?></button>
                <div class="collapse navbar-collapse " id="navbarNav">
                      <ul class="navbar-nav align-items-end">
                            <li class="nav-item">
                              <a class="nav-link  text-white"  href="page.php?page=<?=$pageurl?>"><?=$page->manu_title;?></a>
                            </li>
                        <?php 
                            $data = SelectData('pages',"WHERE page_parent_id='$pageid' ORDER BY main_menu ASC");
                            while($row = $data->fetch_object()){?> 
                            <li class="nav-item">
                              <a class="nav-link  text-white"  href="page.php?page=<?=$pageurl?>&child=<?=$row->page_url;?>"><?=$row->manu_title;?></a>
                            </li>
                            <?php }?>
                      </ul>
                </div>
              </div>
       </nav>
     </div>

 	<!-- detail content -->
 	<div class="row mx-0 pb-5 pe-2" style="min-height: 800px; background-color:<?php echo $page->bg_color;?>;">

 		 <!--short sidebar -->
 		<div class="col-2 mt-2  p-0 h-100  side-menu">
            <ul class="nav flex-column main_header">
                <li class="nav-item">
                  <a class="nav-link nav_menu <?php if ($baseurl=='page.php?page='.$pageurl) { echo "active_menu";} ?>
                  "  href="page.php?page=<?=$pageurl?>"><?=$page->manu_title;?>
                    <?php if ($baseurl=='page.php?page='.$pageurl) { echo "<span class='h5'>&#8594;</span>";} ?>                                                   

                </a>
                </li>
                <?php 
                    $data = SelectData('pages',"WHERE page_parent_id='$pageid' ORDER BY main_menu ASC");
                    while($row = $data->fetch_object()){?>
                <li class="nav-item">
                    <a class="nav-link nav_menu 
                    <?php if ($baseurl=='page.php?page='.$pageurl.'&child='.$row->page_url) { echo "active_menu";} ?>                    
                    " href="page.php?page=<?=$pageurl?>&child=<?=$row->page_url;?>"><?=$row->manu_title;?>
                    <?php if ($baseurl=='page.php?page='.$pageurl.'&child='.$row->page_url) { echo "<span class='h5'>&#8594;</span>";} ?>                                                   
                </a>
                </li>
            <?php } ?>
            </ul>	
 		</div>

 		<div class="col-12 mt-2 col-md-10 m-0 p-0 <?=($pageinfo->Section_gap_off_on==0) ? "bg-white" : '' ;?>">  
            <div class="row mx-0 bg-white p-4" >                  
                <div class="col-12 col-md-10 m-0 py-4">
                   <nav class="mb-3 d-md-none d-lg-none ">
                        <ol class="nav" style="cursor: pointer;">
                            <li class="nav-link p-2 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-3 text-muted"></i></a> </li>
                            <li class="nav-link p-2 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-3 text-muted"></i></a></li>
                            <li class="nav-link p-2 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-3 text-muted"></i></a></li>
                            <li class="nav-link p-2 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-3 text-muted"></i></a></li>
                            <li class="nav-link p-2 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-3 text-muted "></i></a></li>
                        </ol>                     
                    </nav>
                    <?=$pageinfo->page_content?>
                </div>

                <div class="lawyer col-12 col-md-2 bg-light m-0 p-0">
                <?php 
                    if ($pageinfo->contact_parson!=0) {
                        $teag_data = SelectData('our_team', "WHERE team_id='$pageinfo->contact_parson'");
                        $contentinfo = $teag_data->fetch_object();?>                          

                        <div class="card m-0 p-0 text-center" style="border: 1px solid <?php echo $pageinfo->contact_parson_color;?>;">
                        <h6 class="p-3 m-0" style="background-color:<?php echo $pageinfo->contact_parson_color;?>;color:<?php echo $pageinfo->contact_parson_text_color;?>" ><i class="fas fa-user-graduate pe-2"></i><?=$pageinfo->contact_parson_titel?></h6>
                          <img src="assets/mediacenter/team/<?=$contentinfo->Profile_pic?>" class="card-img-top" alt="...">
                          <div class="card-body" style="background-color:<?php echo $pageinfo->contact_parson_color;?>; color:<?php echo $pageinfo->contact_parson_text_color;?>">
                            <b class=" text-center" style="font-size:13px;"><?=$contentinfo->Name?></b>
                            <p class=" text-center" style="font-size:10px;"><?=$contentinfo->Designation?></p>
                            <p class=" text-center  p-0 m-0" style="font-size:12px;"><?=$contentinfo->Phone_No?></p>
                            <p class=" text-center  p-0 m-0" style="font-size:12px;"><?=$contentinfo->Email?></p>

                          </div>
                        </div>
                <?php } ?>

                <?php 
                    $red_data = SelectData('read_more', "WHERE page_id={$pageinfo->page_id}");
                    if ($red_data->num_rows>0) {
                        $redmore = $red_data->fetch_object();?>                
                        <div class="Reletedservice">
                         <b class="p-2 bg-danger mt-2 d-block text-white">Read More </b>
                                <div class="p-2 pt-4" style="line-height: 8px; color:tomato !important; font-size:14px">
                                    <?=$redmore->ditails;?>
                                </div>                               
                        </div>
                        <?php } ?> 
                    </div>
                </div>

        <?php 
            $price_data = SelectData('prices', "WHERE price_page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
            if ($price_data->num_rows>0) {?>                      
                <!-- price table -->
                <div class="p-4 mt-5 bg-white">
                    <h4 class="text-danger ps-2"><i class="fas fa-money-check-alt px-1"></i> <?=$pageinfo->Section_Title_Price?></h4>
                    <div class="row mx-0 my-5">                       
                        <table class="table table-striped">
                            <?php while ($price = $price_data->fetch_object()) {?> 
                                    <tr>
                                        <td style="width: 80%;" class="p-3" >
                                            <h4 style="font-family: bangla-regular, arial" ><?=$price->price_title?></h4>
                                            <p class="p-0 m-0" style="font-family:bangla-regular !important"> <?=strip_tags($price->Price_Description)?></p>
                                        </td>
                                        <td><h4 class="p-0 m-0 pt-4" style="font-family: bangla-regular, arial" ><?=$price->Priceamount?></h4></td>
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
                <div class="flowchart p-4 mt-5 bg-white">
                    <h4 class="ps-2 text-danger mb-4"><i class="fas fa-chart-line px-1"></i> <?=$pageinfo->Section_Title_Flowchart?></h4>
                    <div class="p-3">

                    <?php while ($flowchart = $flowchart_data->fetch_object()) {?>
                        <!-- stage1 -->
                        <div class="bg-light p-2 ost-multi-header mb-4">
                            <h2 class="border-0 border-bottom pb-2" style="width: 40px;"><?=$flowchart->Process_Title?></h2>
                            <h5><?=$flowchart->Flowchart_Titel?></h5>
                            <p><?=$flowchart->Flowchart_descripstion?></p>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <!-- flowchart end -->

            <!-- FAQ -->                 
            <?php $faq_data = SelectData('faq', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
            if ($faq_data->num_rows>0) {?>                   
                <div class="p-4 faq  mt-5 bg-white">
                    <h4 class="text-danger mb-4">
                    <i class="fas fa-question-circle px-1"></i><?=$pageinfo->Section_Title_Faq?></h4>
                     <!-- acordng1 -->
                    <?php while ($faq = $faq_data->fetch_object()) {?>
                    <button class="accordion fw-bold " style="background-color:<?=$faq->bgcolor?>; color:<?=$faq->Font_color?>"><?=$faq->faq_title?></button>
                    <div class="panel"><p class="my-2 mb-3"><?=$faq->faq_descrippstion?></p></div><?php } ?>                
                </div>
            <?php } ?>
            <!-- FAQ End--> 


            <!-- download fle -->
            <?php  $service_file_data = SelectData('page_file', "WHERE page_id={$pageinfo->page_id} ORDER BY serial_list ASC");
            if ($service_file_data->num_rows>0) {?>  
                <div class="downlod_file p-3 mt-5 bg-white">
                    <h4 class="text-danger mb-4"><i class="fas fa-file-download px-1"></i><?=$pageinfo->Section_Title_File?></h4>
                    <li class=" px-3 my-4 d-flex justify-content-between align-items-start">
                        <span class="fw-bold text-danger">TTLE</span>
                        <span class="fw-bold text-danger">LAST MODIFIED</span>
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
            <?php $client_data = SelectData('our_clients', "ORDER BY client_countri ASC");
            if ($client_data->num_rows>0) {?>                   
                <div class="p-4 faq  mt-5 bg-white">
                    <h4 class="text-danger mb-4">
                    <i class="fas fa-users px-1"></i>Our Clients</h4>
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
                <div class="row  p-4  mb-5">
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




            
            

    <?php 
        $team_data = SelectData('page_team', "INNER JOIN our_team ON page_team.team_member_id=our_team.team_id WHERE page_id={$pageinfo->page_id}");
        if ($team_data->num_rows>0) {?>
            <div class="row  p-4  mb-5">
                <h4 class="text-danger mb-4"><i class="fas fa-users px-1"></i>Our Team</h4>
                <?php while ($teaminfo = $team_data->fetch_object()) {?>                    
                    <div class="col-md-3 ">
                        <a href="team.php?profile=<?=$teaminfo->team_id?>" style="color:<?php echo $teaminfo->text_color?>; text-decoration: none;" >
                        <div class="card m-0 p-0 text-center team-card" style="border: 1px solid <?php echo $teaminfo->bgcolor;?>;">
                            <img src="assets/mediacenter/team/<?=$teaminfo->Profile_pic?>" class="card-img-top" alt="...">
                            <div class="card-body" style="background-color:<?php echo $teaminfo->bgcolor;?>; ">
                                <b class=" text-center" style="font-size:16px;"><?=$teaminfo->Name?></b>
                                <p class="text-center m-0" style="font-size:14px;"><?=$teaminfo->Designation?></p>
                                <hr style="width:50%; margin:5px auto; margin-bottom:10px; opacity: 0.1;" class="text-center">
                                <p class=" text-center  p-0 m-0" style="font-size:14px;"><?=$teaminfo->Phone_No?></p>
                                <p class=" text-center  p-0 m-0" style="font-size:14px;"><?=$teaminfo->Email?></p>
                            </div>
                        </div> 
                        </a>                      
                    </div> 
                <?php }?>
            </div> 
    <?php } ?>
                





     <?php }else{ 

        echo "You Have No Data";

      } ?>
            
         </div>
 	</div> 	
</main>
    </div>
 </div>

<?php include"inc/footer.php";?>