<?php include"inc/header.php";?>
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
                            <li class="nav-item">
                              <a class="nav-link  text-white"  href="">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link  text-white" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link  text-white" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link  text-white" >Disabled</a>
                            </li>
                      </ul>
                </div>
              </div>
       </nav>
     </div>
     <div class="bg-dark  d-md-none d-sm-block">
         <h6 class="text-white p-2">Course name</h4>
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
                    <a class="nav-link nav_menu  active_menu "  href="offer_training.php?offerid=<?=$row->id?>"><?=$row->category_name?></a>
                </li>
               <?php } ?>
            </ul>   
 		</div>
 		<div class="col-12 mt-md-2 col-md-10 col-lg-10 m-0 p-0">
 			<div class="cat_content p-md-3">
            <!-- course detail -->
             <h2 class="text-center mt-4">Trademark Registration in Bangladesh</h2>
                       <!-- about us -->
                <div class="row mx-0 my-5 p-3 ">
                  
                    <div class="col-12 col-md-8">
                        <p class="lh-2"style="font-size:14px">A trademark can be renewed in Bangladesh from time to time for an unlimited period upon payment of the renewal fees, failing which the mark becomes liable to be removed from the Register on account of non-renewal. Each renewal term is for a period of 10 years.

                        The procedure for filing for a renewal of a trademark in Bangladesh is as follows: Request to renew a trademark in Bangladesh can be filed within 6 months BEFORE THE EXPIRY of the registration/ renewal term if accompanied by the requisite renewal fees on the prescribed form.

                        Request to renew a trademark in Bangladesh can be filed within 6 months AFTER THE EXPIRY of the registration/ renewal term if accompanied by the requisite renewal fees on the prescribed form.

                        A Certificate of Renewal is issued by the Registrar as evidence of payment of the renewal fee due at that period. Clients are advised that the renewal fee due on a mark cannot be paid until the mark is registered. Clients are therefore advised that they need not worry about the renewal fee until the mark has been registered.</p>     
                    </div>
                    <div class="lawyer col-12 col-md-4">
                        <h5 class=" mb-4"><i class="fas fa-user-graduate text-danger mx-2"></i>Your Instructor is here</h5>
                        <div class=" card2" style="box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.1);">
                          <img src="assets/brand/lawyer.jpg" class="card-img-top" alt="...">
                          <div class="card-body my-3" style="background-color:#dc3545;">
                            <h6 class=" text-center text-white">Adv. Chaudhury Reagan</h6>
                            <span class=" text-center text-white">IP Attorney & CEO</span>

                            <div class=" text-center about_social">
                                <a href="" class=""><i class="fab fa-facebook-f px-1"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fas fa-envelope"></i></a>
                                <a href=""><i class="fab fa-whatsapp"></i></a>
                              
                                
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-12 my-4">
                        <div class="flex-row">
                            <span class="text-dark fw-bold mb-4"><i class="fas fa-money-check-edit fs-6 text-danger px-2"></i>For Registration Click here</span>
                            <button type="button" class="btn btn-danger mt-md-0 mt-sm-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> Registration</button>
                        </div>
                        <div class="text-capitalize mt-4"><i class="fas fa-check-double px-2"></i>After successful Registration We will send a confirmation Email<i class="fas fa-smile text-danger px-1"></i></div>

                    </div>
                </div>
            <!-- comment -->
            <div class="border-bottom border-3  border-secondary d-flex  my-3 px-md-0 px-sm-5 row mx-0 ">
                <span class="text-muted fs-5 flex-grow-1 mb-3 col-12 col-md-4"><i class="fas fa-comment me-2"></i>comment</span>
                <div class="mb-3 col-12 col-md-4">
                    <a href=""><i class="fab fa-twitter-square text-danger fw-bold fs-4 mx-1"></i></a>
                    <a href=""><i class="fab fa-linkedin text-danger   fs-4  mx-1"></i></a>
                    <a href=""><i class="fas fa-envelope text-danger  fs-4  mx-1"></i></a>
                    <a href=""><i class="fab fa-facebook-square text-danger  fs-4  mx-1"></i></a>
                </div>
            </div>
           <div class="row mx-0">
               <div class="col-12 col-md-7">
                      <!-- comment -->
                    <form class="comment mt-3 mb-5">
                        <h5>Post a comment:</h5>
                        <input type="text" class="form-control mb-3" placeholder="Name*" required name="">
                        <input type="text" class="form-control mb-3" placeholder="Email (not be published)*" required name="">
                        <textarea  required class="mb-3 w-100" placeholder="comment*"></textarea>
                        <button class="btn btn-danger  fs-6 my-4">Submit Comment</button>
                        <p>*All fields are required.</p>
                    </form>

               </div>
               <div class="col-12 col-md-5 ">
                   <h6 class="text-dark mb-3">For Confirm Your <span class="text-danger fww-bold">Registraton</span> Send Money Or Any Quries?</h6>
                   
                   <div class="d-block ">
                       <div class="mb-3"><img class="mx-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYiJNgs0GZA4_mLwcGUs0E4li8H20JDgxuHdYkNWlGMJXWFaZjvH3c4-jlKtaTYUWKS8M&usqp=CAU" width="50" alt="" style="object-fit: cover;"> 01537895443</div>
                        <div class="mb-3"><img class="mx-2" src="https://www.logo.wine/a/logo/Nagad/Nagad-Vertical-Logo.wine.svg" width="50" alt="" style="object-fit: cover;"> 01537895443</div>
                   </div>

               </div>
           </div>
            <!-- related post/blog -->
            <div class="my-5 mb-5">
                 <h4 class="text-center ps-4 text-danger mb-5"><i class="fas fa-comment-edit px-1 text-dark"></i>Related Course</h4>
                 <div class="row mt-5">
                     <!-- post1 -->
                     
                        <div class="col-12 col-md-4 mb-4">
                            <a href="detail_offer_training.php">
                            <div class="card border-0" >
                                <img src="https://icstask.com/wp-content/uploads/2021/10/trademark-egistration.jpg"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h6 class="card-title text-dark">trademark registration</h6>
                                     <span class="my-0 mb-5 "style="font-size:11px;"> <span class="text-danger fw-bold">Last Date</span> on January 27, 2022</span>  
                                     <p class="text-muted my-2" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique modi rem veritatis voluptatibus temporibus expedita accusantium,</p>
                                </div>
                                
                            </div>
                                 </a>
                        
                       
                         </div>
                     <div class="col-12 col-md-4 mb-4">
                            <a href="detail_offer_training.php">
                            <div class="card border-0" >
                                <img src="https://icstask.com/wp-content/uploads/2021/10/trademark-egistration.jpg"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h6 class="card-title text-dark">trademark registration</h6>
                                     <span class="my-0 mb-5 "style="font-size:11px;"> <span class="text-danger fw-bold">Last Date</span> on January 27, 2022</span>  
                                     <p class="text-muted my-2" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique modi rem veritatis voluptatibus temporibus expedita accusantium,</p>
                                </div>
                                
                            </div>
                                 </a>
                         
                       
                         </div>
                      <div class="col-12 col-md-4 mb-4">
                            <a href="detail_offer_training.php">
                            <div class="card border-0" >
                                <img src="https://icstask.com/wp-content/uploads/2021/10/trademark-egistration.jpg"  alt="..."class="card-img-top" style="object-fit: cover;">
                            
                                <div class="card-body">
                                    <h6 class="card-title text-dark">trademark registration</h6>
                                     <span class="my-0 mb-5 "style="font-size:11px;"> <span class="text-danger fw-bold">Last Date</span> on January 27, 2022</span>  
                                     <p class="text-muted my-2" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique modi rem veritatis voluptatibus temporibus expedita accusantium,</p>
                                </div>
                                
                            </div>
                            </a>
                       
                         </div>
                    
                    </div>
            </div>
        </div>
    </div>
    
 </main>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class=" text-dark" id="exampleModalLabel">PLease Fill Up this Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <h6 class="text-center text-capitalize text-danger">trademark registration</h6>
        <form action="" method="POST">
             <div class="mb-3">
                <label for="" class="form-label">Select Course</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>-Select Course-</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
             <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="">
            </div>
             <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="">
            </div>
             <div class="mb-3">
                <label for="pin" class="form-label">Transaction Id</label>
                <input type="text" class="form-control" id="pin" name="">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    I agree to receive updates by email from <strong>SUPREMEIP</strong> about events, research, and study programmes, in line with the  <strong>SUPREMEIP</strong> <a href="">privacy policy</a>.
                </label>
            </div>
           
             <button type="submit" class="btn btn-dark float-end">Submit</button>
        </form>
  
      </div>
     
    </div>
  </div>
</div>              
</script>
<?php include"inc/footer.php";?>