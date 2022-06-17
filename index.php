<?php 
  include "inc/db.php";
  include "inc/function.php";
  $sharelink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $baseurl=basename($_SERVER['REQUEST_URI']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best iP Law firm in Bangladesh - SUPREMEiP</title> 
    <meta name="description" content="SUPREMEiP” is top-ranked Corporate &amp; ip law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation." />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="SUPREMEiP">
    <meta property="og:url"                content="<?=$sharelink?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="SUPREMEiP"/>
    <meta property="og:description"        content="SUPREMEiP” is top-ranked Corporate &amp; ip law firm in Bangladesh with the international presence provides specialized services in Intellectual Property Rights, Corporate Affairs, Foreign Trade and Investment, Taxation, and Litigation."/>
    <meta property="og:image"              content="assets/brand/<?=settings('logo')?>" />
    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="32x32" />
    <link rel="icon" href="assets/brand/<?=settings('favicon')?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/brand/<?=settings('favicon')?>" />
    
    <link href="assets/dist/css/style.css" type="text/css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='style.php' />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">  
    <link href="assets/dist/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Oswald:wght@700&family=Poppins:wght@500&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
  </head>

<body id="supremeip">
  <div class="">
  <div class="row m-0 p-0">
    <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse" style="background:<?=header_menu('background_color');?>">
      <div class="position-sticky">        
        <div class="logo_text ms-3 mb-4 py-4">
            <div class="logoimg">        
              <a class="d-sm-none d-md-block" href="index.php"><img src="assets/brand/<?=settings('logo')?>" alt="SUPREMEiP"></a>
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

 <div class="mobile-margin" ></div>

<style type="text/css">
    /*Home Page*/
    .page1{ height:450px;}
    .page2{ height:250px;}
    .page3{ height:269px;}

    .page-content{
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
        
    }

    .page_titletext{
        color: #fff;
        padding-top: 10%;
        font-family: serif;
    }


    .page1overlay{
        height:450px;
        width: 100%;
        overflow: hidden;
    }


    .page2overlay{
        height:284px;
        width:50%;
        overflow: hidden;
    }


    .home-link{
        text-decoration: none;
        margin: 0;
        padding: 0;
    }


    .page-content  h2{
        text-shadow: 2px 2px #000;
        font-family: MochiyPopOne;
    }


    .page-content a:hover{
        color: <?=settings('home_hover')?>!important;
    }


    .page-content a{
        color: #fff;
    }

    .readmore{
        font-family:arial;
        font-size: 16px;
        text-decoration: none;
        color: #fff;
        text-align: center;
        text-shadow:none;
        opacity: 1;
        font-weight: bold;
    }

    .readmore:hover{
        color:yellow;
    }

      @media only screen and (max-width: 600px) {
      .mobile-margin{
          margin-top: 60px;
      }
  }


</style>

<!-- main content -->
<main class="col-md-10 ms-md-auto col-lg-10 px-md-0 mx-0 px-0"  style="overflow: hidden;">  
<div class="row m-0">

  <!-- section-1 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">

        <!--section-1.1-->      
        
        <div class="col-12 m-0 p-0" >    
        
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=HomePage('image', '1')?>);">
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '1')?>; opacity: 0.8;">
                    <a class="home-link" href="<?=HomePage('link', '1')?>">
                    <div class="p-5"><?=HomePage('content', '1')?></div> 
                    </a>
                </div>
            </div>  
            
        </div>
        
       

        <!--section-1.2--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '2')?>);">   
                <div class="page2overlay float-end" style="background:<?=HomePage('bg_color', '2')?>;opacity: 0.6;">
                 <a class="home-link" href="<?=HomePage('link', '2')?>">
                    <div class="p-4" ><?=HomePage('content', '2')?></div> 
                 </a>
                </div>      
            </div>
        </div>
    
        <!--section-1.3--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '3')?>);">   
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '3')?>;opacity: 0.6;"> 
                 <a class="home-link" href="<?=HomePage('link', '3')?>">
                    <div class="p-4" style="opacity: 1; z-index:999; "><?=HomePage('content', '3')?></div>  
                 </a>                 
                </div>                 
            </div>
        </div>

    </div>   
  </div>


  <!-- section-2 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">       

        <!--section-2.1--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '4')?>);">  
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '4')?>;opacity: 0.6;">
                    <a class="home-link" href="<?=HomePage('link', '4')?>">
                        <div class="p-4" ><?=HomePage('content', '4')?></div> 
                    </a>
                </div>                             
            </div>
        </div>



        <!--section-2.2--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '5')?>);">  
                <div class="page2overlay float-end" style="background:<?=HomePage('bg_color', '5')?>;opacity: 0.6;">
                    <a class="home-link" href="<?=HomePage('link', '5')?>">
                        <div class="p-4" ><?=HomePage('content', '5')?></div> 
                    </a>
                </div>                             
            </div>
        </div>


         <!--section-2.3-->        
        <div class="col-12 m-0 p-0" >            
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=HomePage('image', '6')?>);">
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '6')?>; opacity: 0.8;">
                    <a class="home-link" href="<?=HomePage('link', '1')?>">
                    <div class="p-5"><?=HomePage('content', '6')?></div> 
                    </a>
                </div>    
            </div>            
        </div>

    </div>   
  </div>


  <!-- section-3 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">

        <!--section-3.1-->         
        <div class="col-12 m-0 p-0" >            
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=HomePage('image', '7')?>);">
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '7')?>; opacity: 0.8;">
                    <a class="home-link" href="<?=HomePage('link', '1')?>">
                    <div class="p-5"><?=HomePage('content', '7')?></div> 
                    </a>
                </div>    
            </div>            
        </div>
        
        <!--section-3.2--> 
        <a class="home-link" href="<?=HomePage('link', '8')?>">
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '8')?>);">   
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '8')?>;opacity: 0.6;">                    
                    <a class="home-link" href="<?=HomePage('link', '8')?>">
                      <div class="p-5" > <?=HomePage('content', '8')?></div>
                    </a>                    
                </div>               
            </div>
        </div>
        </a>

        <!--section-3.3--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '9')?>);">  
                <div class="page2overlay float-end" style="background:<?=HomePage('bg_color', '9')?>;opacity: 0.6;">
                    <a class="home-link" href="<?=HomePage('link', '9')?>">
                        <div class="p-4" ><?=HomePage('content', '9')?></div> 
                    </a>
                </div>                             
            </div>
        </div>



    </div>   
  </div>


</div>
</main>

<?php include "inc/footer.php";?>
   



    
    
