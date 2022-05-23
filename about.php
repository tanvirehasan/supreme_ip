<?php include"inc/header.php";?>
<!-- main content -->
 <main class="col-md-9 ms-sm-auto  col-lg-10  px-md-0" >
 	<div class="header_img bg-dark d-md-block d-sm-none ">
 		<div class="row mx-0 m-0 p-0 ">
 			<div class="col-8  m-0 p-0"style="background-image: url('assets/brand/cat1.jpg');">
 				<h1 class="text-white text-center h3">WHO WE ARE?</h1>
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
              <div class="container-fluid"></div>
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars fs-4 text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav align-items-end">
                           <?php 
                                $i=1;
                                $data = SelectData(' about_catagories','');
                                while($row = $data->fetch_object()){?>    
                            <li class="nav-item">
                              <a class="nav-link px-3 text-capitalize text-white"  href="about.php?we=<?=$row->id?>"><?=$row->category_name?></a>
                            </li>
                            <?php }?>
                      </ul>
                </div>
              
            </nav>
     </div>
     <div class="bg-dark  d-md-none d-sm-block">
         <h6 class="text-white p-2">Who We ARE?</h4>
     </div>
 	<!-- detail content -->
 	<div class="row mx-0 bg-dark px-md-4">
 		 <!--short sidebar -->
 		<div class="col-2 mt-2  p-0 h-50  side-menu ">
            <ul class="nav flex-column main_header">
                <?php 
                                       
                    $data = SelectData(' about_catagories','');
                    while($row = $data->fetch_object()){?>  
                <li class="nav-item">
                    <a class="nav-link nav_menu active_menu  " href="about.php?we=<?=$row->id?>"><?=$row->category_name?></a>
                </li>
               <?php } ?>
            </ul>   
        </div>
 		<div class="col-12 mt-md-2 col-md-10 col-lg-10 m-0 p-0">
 			<div class="cat_content p-3 ">
                 
                <!-- about us -->
                <div class="row mx-0  ">
                  
                    <div class="col-12 col-md-7">
                        <p class="lh-2"style="font-size:14px">Corporate & IP based Law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation.

                        The firm has a constellation of experienced and proficient lawyers in the relevant fields of Intellectual Property i.e. Trademarks, Patents, Copyright, Industrial Designs, Brand Protection, and Brand enforcement. The proactive team members are also experienced in Company Startup planning, Company Registration, Export-Import License, Business related licenses registration, Income Tax, VAT Litigation and, Company Law. https://www.supremeip.com/attorney/

                        With the latest Information Technology tools, SUPREMEiP Law Firm provides high quality, low cost, and speedy Legal Services to IP attorneys, lawyers, corporations, and individuals. The firm proud to provides services to many world-renowned companies.

                        SUPREMEiP always keeps clients’ needs at the center of focus and take the time to learn about their concerns. On a strong scaffold of professional ethics and meticulously crafted operational procedures, SUPREMEiP treats every client with the individuality that he or she deserves.</p>     
                    </div>
                    <div class="lawyer col-12 col-md-5">
                        <h5 class=" mb-4"><i class="fas fa-user-graduate text-danger mx-2"></i>Your Lawyer is here</h5>
                        <div class=" card2" style="box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.1);">
                          <img src="assets/brand/lawyer.jpg" class="card-img-top" alt="...">
                          <div class="card-body my-3" style="background-color:#dc3545;">
                            <h5 class=" text-center text-white">Adv. Chaudhury Reagan</h5>
                            <h6 class=" text-center text-white">IP Attorney & CEO</h6>

                            <div class=" text-center about_social">
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
                
             <!-- clients logo start -->
                <div class="row mx-0 my-5">
                    <div class="col-12 col-md-6">
                       <h4 class="text-dark"><i class="fas fa-users text-danger pe-2"></i>Our Client</h4>
                        <p class="">We provide specialized services in Intellectual Property, IPR Enforcement, Taxation & Business Startup services in Bangladesh. The firm proud to provides services to many world-renowned companies, like CASIO, Mahindra & Mahindra, Hero, L’Oreal, NYX, G-Star, Polo, WD-40, Lacoste, Le-Bond and more…</p>  
                    </div>
                    <div class="client_logo col-12 col-md-6 mb-5">
                        <div class="row">
                            <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                            <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                              <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                             <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                            <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                              <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                             <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                            <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                              <div class="col-4 border border-1 border-light p-2"style="background-color: rgba(255,255,244,255.4);">
                              <img src="https://supremeip.com/wp-content/uploads/2021/11/Mahindra-1.png">
                            </div>
                            

                      </div>
                        
                    </div>
                    
                </div>

                <div class="row mx-0 my-5">
                     <h4 class="text-dark"><i class="fas fa-layer-minus text-danger pe-2"></i>Practise Area</h4>
                     <p class="mb-5">“SUPREMEiP” is top-ranked Corporate & IP based Law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation.</p>
                     <div class="col-12 col-md-3  mb-4">
                        <div class="bg-light  d-flex flex-column justify-content-center" style=" border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                <div class="icon text-center py-1 mt-4">
                                 
                                    <i class="fas fa-trademark fs-1"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.7);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary">TRADEMARK</h5>
                                    <span class="text-start" style="font-size: 12px;">An application for Trademark Registration in Bangladesh can be filed</span>
                                </div>         
                            </div>
                     </div>
                     <div class="col-12 col-md-3  mb-4">
                        <div class="bg-light  d-flex flex-column justify-content-center"style="  border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                <div class="icon text-center py-1 mt-4">
                                 
                                    <i class="fas fa-trademark fs-1"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.7);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary">TRADEMARK</h5>
                                    <span class="text-start" style="font-size: 12px;">An application for Trademark Registration in Bangladesh can be filed</span>
                                </div>         
                            </div>
                     </div>
                     <div class="col-12 col-md-3  mb-4">
                        <div class="bg-light  d-flex flex-column justify-content-center"style=" border-left: 2px solid rgba(225, 0, 0, 0.4); border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                <div class="icon text-center py-1 mt-4">
                                 
                                    <i class="fas fa-trademark fs-1"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.7);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary">TRADEMARK</h5>
                                    <span class="text-start" style="font-size: 12px;">An application for Trademark Registration in Bangladesh can be filed</span>
                                </div>         
                            </div>
                     </div>
                      <div class="col-12 col-md-3 mb-4">
                        <div class="bg-light  d-flex flex-column justify-content-center"style=" border-left: 2px solid rgba(225, 0, 0, 0.4); border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                <div class="icon text-center py-1 mt-4">
                                 
                                    <i class="fas fa-trademark fs-1"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.7);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary">TRADEMARK</h5>
                                    <span class="text-start" style="font-size: 12px;">An application for Trademark Registration in Bangladesh can be filed</span>
                                </div>         
                            </div>
                     </div>
                      <div class="col-12 col-md-3 mb-4">
                        <div class="bg-light  d-flex flex-column justify-content-center"style=" border-left: 2px solid rgba(225, 0, 0, 0.4); border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                <div class="icon text-center py-1 mt-4">
                                 
                                    <i class="fas fa-trademark fs-1"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.7);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary">TRADEMARK</h5>
                                    <span class="text-start" style="font-size: 12px;">An application for Trademark Registration in Bangladesh can be filed</span>
                                </div>         
                            </div>
                     </div>

                      <div class="col-12 col-md-3 mb-4">
                        <div class="bg-light  d-flex flex-column justify-content-center"style=" border-left: 2px solid rgba(225, 0, 0, 0.4); border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                <div class="icon text-center py-1 mt-4">
                                 
                                    <i class="fas fa-trademark fs-1"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.7);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary">TRADEMARK</h5>
                                    <span class="text-start" style="font-size: 12px;">An application for Trademark Registration in Bangladesh can be filed</span>
                                </div>         
                            </div>
                     </div>

                      <div class="col-12 col-md-3 mb-4">
                        <div class="bg-light  d-flex flex-column justify-content-center"style=" border-left: 2px solid rgba(225, 0, 0, 0.4); border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                <div class="icon text-center py-1 mt-4">
                                 
                                    <i class="fas fa-trademark fs-1"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.7);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary">TRADEMARK</h5>
                                    <span class="text-start" style="font-size: 12px;">An application for Trademark Registration in Bangladesh can be filed</span>
                                </div>         
                            </div>
                     </div>
                    <div class="col-12 col-md-3 mb-4">
                        <div class="bg-light  d-flex flex-column justify-content-center"style=" border-left: 2px solid rgba(225, 0, 0, 0.4); border-top-left-radius: 50px; border-bottom-right-radius: 50px;">
                                <div class="icon text-center py-1 mt-4">
                                 
                                    <i class="fas fa-trademark fs-1"></i>

                                </div>
                                <div class="px-5"> 
                                    <hr style="color: rgba(225, 0, 0, 0.7);"> 
                                </div>

                                <div class="title text-center mb-3"> 
                                    <h5 class="fw-bold text-center text-secondary">TRADEMARK</h5>
                                    <span class="text-start" style="font-size: 12px;">An application for Trademark Registration in Bangladesh can be filed</span>
                                </div>         
                            </div>
                     </div>


                </div>

                <!-- our team -->
                <div class="row mx-0">
                     <h4 class="text-dark"><i class="fas fa-users-class text-danger pe-2"></i>Our Team</h4>
                     <p class="mb-5">The firm has a constellation of experienced and proficient lawyers in the relevant fields of Intellectual Property i.e. Trademarks, Patents, Copyright, Industrial Designs, Brand Protection, and Brand enforcement. The proactive team members are also experienced in Company Startup planning, Company Registration, Export-Import License, Business related licenses registration, Income Tax, VAT Litigation and, Company Law. 

                     SUPREMEiP always keeps clients’ needs at the centre of focus and take the time to learn about their concerns. On a strong scaffold of professional ethics and meticulously crafted operational procedures, SUPREMEiP treats every client with the individuality that he or she deserves. https://www.supremeip.com/client/</p>
                     <!-- team1 -->
                    <div class="team col-12 col-md-4 mb-5">
                        <div class="card  bg-light" style="">
                            <img src="https://supremeip.com/wp-content/uploads/2021/11/Sayed-Quamrul-Hossain-Kiron-1.jpg" width="100" class="card-img-top p-3" alt="..."style="border-radius:50%;">
                            <div class="card-body text-center bg-light">
                                <h5 class="card-title">Sayed Quamrul Hossain Kiron</h5>
                                <span class="fw-bold text-danger">Head of Chamber</span>
                                <p class="card-text">Mr. Kiron been practicing as an Advocate before the Hon’ble Supreme Court of Bangladesh since 30.10.1997</p>
                                <div class=" text-center about_social">
                                <a href="" class=""><i class="fab fa-facebook-f text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-linkedin-in text-dark px-1"></i></a>
                                <a href=""><i class="fas fa-envelope text-dark px-1 "></i></a>
                                <a href=""><i class="fab fa-whatsapp text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-weixin text-dark px-1"></i></a>  
                                
                            </div>
                            </div>
                        </div>
                    </div>
                     <!-- team1 -->
                    <div class="team col-12 col-md-4 mb-5">
                        <div class="card  bg-light" style="">
                            <img src="https://supremeip.com/wp-content/uploads/2021/11/Sayed-Quamrul-Hossain-Kiron-1.jpg" width="100" class="card-img-top p-3" alt="..."style="border-radius:50%;">
                            <div class="card-body text-center bg-light">
                                <h5 class="card-title">Sayed Quamrul Hossain Kiron</h5>
                                <span class="fw-bold text-danger">Head of Chamber</span>
                                <p class="card-text">Mr. Kiron been practicing as an Advocate before the Hon’ble Supreme Court of Bangladesh since 30.10.1997</p>
                                <div class=" text-center about_social">
                                <a href="" class=""><i class="fab fa-facebook-f text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-linkedin-in text-dark px-1"></i></a>
                                <a href=""><i class="fas fa-envelope text-dark px-1 "></i></a>
                                <a href=""><i class="fab fa-whatsapp text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-weixin text-dark px-1"></i></a>  
                                
                            </div>
                            </div>
                        </div>
                    </div>
                     <!-- team1 -->
                    <div class="team col-12 col-md-4 mb-5">
                        <div class="card  bg-light" style="">
                            <img src="https://supremeip.com/wp-content/uploads/2021/11/Sayed-Quamrul-Hossain-Kiron-1.jpg" width="100" class="card-img-top p-3" alt="..."style="border-radius:50%;">
                            <div class="card-body text-center bg-light">
                                <h5 class="card-title">Sayed Quamrul Hossain Kiron</h5>
                                <span class="fw-bold text-danger">Head of Chamber</span>
                                <p class="card-text">Mr. Kiron been practicing as an Advocate before the Hon’ble Supreme Court of Bangladesh since 30.10.1997</p>
                                <div class=" text-center about_social">
                                <a href="" class=""><i class="fab fa-facebook-f text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-linkedin-in text-dark px-1"></i></a>
                                <a href=""><i class="fas fa-envelope text-dark px-1 "></i></a>
                                <a href=""><i class="fab fa-whatsapp text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-weixin text-dark px-1"></i></a>  
                                
                            </div>
                            </div>
                        </div>
                    </div>
                     <!-- team1 -->
                    <div class="team col-12 col-md-4 mb-5">
                        <div class="card  bg-light" style="">
                            <img src="https://supremeip.com/wp-content/uploads/2021/11/Sayed-Quamrul-Hossain-Kiron-1.jpg" width="100" class="card-img-top p-3" alt="..."style="border-radius:50%;">
                            <div class="card-body text-center bg-light">
                                <h5 class="card-title">Sayed Quamrul Hossain Kiron</h5>
                                <span class="fw-bold text-danger">Head of Chamber</span>
                                <p class="card-text">Mr. Kiron been practicing as an Advocate before the Hon’ble Supreme Court of Bangladesh since 30.10.1997</p>
                                <div class=" text-center about_social">
                                <a href="" class=""><i class="fab fa-facebook-f text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-linkedin-in text-dark px-1"></i></a>
                                <a href=""><i class="fas fa-envelope text-dark px-1 "></i></a>
                                <a href=""><i class="fab fa-whatsapp text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-weixin text-dark px-1"></i></a>  
                                
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
               
                <!-- contact us -->
                <div class="row mx-0 my-5 mb-5">
                    <h4 class="text-dark"><i class="fas fa-map-marked text-danger pe-2"></i>Contact Us</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus totam rerum omnis officiis nesciunt non adipisci! Harum aut tempore iusto, rerum, et sunt vitae esse nobis delectus adipisci quos nisi.</p>
                    <div class="col-12 col-md-5 mt-5">
                        <div class="card border-0 bg-light" style="">
                            <img src="https://supremeip.com/wp-content/uploads/2021/11/Reagan.jpg" width="100" class="card-img-top p-3" alt="..."style="border-radius:50%;">
                            <div class="card-body text-center bg-light">
                                <h5 class="card-title">ADV. CHAUDHURY REAGAN</h5>
                                <span class="fw-bold text-danger">IP ATTORNEY AND CEO</span>
                               
                                <div class=" text-center about_social pt-0">
                                <a href="" class=""><i class="fab fa-facebook-f text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-linkedin-in text-dark px-1"></i></a>
                                <a href=""><i class="fas fa-envelope text-dark px-1 "></i></a>
                                <a href=""><i class="fab fa-whatsapp text-dark px-1"></i></a>
                                <a href=""><i class="fab fa-weixin text-dark px-1"></i></a>  
                                
                            </div>
                            </div>
                            
                        </div>
                         <div class="d-flex flex-column my-5">
                            <a href="" class=" d-flex flex-row mb-1">
                                <i class="fab fa-whatsapp fs-6 text-dark px-1"></i>
                                <span style="font-size: 10px; color:black;">WhatsUp 0389476567</span>
                            </a> 
                            <a href="" class=" d-flex flex-row mb-1">
                                <i class="fas fa-map-marker-alt fs-6 text-dark px-1"></i>
                                <span style="font-size: 10px; color:black;"> SUPREMEiP Law Firm House#23 (Ground Floor), Road#4, Block#A, Banasree, Rampura, Dhaka-1219, Bangladesh</span>
                            </a>  

                        </div>
                    </div>
                   
                    <div class="col-12 col-md-7 mt-5">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control"placeholder="Name">
                                
                            </div>
                             <div class="mb-3">
                                <input type="email" class="form-control"placeholder="Phone Number">
                            </div>
                             <div class="mb-3">
                                <input type="email" class="form-control"placeholder="Email">
                            </div>
                             <div class="mb-3">
                                <textarea name="" id="" class="form-control" cols="20" rows="5"></textarea>
                            </div>
                        </form>
                    </div>
                </div>

             </div>
         </div>
 	</div>
 	
</main>
    </div>
 </div>
 
<?php include"inc/footer.php";?>