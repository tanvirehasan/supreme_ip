<?php 
    include "inc/db.php";
    include "inc/function.php";

    $sharelink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $baseurl=basename($_SERVER['REQUEST_URI']);

    (isset($_GET['detail'])) ? $post_id = $_GET['detail'] : Reconect('post.php');
    $data = SelectData('blog_news',"WHERE page_url='$post_id'");
    $postdata = $data->fetch_object();
    $page_view=$postdata->page_view+1;
    $cat_name=postcate('category_name',"$postdata->parent_cat_id");
    $conn->query("UPDATE blog_news SET page_view='$page_view' WHERE id='$postdata->id'");
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$postdata->post_title?> --SUPREMEiP</title> 
    <meta name="description" content="<?=strip_tags($postdata->blognews_content)?>">
    <meta name="author" content="SUPREMEiP">
    
    <meta property="og:url"                content="<?=$sharelink?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?=$postdata->post_title?> --SUPREMEiP"/>
    <meta property="og:description"        content="<?=strip_tags($postdata->blognews_content)?>"/>
    <meta property="og:image"              content="assets/blogs/<?=$postdata->featured_image?>" />


    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="32x32" />
    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/brand/<?=settings('favicon')?>" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>   

    <link href="assets/dist/css/style.css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='style.php' />
    <link href="assets/dist/css/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Oswald:wght@700&family=Poppins:wght@500&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
  </head>

