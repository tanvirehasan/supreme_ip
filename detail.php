<?php include "inc/header.php";?>
<!-- main content -->
 <main class="col-md-9 ms-sm-auto col-lg-10  px-md-0" >
 	<div class="header_img bg-dark ">
 		<div class="row mx-0 m-0 p-0">
 			<div class="col-8  m-0 p-0"style="background-image: url('assets/brand/cat1.jpg');">
 				<h1 class="text-white text-center h3">Bangladesh Trademark Journal 304</h1>
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
                                $data = SelectData('blognews_main_cat','');
                                while($row = $data->fetch_object()){?>  
                            <li class="nav-item">
                                <a class="nav-link nav_menu text-white text-capitalize" href="detail.php?detail=<?=$row->id?>"><?=$row->category_name?></a>
                            </li>
                        <?php }?> 
                      </ul>
                </div>
              </div>
       </nav>
     </div>
     <div class="bg-dark  d-md-none d-sm-block">
         <h6 class="text-white p-2">NEWS</h4>
     </div>
 	<!-- detail content -->
 	<div class="row mx-0 bg-dark px-md-4">
 		 <!--short sidebar -->
 		<div class="col-2 mt-2  p-0 h-50  side-menu ">
             <ul class="nav flex-column main_header">
                <?php 
                    $data = SelectData('blognews_main_cat','');
                    while($row = $data->fetch_object()){?>  
                <li class="nav-item">
                    <a class="nav-link nav_menu active_menu " href="detail.php?detail=<?=$row->id?>"><?=$row->category_name?></a>
                </li>
               <?php }?> 
               
            </ul>   	
 		</div>
 		<div class="col-12 mt-md-2 col-md-10 col-lg-10 m-0 p-0">
 			<div class="cat_content p-4">
              <!-- blog1 -->
            <h3 class="h4 text-dark">Proposed Changes to NYS’s Brownfield Cleanup Program Contained in the Governor’s Executive Budget</h3>
            <span class="my-0 mb-4 ">By <span class="text-muted">Joseph N. Endres</span> on January 27, 2022 <span class="text-danger fw-bold"><i class="fas fa-graduation-cap px-1"></i>category name</span></span>
            <p class="mt-2" style="font-size: 12px;">New York State’s Brownfield Cleanup Program (“BCP”) has proven to be one of the state’s most successful programs for spurring private-sector remediation and development of contaminated properties. As a quick overview, the state provides refundable tax credits that partially offset the costs of remediating and then developing brownfields in the state. By any economic measure, the program has delivered an excellent rate of return on the state’s tax-credit investment. Since the program’s inception in 2003, the numbers are compelling The issue in this case is whether the sale of laser technology used to treat dermatological ailments and related services constituted a taxable lease of tangible property or the provision of a nontaxable service. Petitioner provided to its dermatologist customers an ultraviolet light excimer laser system that generated and delivered targeted ultraviolet light to treat various skin conditions. Petitioner did not characterize the transactions as leases, nor did the customers receive the lasers for a set amount of time. Rather, Petitioner “consigned” the lasers to its customers and charged for “treatment codes,” which allowed the lasers to be used and treatments to be administered.The issue in this case is whether the sale of laser technology used to treat dermatological ailments and related services constituted a taxable lease of tangible property or the provision of a nontaxable service. Petitioner provided to its dermatologist customers an ultraviolet light excimer laser system that generated and delivered targeted ultraviolet light to treat various skin conditions. Petitioner did not characterize the transactions as leases, nor did the customers receive the lasers for a set amount of time. Rather, Petitioner “consigned” the lasers to its customers and charged for “treatment codes,” which allowed the lasers to be used and treatments to be administered.The issue in this case is whether the sale of laser technology used to treat dermatological ailments and related services constituted a taxable lease of tangible property or the provision of a nontaxable service. Petitioner provided to its dermatologist customers an ultraviolet light excimer laser system that generated and delivered targeted ultraviolet light to treat various skin conditions. Petitioner did not characterize the transactions as leases, nor did the customers receive the lasers for a set amount of time. Rather, Petitioner “consigned” the lasers to its customers and charged for “treatment codes,” which allowed the lasers to be used and treatments to be administered.The issue in this case is whether the sale of laser technology used to treat dermatological ailments and related services constituted a taxable lease of tangible property or the provision of a nontaxable service. Petitioner provided to its dermatologist customers an ultraviolet light excimer laser system that generated and delivered targeted ultraviolet light to treat various skin conditions. Petitioner did not characterize the transactions as leases, nor did the customers receive the lasers for a set amount of time. Rather, Petitioner “consigned” the lasers to its customers and charged for “treatment codes,” which allowed the lasers to be used and treatments to be administered. <br> <br>ble service. Petitioner provided to its dermatologist customers an ultraviolet light excimer laser system that generated and delivered targeted ultraviolet light to treat various skin conditions. Petitioner did not characterize the transactions as leases, nor did the customers receive the lasers for a set amount of time. Rather, Petitioner “consigned” the lasers to its customers and charged for “treatment codes,” which allowed the lasers to be used and treatments to be administered.The issue in this case is wheth
        </p>
           
            <!-- comment -->
            <div class="border-bottom border-3  border-secondary d-flex  my-3 ">
                <span class="text-muted fs-5 flex-grow-1 mb-3"><i class="fas fa-comment me-2"></i>comment</span>
                <div class="mb-3">
                    <a href=""><i class="fab fa-twitter-square text-danger fw-bold fs-4 mx-1"></i></a>
                    <a href=""><i class="fab fa-linkedin text-danger   fs-4  mx-1"></i></a>
                    <a href=""><i class="fas fa-envelope text-danger  fs-4  mx-1"></i></a>
                    <a href=""><i class="fab fa-facebook-square text-danger  fs-4  mx-1"></i></a>
                </div>
            </div>
              <!-- comment -->
            <form class="comment mt-3 mb-5">
                <h5>Post a comment:</h5>
                <input type="text" class="form-control mb-3" placeholder="Name*" required name="">
                <input type="text" class="form-control mb-3" placeholder="Email (not be published)*" required name="">
                <textarea  required class="mb-3 w-100" placeholder="comment*"></textarea>
                <button class="btn btn-danger  fs-6 my-4">Submit Comment</button>
                <p>*All fields are required.</p>
            </form>
            <!-- related post/blog -->
            <div class="my-5 mb-5">
                 <h4 class="text-center ps-4 text-danger mb-5"><i class="fas fa-comment-edit px-1 text-dark"></i>Related Post</h4>
                 <div class="row mt-5">
                     <!-- post1 -->
                     
                        <div class="col-12 col-md-4 mb-4">
                            <a href="detail.php">
                            <div class="card border-0" >
                                <img src="https://supremeip.com/wp-content/uploads/2021/12/Journal.png"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Bangladesh Trademark Journal 304</h5>
                                     <span class="my-0 mb-5 "style="font-size:11px;">By <span class="text-muted">Joseph N. Endres</span> on January 27, 2022</span>
                                    <p class="card-text text-muted">The Trademark Authority has published the latest Journal 304 ( Download) on 09-Nov-2021.</p>
                                    <a href="detail.php" class="btn btn-danger mt-1">Continue</a>
                                </div>
                                 </a>
                            </div>
                       
                         </div>
                     <div class="col-12 col-md-4 mb-4">
                            <a href="detail.php">
                            <div class="card border-0" >
                                <img src="https://supremeip.com/wp-content/uploads/2021/11/divorce-by-wife-768x384.jpg"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h5 class="card-title text-dark">স্ত্রী কখন ডিভোর্স চাইতে পারে?</h5>
                                     <span class="my-0 mb-5 "style="font-size:11px;">By <span class="text-muted">Joseph N. Endres</span> on January 27, 2022</span>
                                    <p class="card-text text-muted">The Trademark Authority has published the latest Journal 304 ( Download) on 09-Nov-2021.</p>
                                    <a href="detail.php" class="btn btn-danger mt-1">Continue</a>
                                </div>
                                 </a>
                            </div>
                       
                         </div>
                      <div class="col-12 col-md-4 mb-4">
                            <a href="detail.php">
                            <div class="card border-0" >
                                <img src="https://supremeip.com/wp-content/uploads/2021/12/Journal.png"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Bangladesh Trademark Journal 304</h5>
                                     <span class="my-0 mb-5 "style="font-size:11px;">By <span class="text-muted">Joseph N. Endres</span> on January 27, 2022</span>
                                    <p class="card-text text-muted">The Trademark Authority has published the latest Journal 304 ( Download) on 09-Nov-2021.</p>
                                    <a href="detail.php" class="btn btn-danger mt-1">Continue</a>
                                </div>
                                 </a>
                            </div>
                       
                         </div>
                    
                    </div>
            </div>
        </div>
    </div>
    
 </main>
                  
</script>
<?php include "inc/footer.php";?>