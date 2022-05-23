<?php include "inc/header.php";?>
<!-- main content -->
 <main class="col-md-9 ms-sm-auto col-lg-10  px-md-0" >
 	<div class="header_img bg-dark ">
 		<div class="row mx-0 m-0 p-0">
 			<div class="col-8  m-0 p-0"style="background-image: url('assets/brand/cat1.jpg');">
 				<h1 class="text-white text-center h3">OFFER & TRAINNG</h1>
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
                            <li class="nav-link share px-0 "><i class="fas fa-share-alt-square share text-white fs-5"></i></li>
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
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars fs-4 text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav align-items-end">
                          <?php           
                            $data = SelectData('offer_training','');
                            while($row = $data->fetch_object()){?> 
                            <li class="nav-item">
                              <a class="nav-link  text-white"  href="offer_training.php?offerid=<?=$row->id?>"><?=$row->category_name?></a>
                            </li>
                           <?php }?>
                      </ul>
                </div>
              </div>
       </nav>
     </div>
 	<!-- detail content -->
 	<div class="row mx-0 bg-dark px-md-4">
 		 <!--short sidebar -->
 		<div class="col-2 mt-2  p-0 h-50  side-menu ">
           <ul class="nav flex-column main_header">
            <?php
                $data = SelectData('offer_training','');
                while($row = $data->fetch_object()){?> 
                <li class="nav-item">
                    <a class="nav-link nav_menu  active_menu " href="offer_training.php?offerid=<?=$row->id?>"><?=$row->category_name?></a>
                </li>
              <?php } ?>
            </ul>   
 		</div>
 		<div class="col-12 mt-md-2 col-md-10 col-lg-10 m-0 p-0">
 			<div class="cat_content ">
             
                <div class="row mx-0 p-3 mb-5">
                    <p>Recent press releases and interviews with Hodgson Russ attorneys</p> 
                <!-- search select start -->
               
                    <div class="col-12 col-md-6">
                        <select class="form-select form-select-md mb-4" aria-label=".form-select-lg example">
                            <option class="" selected>-course name-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <select class="form-select form-select-md mb-4" aria-label=".form-select-lg example">
                            <option selected>-trainer name-</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="Start Date (MM/DD/YYYY)" onfocus="(this.type='date')"onblur="if(this.value==''){this.type='text'}" class="form-control mb-4" name="">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="End Date (MM/DD/YYYY)" onfocus="(this.type='date')"onblur="if(this.value==''){this.type='text'}" class="form-control mb-4" name="">
                    </div>
                    <!-- search box -->
					
					<div class="col-8 col-md-6">
						<input type="text" placeholder="Keyword" class="form-control " name="">
					</div>
					<div class="col-2">
						<button class="btn btn-danger px-4">Search</button>
					</div>

                </div>   
                    <!-- news/blog select start -->
                    <div class="p-3">
                        <a href="detail.php">
                            <div class="card border-0 mb-3" style="">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://supremeip.com/wp-content/uploads/2021/12/Journal.png" width="190" height="100%" alt="..." style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body px-0 ms-0">
                                            <h5 class="card-title text-danger fw-bold">Bangladesh Trademark Journal 304</h5>
                                            <p class="card-text text-dark">The Trademark Authority has published the latest Journal 304 ( Download) on 09-Nov-2021. It is now open for opposition for 60 days from date of publication. It </p>
                                            <p class="card-text" style="font-size: 11px;">
                                                  <span class="text-muted">Last Date</span> on January 27, 2022
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- 1 -->
                         <a href="detail.php">
                            <div class="card border-0 mb-3" style="">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://supremeip.com/wp-content/uploads/2021/12/Journal.png" width="190" height="100%" alt="..." style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body px-0 ms-0">
                                            <h5 class="card-title text-danger fw-bold">Bangladesh Trademark Journal 304</h5>
                                            <p class="card-text text-dark">The Trademark Authority has published the latest Journal 304 ( Download) on 09-Nov-2021. It is now open for opposition for 60 days from date of publication. It </p>
                                            <p class="card-text" style="font-size: 11px;">
                                                 By <span class="text-muted">Last Day</span> on January 27, 2022
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <div class="my-5 mb-5 p-3">
                 <h4 class="text-center ps-4 text-danger mb-5"><i class="fab fa-buffer px-1 text-dark"></i>Recent Course</h4>
                 <div class="row mt-5">
                     <!-- post1 -->
                     
                        <div class="col-12 col-md-3 mb-4">
                            <a href="detail_offer_training.php">
                            <div class="card border-0" >
                                <img src="https://icstask.com/wp-content/uploads/2021/10/trademark-egistration.jpg"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h6 class="card-title text-dark">trademark registration</h6>
                                     <span class="my-0 mb-5 "style="font-size:11px;"> <span class="text-danger fw-bold">Last Date</span> on January 27, 2022</span>  
                                </div>
                                
                            </div>
                             </a>
                         </div>
                     <div class="col-12 col-md-3 mb-4">
                            <a href="detail_offer_training.php">
                            <div class="card border-0" >
                                <img src="https://www.chinaimportal.com/wp-content/uploads/2018/04/trademark.jpg"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h6 class="card-title text-dark">trademark registration</h6>
                                     <span class="my-0 mb-5 "style="font-size:11px;"> <span class="text-danger fw-bold">Last Date</span> on January 27, 2022</span>
                                   
                                </div>
                               
                            </div>
                              </a>
                         </div>
                      <div class="col-12 col-md-3 mb-4">
                            <a href="detail_offer_training.php">
                            <div class="card border-0" >
                                <img src="https://www.aapkaconsultant.com/blog/wp-content/uploads/2018/01/KNOW-ABOUT-PATENT.jpg"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h6 class="card-title text-dark">trademark registration</h6>
                                      <span class="my-0 mb-5 "style="font-size:11px;"> <span class="text-danger fw-bold">Last Date</span> on January 27, 2022</span>
                                  
                                   
                                </div>
                                 </a>
                            </div>
                       
                         </div>
                        
                         <div class="col-12 col-md-3 mb-4">
                            <a href="detail_offer_training.php">
                            <div class="card border-0" >
                                <img src="https://de927adv5b23k.cloudfront.net/wp-content/uploads/2017/10/28114616/copyright1.jpg" height="100%"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h6 class="card-title text-dark">trademark registration</h6>
                                      <span class="my-0 mb-5 "style="font-size:11px;"> <span class="text-danger fw-bold">Last Date</span> on January 27, 2022</span>
                                  
                                   
                                </div>
                                 </a>
                            </div>
                       
                         </div>
                         <div class="col-12 col-md-3 mb-4">
                            <a href="detail_offer_training.php">
                            <div class="card border-0" >
                                <img src="https://www.kashishworld.com/blog/wp-content/uploads/2019/08/blog.jpg"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h6 class="card-title text-dark">trademark registration</h6>
                                      <span class="my-0 mb-5 "style="font-size:11px;"> <span class="text-danger fw-bold">Last Date</span> on January 27, 2022</span>
                                  
                                   
                                </div>
                                 </a>
                            </div>
                       
                         </div>
                    
                    </div>
                </div>
                   
            </div>

        </div>
    </div>
    
 </main>
                  
</script>
<?php include"inc/footer.php";?>