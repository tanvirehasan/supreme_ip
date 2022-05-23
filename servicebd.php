<?php include"inc/header.php";


if (isset($_GET['service'])) {
    $serviceid = $_GET['service'];

    $catdata = SelectData('category', "WHERE cat_id='$serviceid'");
    $cats = $catdata->fetch_object();
    
} ?>



<!-- main content -->
 <main class="col-md-9 ms-sm-auto col-lg-10  px-md-0" >
 	<div class="header_img bg-dark ">
 		<div class="row mx-0 m-0 p-0">
 			<div class="col-8  m-0 p-0"style="background-image: url('assets/brand/cat1.jpg');">
 				<h1 class="text-white text-center h3"><?=$cats->category_name;?></h1>
 			</div>
 			<div class="col-4 m-0 p-0 position-relative">
 				<div class="d-flex flex-column">
 					<img src="assets/brand/cat2.webp"style=" height: 160px;">
 					<img src="assets/brand/cat3.jpg"style="height: 140px;">
 					
 				</div>
 				<div class="overlay"></div>
                <!-- breadcrumb -->
                    <nav aria-label="" class="breadcrumb_menu">
                        <ol class="nav" style="cursor: pointer;">
                            <li class="nav-link"><a href="service.php?service=<?=$serviceid?>" class="text-white">English</a></li>                           
                            <li class="nav-link share px-0 "><i class="fas fa-envelope fs-5 text-white"></i></li>
                            <li class="nav-link "onclick="window.print()"><i class="fas fa-print text-white fs-5"></i></li>
                        </ol>

                    </nav>
                <div class="share_icon">
                    <ul class="nav ">                        
                        <a class="nav-link px-0 px-1 text-white" aria-current="page" href="#"><i class="fab fa-linkedin-in "></i></a>
                        <a class="nav-link px-0 px-1 text-white" aria-current="page" href="#"><i class="fab fa-linkedin-in "></i></a>
                         <a class="nav-link px-0 px-1 text-white" aria-current="page" href="#"><i class="fab fa-linkedin-in "></i></a>
                        <a class="nav-link px-0 px-1 text-white" aria-current="page" href="#"><i class="fab fa-linkedin-in "></i></a>
                    </ul>
                </div>
 			</div>
 		</div>
 	</div>
     <!-- mobile side menu -->
     <div class="p-1  d-md-none d-sm-block my-3">
        
         <nav class="navbar navbar-expand-lg navbar-light bg-danger">
              <div class="container-fluid">
               
                <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars fs-4 text-white"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                      <ul class="navbar-nav align-items-end">
                        <?php 
                            $data = SelectData('sub_category',"WHERE category='$serviceid'");
                            while($row = $data->fetch_object()){?> 
                            <li class="nav-item">
                              <a class="nav-link  text-white"  href="servicebd.php?service=<?=$serviceid?>"><?=$row->sub_name;?></a>
                            </li>
                            <?php }?>
                      </ul>
                </div>
              </div>
       </nav>
     </div>
     <div class="bg-dark  d-md-none d-sm-block">
         <h6 class="text-white p-2">Trademark</h4>
     </div>
 	<!-- detail content -->
 	<div class="row mx-0 bg-dark px-md-4">
 		 <!--short sidebar -->
 		<div class="col-2 mt-2  p-0 h-50  side-menu ">
            <ul class="nav flex-column main_header">


                <?php 
                    $data = SelectData('sub_category',"WHERE category='$serviceid'");
                    while($row = $data->fetch_object()){?> 

                <li class="nav-item">
                    <a class="nav-link nav_menu  active_menu" href="servicebd.php?service=<?=$serviceid?>&services=<?=$row->sub_id;?>"><?=$row->sub_name;?></a>
                </li>


            <?php } ?>


            </ul>	
 		</div>


        <?php 

            if (!isset($_GET['services'])) {
                $service_data = SelectData('services', "WHERE catagory='$serviceid' AND Language='1' ");
            }else{
                $service_data = SelectData('services', "WHERE subcatagory={$_GET['services']} AND Language='1'");

            }            
                $services = $service_data->fetch_object();

            if (mysqli_num_rows($service_data)>0) {               

        ?>



 		<div class="col-12 mt-md-2 col-md-10 col-lg-10 m-0 p-0">
 			<div class="cat_content ">                 
                       <!-- about us -->
                <div class="row mx-0 my-3 p-3 ">                  
                    <div class="col-12 col-md-10"><h2 class=""><?=$services->serive_title?></h2><?=$services->servicedescription?></div>
                    <div class="lawyer col-12 col-md-2 text-center bg-light m-0 p-0">
                        <div class="card m-0 p-0" style="border: 1px solid red;">
                        <h6 class="bg-danger text-white p-3 m-0"><i class="fas fa-user-graduate pe-2"></i>Your Lawyer is here</h6>                           
                          <img src="assets/brand/lawyer.jpg" class="card-img-top" alt="...">
                          <div class="card-body bg-danger">
                            <b class=" text-center text-white" style="font-size:13px;">Adv. Chaudhury Reagan</b>
                            <p class=" text-center text-white" style="font-size:10px;">IP Attorney & CEO</p>
                            <div class=" text-center about_social m-0 p-0">
                                <a href="" class=""><i class="fab fa-facebook-f px-1"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fas fa-envelope"></i></a>
                                <a href=""><i class="fab fa-whatsapp"></i></a>
                                <a href=""><i class="fab fa-weixin"></i></a> 
                            </div>
                          </div>
                        </div>

                        




                    </div>
                </div>



        <?php 
            $price_data = SelectData('prices', "WHERE service_id={$services->id}");
            if ($price_data->num_rows>0) {?>                        
                    
                <!-- price table -->
                <div class=" p-3">
                    <h4 class="text-center text-danger mb-4"><i class="fas fa-hands-usd px-1 text-dark"></i>Fee Schedule</h4>
                    <div class="row mx-0 my-5">

                    <?php while ($price = $price_data->fetch_object()) {?>                 
                        <div class="col-12 col-md-4  pb-3">
                            <div class="bg-light rounded d-flex flex-column justify-content-center">
                                <div class="icon text-center py-1 mt-4">
                                    <img src="" width="80">
                                    <i class="<?=$price->price_icon?>"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.4);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary"><?=$price->price_title?></h5>
                                    <span class="text-center" style="font-size: 12px;"><?=$price->price_subtile?></span>
                                </div> 
                                <div class="price text-center text-danger h4">
                                    <span><i class="fas fa-dollar-sign px-1 text-dark"></i><?=$price->Priceamount?></span>
                                </div>
                                <div class="p-5"><?=$price->Price_Description?></div>


                                <div class="icon text-center p-2 "style="background-color:rgba(255,0,0,0.5);">
                                    <a href="" class=" text-white">hf@gmail.com
                                         <i class=" text-center fal fa-arrow-right"></i>      
                                    </a>
                                </div>
                            </div>
                        </div>
                     <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <!-- price table end -->





        <!-- flowchart -->
        <?php 
            $i=1;
            $flowchart_data = SelectData('flowchart', "WHERE Flowchart_service_id={$services->id}");
            if ($flowchart_data->num_rows>0) {?>                
                <div class="flowchart mb-4">
                    <h4 class="text-center ps-4 text-danger mb-4"><i class="fas fa-chart-network px-1 text-dark"></i>Trademark Registration Flowchart in Bangladesh</h4>
                    <div class="p-3">

                    <?php while ($flowchart = $flowchart_data->fetch_object()) {?>
                        <!-- stage1 -->
                        <div class="bg-light p-2 ost-multi-header mb-4">
                            <h3 class="text-danger">STAGE:<?=$i++?></h3>
                            <h5><?=$flowchart->Flowchart_Titel?></h5>
                            <p><?=$flowchart->Flowchart_descripstion?></p>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <!-- flowchart end -->



            <!-- FAQ -->                 
            <?php $faq_data = SelectData('faq', "WHERE faq_service_id={$services->id}");
            if ($faq_data->num_rows>0) {?>                   
                <div class="p-4 faq"style="background-color:rgba(255,0,0,0,.3);">
                    <h4 class="text-center ps-4 text-danger mb-4">
                    <i class="fas fa-question-circle px-1 text-dark"></i>FAQ</h4>
                     <!-- acordng1 -->
                    <?php while ($faq = $faq_data->fetch_object()) {?>
                    <button class="accordion"><?=$faq->faq_title?></button>
                    <div class="panel"><p class="my-2 mb-3"><?=$faq->faq_descrippstion?></p></div><?php } ?>                
                </div>
            <?php } ?>
            <!-- FAQ End--> 





            <!-- download fle -->
            <?php  $service_file_data = SelectData('service_file', "WHERE file_service_id={$services->id}");
            if ($service_file_data->num_rows>0) {?>  
                <div class="downlod_file p-3 my-5">
                    <h4 class="text-center ps-4 text-danger mb-4"><i class="fas fa-file-download px-1 text-dark"></i>DOWNLOAD Trademark Classification</h4>
                   <p class="">The Bangladesh trademark office follows the NICE Classification in addition to a list of goods and services maintained by the Bangladesh Trademarks Office. The registration of marks is acceptable in classes 1 – 34 in respect of goods and classes 35 – 45 in respect of services. The Bangladesh trademark office accepts only single class applications.</p>
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
             </div>
         

     <?php }else{ 

        echo "You Have No Data";

      } ?>


        </div>
 	</div> 	
</main>
    </div>
 </div>

<?php include"inc/footer.php";?>