<body id="supremeip">
  <div class="">
  <div class="row m-0 p-0">
    <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse" style="background:<?=header_menu('background_color');?>">
      <div class="position-sticky">        
        <div class="logo_text ms-3 mb-4 py-4">
            <div class="logoimg">        
              <a href="index.php"><img src="assets/brand/<?=settings('logo')?>" alt="SUPREMEiP"></a>
            </div>      

            <?php $topbardata = SelectData('topbar','');
            $topbarrow = $topbardata->fetch_object() ?>
            <div class="my-2 topbar">
              <a class="text-muted  fw-bold " href="<?=$topbarrow->link1?>"><?=$topbarrow->text1?></a>
              <a class="text-muted  px-3 fw-bold " href="<?=$topbarrow->link2?>"><?=$topbarrow->text2?></a>
              <a class="text-muted  fw-bold " href="<?=$topbarrow->link3?>"><?=$topbarrow->text3?></a>
            </div>
          </div>

        <ul class="navbar-nav ms-3 header_menu">
          <li class="nav-item m-0 p-0 ">
            <a class="nav-link nav_menus m-0 p-0 <?php if (basename($_SERVER['REQUEST_URI'])=='index.php') { echo "active"; } ?>" href="index.php">           
            <i class="fas fa-home" style="display: inline-block!important;transform: rotate(0deg);"></i> Home<a>
          </li>
          <?php 
              $data = SelectData('pages',"WHERE page_parent_id='0' AND page_status='1' ORDER BY main_menu ASC ");
              while($row = $data->fetch_object()){?> 
          <li class="nav-item m-0 p-0 ">
            
              <a class="nav-link nav_menus m-0 p-0 py-1 
              <?php if (basename($_SERVER['REQUEST_URI'])=='page.php?page='.$row->page_url){
                 echo "active"." ";
                }

                 if (isset($_GET['page'])) {
                   if ('page.php?page='.$row->page_url=='page.php?page='.$_GET['page']) {
                      echo "active";
                   }                   
                 }?>" href="page.php?page=<?=$row->page_url?>">
                 
                 <i class="<?=$row->menu_icon?>" style="display: inline-block!important;transform: rotate(0deg);"></i>
                 <?=$row->manu_title?>


              <i class="fas fa-location-arrow " <?php if (basename($_SERVER['REQUEST_URI'])=='page.php?page='.$row->page_url)
                { echo "style='display: inline-block;'";}
                  if (isset($_GET['page'])) {
                    if ('page.php?page='.$row->page_url=='page.php?page='.$_GET['page']) {
                      echo "style=' display: inline-block;'";
                    }                   
                  }                    
                ?> >
                </i>
              </a>         
            </li>
          <?php } ?>
       
          <li class="nav-item">
              <a class="nav-link nav_menus m-0 p-0 py-1 <?php if (basename($_SERVER['REQUEST_URI'])=='post.php') { echo "active"; } ?> " href="post.php">
               <i class="fas fa-blog" style="display: inline-block!important;transform: rotate(0deg);"></i> blog & news<i class="fas fa-location-arrow"></i></a>
          </li>         
      </ul>
      </div>

      <div class="copyright-footer">
         <div class="d-flex flex-column">
            <?=settings('footer')?>

          </div>
          <!-- social icon -->         
          <div class="d-flex social">
            <?php 
              $data = SelectData('social','');
              if ($data->num_rows>0) {
              while ($social = $data->fetch_object()) {?>
              <a class="p-2" style="color:<?=header_menu('font_color')?>" href="<?=$social->social_url?>"><i class="<?=$social->icon?>"></i></a>
            <?php } } ?>
             
          </div>
          <div class="my-1 px-2" style="color:<?=header_menu('font_color')?>;font-size:12px" ><?=settings('copyrightupdate')?></div>        
        </div> 
    </nav>


    <!-- mobile menu -->
    <div class="d-sm-block d-md-none">
      <nav class="navbar main_header_mobile navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container-fluid  mb-2">
            <div class="d-flex">
              <a class="" href="index.php"><img src="assets/brand/logo.png" width="60%" alt="SUPREMEiP"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>

            <div class="collapse  navbar-collapse "  id="navbarNav2">
                <ul class="navbar-nav mt-3">
                  <li class="nav-item">
                    <a class="nav-link nav_menu text-capitalize text-dark fw-bold " href="index.php">Home</a>
                  </li>
                   <?php 
                      $data = SelectData('pages',"WHERE page_parent_id='0' AND page_status='1'");
                      while($row = $data->fetch_object()){?> 
                    <li class="nav-item">
                      <a class="nav-link nav_menu text-capitalize text-dark fw-bold "  href="page.php?page=<?=$row->page_url?>">
                      <i class="<?=$row->menu_icon?>" style="display: inline-block!important;transform: rotate(0deg); color:#000;"></i> <?=$row->manu_title?></a>
                    </li>
                   <?php }?>
                   <li class="nav-item">
                      <a class="nav-link nav_menus  text-capitalize text-dark fw-bold" href="post.php">blog & news</a>
                  </li>
                  
                </ul>
            </div>
        </div>
    </nav> 
</div>


<!-- quick contact -->
 <div class="quick_contact d-sm-block d-md-none">
  <div class="d-flex justify-content-end">
    <a href="https://wa.me/<?=settings('whatsapp')?>" class="text-success glow_btn "><i class="fab fa-whatsapp p-2 fs-1"></i></a>
  </div> 
 </div>




<!-------------- Header End ---------------->



