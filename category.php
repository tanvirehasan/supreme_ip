<?php 
    include "inc/header.php";

    (isset($_GET['catname'])) ? $catname = $_GET['catname'] : Reconect('post.php');

    $cdata = SelectData('blogs_category',"WHERE category_name='$catname'");
    $catdata = $cdata->fetch_object();
    $catid=$catdata->cat_id;                       

?>

<!-- main content -->
 <main class="col-md-9 ms-sm-auto col-lg-10  px-md-0" >
    <div class="header_img bg-dark ">
        <div class="row mx-0 m-0 p-0">
            <div class="col-8  m-0 p-0"style="background-image: url('assets/brand/cat1.jpg');">
                <h1 class="text-white h2"><?=$catdata->category_name?></h1>                
            </div>
            <div class="col-4 m-0 p-0 position-relative">
                <div class="d-flex flex-column">
                    <img src="assets/brand/cat3.jpg"style="height:200px;">                 
                </div>
                <div class="overlay"></div>
                <!-- breadcrumb -->
                    <nav aria-label="" class="breadcrumb_menu">
                        <ol class="nav" style="cursor: pointer;">
                            <li class="nav-link"><a href="servicebd.php?service=<?=$serviceid?>" class="text-white">বাংলা</a></li>                           
                            <li class="nav-link share px-0 "><i class="fas fa-envelope fs-5 text-white"></i></li>
                            <li class="nav-link "onclick="window.print()"><i class="fas fa-print text-white fs-5"></i></li>
                        </ol>
                    </nav>
                <div class="share_icon">
                    <ul class="nav ">
                        
                        <ol class="nav" style="cursor: pointer;">
                            <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-5 text-white"></i></a> </li>
                            <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-5 text-white"></i></a></li>
                            <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-5 text-white"></i></a></li>
                            <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-5 text-white"></i></a></li>
                            <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-5 text-white "></i></a></li>
                        </ol> 
                       
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
                            $data = SelectData('blogs_category','WHERE perent_id=0');
                            while($row = $data->fetch_object()){?>  
                        <li class="nav-item">
                            <a class="nav-link nav_menu text-capitalize text-white " href="category.php?catname=<?=$row->category_name?>"><?=$row->category_name?></a>
                        </li>
                        <?php }?> 
                      </ul>
                </div>
              </div>
       </nav>
     </div>


    <div class="bg-dark d-md-none d-sm-block" ><h6 class="text-white p-2">NEWS</h6></div>
 	<!-- detail content -->
 	<div class="row mx-0 bg-dark " style="min-height: 800px;">
 		 <!--short sidebar -->
 		<div class="col-2 mt-2  p-0 h-50  side-menu ">
            <ul class="nav flex-column main_header">
                <li class="nav-item"><a class="nav-link nav_menu active_menu " href="post.php">All Post</a></li>
                 <?php 
                    $data = SelectData('blogs_category','WHERE perent_id=0');
                    while($row = $data->fetch_object()){?>  
                <li class="nav-item">
                    <a class="nav-link nav_menu active_menu " href="category.php?catname=<?=$row->category_name?>"><?=$row->category_name?></a>
                </li>
               <?php }?> 
               
            </ul>   
 		</div>

 		<div class="col-12 mt-md-2 col-md-10 col-lg-10 m-0 p-0">
 			<div class="cat_content " style="min-height: 800px;">

                <div class="row p-3">
                    
                    <?php 
                    $data = SelectData('blog_news',"WHERE parent_cat_id='$catid'");
                    while($row = $data->fetch_object()){?> 
                        <div class="col-12 col-md-3 mb-4">
                            <a class="nav-link p-0 m-0" href="post_full.php?detail=<?=$row->page_url?>">
                                <div class="card bg-light p-0 m-0" >
                                    <div class="card-body p-0">
                                        <img src="assets/blogs/<?=$row->featured_image?>"  alt="..."class="card-img-top" style="object-fit: cover; height:200px;">
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="text-dark p-0 m-0"><?=$row->post_title?></h6>
                                        <p class="fs-8 text-dark"><?php $postcontent=$row->blognews_content; $content=strip_tags($postcontent);
                                                echo substr_replace($content, "....",120); ?></p>
                                        <p class="my-0 mb-5 p-0 "style="font-size:11px;">By <span class="text-muted">admin</span> on <?=date('M d, Y | h:i A',strtotime($row->datetime)); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>  
                    <?php } ?> 
                </div>
            </div>
        </div>
 </main>                 
<?php include"inc/footer.php";?>