<!-- main content -->
 <main class="col-md-10 ms-sm-auto col-lg-10  px-md-0 px-0" >
    <div class="header_img bg-dark ">
        <div class="row mx-0 m-0 p-0">
            <div class="col-9  m-0 p-0" style="background-image: url('assets/mediacenter/<?=settings('default_img')?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                <h1 class="text-white h2"   <?=($cat_name=='Blog(BN)') ? "style='font-family: bangla-azad !important;'" : '' ;?>  ><?=$postdata->post_title?></h1> 
              <div class="overlay" style="background:<?=settings('Overlay_color')?>; opacity: 0.7;"></div>
            </div>
            <div class="col-3 m-0 p-0 position-relative">
                <div class="d-flex flex-column">
                    <img src="assets/blogs/<?=$postdata->featured_image?>" alt="<?=$postdata->post_title?>"style="height:200px;">                 
                </div>
                <div class="overlay2" style="background:<?=settings('Overlay_color2')?>; opacity: 0.5;"></div>
                <!-- breadcrumb -->
                <nav aria-label="" class="breadcrumb_menu">
                    <ol class="nav" style="cursor: pointer;">
                        <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-5 text-white"></i></a> </li>
                        <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-5 text-white"></i></a></li>
                        <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-5 text-white"></i></a></li>
                        <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-5 text-white"></i></a></li>
                        <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-5 text-white "></i></a></li>
                        <li class="nav-link p-1 "><a href="print.php?blog=<?=$post_id?>" target="null" ><i class="fas fa-print fs-5 text-white"></i></a></li>

                    </ol>                     
                </nav>
            </div>
        </div>
    </div>

     <!-- mobile side menu -->
     <div class="d-md-none d-sm-block" style="margin-top:22%; background:<?php echo settings('default_theam_color')?>">        
         <nav class="navbar navbar-expand-lg mb-3 px-3">        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fs-4 me-2"></i> 
                <?php if (isset($_GET['category'])) {echo $_GET['category'];}elseif (isset($_GET['sub_category'])) {echo $_GET['sub_category']; }else{echo 'All Post';}?>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-end">
                    <li class="nav-item"><a class="nav-link nav_menu text-capitalize " href="post.php">All post</a></li>
                    <?php 
                        $data = SelectData('blogs_category','WHERE perent_id=0');
                        while($row = $data->fetch_object()){?>  
                    <li class="nav-item"><a class="nav-link nav_menu text-capitalize " href="post.php?category=<?=$row->category_name?>"><?=$row->category_name?></a></li>
                    <?php } ?> 
                </ul>
            </div>
       </nav>
     </div>

 	<!-- detail content -->
 	<div class="row mx-0 p-0 m-0" style="min-height: 800px; background:<?=settings('default_theam_color')?>">
 		 <!--short sidebar -->
 		<div class="col-2 p-0 pt-4 h-50  side-menu ">
            <ul class="nav flex-column main_header">   
                <li class="nav-item">
                    <a class="nav-link nav_menu <?php if ($baseurl=='post.php') { echo "active_menu";}?>" href="post.php">
                         All Post <?php if ($baseurl=='post.php') { echo "<span class='h5'>&#8594;</span>";}?>
                    </a>
                </li>
                 <?php 
                    $data = SelectData('blogs_category','WHERE perent_id=0');
                    while($row = $data->fetch_object()){?>  
                <li class="nav-item">
                    <a class="nav-link nav_menu <?php if (postcate('category_name',"$postdata->parent_cat_id")==$row->category_name) { echo "active_menu";} ?> " href="post.php?category=<?=$row->category_name?>">
                        <?=$row->category_name?>
                        <?php if (postcate('category_name',"$postdata->parent_cat_id")==$row->category_name) { echo "<span class='h5'>&#8594;</span>";}?>
                    </a>
                </li>
               <?php }?>              
            </ul>   
 		</div>

    <div class="col-12 col-md-8 col-lg-8 p-3 bg-white">
      <div class="cat_content">
              <!-- Routing Path  -->
              <div class="bg-light p-2 mb-4 blog_full_link" >
                <div class="row">
                  <div class="col-md-6">
                    <a href="post.php">All Post</a>/<a href="post.php?category=<?=$cat_name?>"><?=$cat_name?></a>/<a href="post.php?category=<?=postcate('category_name',"$postdata->parent_cat_id")?>&subcat=<?=postcate('category_name',"$postdata->cat_title")?>"><?=postcate('category_name',"$postdata->cat_title")?></a>/<a href="post_full.php?detail=<?=$postdata->page_url?>"><?=$postdata->post_title?></a>
                  </div>
                  <div class="col-md-6 text-end text-danger"><i class="fas fa-eye"></i> Read (<?=$postdata->page_view?>)</div>
                </div>                           
              </div>

              <!-- Full Blog and Image -->
              <div>                            
                  <!-- <img src="assets/blogs/<?=$postdata->featured_image?>" alt="<?=$postdata->post_title?>" width="100%" class="py-2 mb-3">   -->
                  <h1 class="blog_title" <?=($cat_name=='Blog(BN)') ? "style='font-family: bangla-azad !important;'" : '' ;?>><?=$postdata->post_title?></h1>              
                  <div class="full_blog" <?=($cat_name=='Blog(BN)') ? "style='font-family: bangla-regular !important;font-size:20px;' " : '' ;?>> <?=html_entity_decode($postdata->blognews_content)?></div>
              </div>  
              
              <!-- SHARE -->
              <div class="share_post ">
                  <ul class="nav ">   
                        <b class="pt-1 pe-2">SHARE:</b> 
                      <ol class="nav" style="cursor:pointer;">                                
                          <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-f "></i></a> </li>
                          <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter "></i></a></li>
                          <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin-in "></i></a></li>
                          <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp "></i></a></li>
                          <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope "></i></a></li>
                          <li class="nav-link p-1 "><a href="print.php?blog=<?=$post_id?>" target="null" ><i class="fas fa-print"></i></a></li>
                      </ol> 
                  </ul>
              </div>

          <!-- Releted post -->
          <div class="Popular_post pt-5">
            <h6 class="section_title" ><i class='fas fa-file-alt'></i> Releted post</h6>                        
            <div class="row ">                             
              <?php 
                  $data =SelectData('blog_news',"WHERE parent_cat_id='$postdata->parent_cat_id'  LIMIT 12");
                  while($row = $data->fetch_object()){?> 
                      <div class="col-md-2 mb-4 d-flex align-items-stretch">                                   
                          <div class="post_card bg-light p-0 m-0 rounded-3 border " >                                            
                              <a class="nav-link p-0 m-0 " href="post_full.php?detail=<?=$row->page_url?>">                                                
                              <img src="assets/blogs/<?=$row->featured_image?>"  alt="..."class="card-img-top" style="object-fit: cover; height: 100px;">
                              <h6 class="Popular_post_title p-2"><?= substr_replace($row->post_title, "",150)?></h6>   
                              </a>                                           
                          </div>                                    
                      </div>                  
                <?php } ?> 
              </div>                       
          </div> 



          </div>
    </div>

          <!-- Category -->
          <div class="col-md-2 bg-light p-0 m-0 ">  
              <div class="sub-cat lawyer ">
                  <h6 class="section_title"> <i class="far fa-file-alt"></i> Category Post</h6>
                  <hr class="p-0 mt-0" style="border-bottom:3x solid #ADADAD;  width: 100%;" >
                  <ul>
                    <?php 
                      if (isset($_GET['category'])) {
                          $catdata=SelectData('blogs_category',"WHERE perent_id='$cat_id'");
                      }elseif (isset($_GET['sub_category'])) {
                          $pid=perent_id($_GET['sub_category']);                                        
                          $catdata= SelectData('blogs_category',"WHERE perent_id='$pid'");
                      }else{
                          $catdata = SelectData('blogs_category','WHERE perent_id!=0 ORDER BY category_name ASC');
                      }

                      while($catrow = $catdata->fetch_object()){?>  
                          <li class="pt-1"><a class="<?=(postcate('category_name',"$postdata->cat_title")==$catrow->category_name) ? 'sub_active' : '' ;?>"  href="post.php?sub_category=<?=$catrow->category_name?>"><?=$catrow->category_name?> </a></li>
                  <?php } ?>
                  </ul>
              </div> 
          </div>

    </div>
 </main>      


 <style>
  
@media only screen and (max-width: 600px) {
    h1.blog_title{
        font-size: 25px !important;
    }
}




 </style>
 
 
 <?php include "inc/footer.php";?>