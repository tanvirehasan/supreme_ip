<?php 
    include "inc/header.php";
    if (isset($_GET['category'])) {
       $cat_id=cateid("{$_GET['category']}");       
    }

    if (isset($_GET['sub_category'])) {
       $maincatid=perent_id($_GET['sub_category']);
       $prentname=postcate('category_name', $maincatid);   
    }
?>
<!-- main content -->
 <main class="col-md-9 ms-sm-auto col-lg-10  px-md-0 px-0" >
    <div class="header_img bg-dark ">
        <div class="row mx-0 m-0 p-0">
            <div class="col-9  m-0 p-0"style="background-image: url('assets/mediacenter/<?=settings('default_img')?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                <h1 class="text-white h2"><?php if (isset($_GET['category'])) {echo $_GET['category'];}elseif (isset($_GET['sub_category'])) {echo $_GET['sub_category']; }else{echo 'All Post';}?>
                <div class="overlay" style="background:<?=settings('Overlay_color')?>; opacity: 0.7;"></div>
            </h1>                
            </div>
            <div class="col-3 m-0 p-0 position-relative">
                <div class="d-flex flex-column">
                    <img src="assets/mediacenter/<?=settings('default_img2')?>"style="height:200px;">    
                </div>
                <div class="overlay2" style="background:<?=settings('Overlay_color2')?>; opacity: 0.5;"></div>
    
                
                <nav aria-label="" class="breadcrumb_menu">
                    <ol class="nav" style="cursor: pointer;">
                        <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-5 text-white"></i></a> </li>
                        <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-5 text-white"></i></a></li>
                        <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-5 text-white"></i></a></li>
                        <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-5 text-white"></i></a></li>
                        <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-5 text-white "></i></a></li>
                        
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
 		<div class="col-2 mt-2  pt-4 p-3 h-50  side-menu ">
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
                    <a class="nav-link nav_menu <?php if ($baseurl=='post.php?category='.$row->category_name OR $prentname==$row->category_name) { echo "active_menu";} ?> " href="post.php?category=<?=$row->category_name?>">
                        <?=$row->category_name?>
                        <?php if ($baseurl=='post.php?category='.$row->category_name ) { echo "<span class='h5'>&#8594;</span>";}?>
                    </a>
                </li>
               <?php }?>              
            </ul>   
 		</div>

        <!------------------- All post -------------------->
        <div class="col-12 col-md-8 col-lg-8 m-0 pt-4 p-3 bg-white">
            <div class="cat_content">
            <!-- all post  -->
            <h5 class="section_title" ><i class='fas fa-file-alt'></i> Recent post: 
                <?php if (isset($_GET['category'])) {echo $_GET['category'];}elseif (isset($_GET['sub_category'])) {echo $_GET['sub_category']; }else{echo 'All Post';}?>
            </h5>                        
            <?php 
                if (isset($_GET['category'])) {
                    $data=SelectData('blog_news',"WHERE parent_cat_id='$cat_id'  LIMIT 10");                            
                }elseif (isset($_GET['sub_category'])) {
                    $sub_cat_id = cateid("{$_GET['sub_category']}");
                    $data=SelectData('blog_news',"WHERE cat_title='$sub_cat_id'  LIMIT 10");
                }else{

                    if (isset($_GET['page'])) {$pageid = $_GET['page'];}else{ $pageid ='';}
                    $traget_page= pagelimit($pageid,'10');
                    $data=SelectData('blog_news',"ORDER BY id DESC LIMIT $traget_page, 10");
                }

                while($row = $data->fetch_object()){?> 
                    <div class="Recent_post p-0">                               
                        <a class="nav-link p-0 m-0" href="post_full.php?detail=<?=$row->page_url?>">
                            <div class="card mb-3 bg-light rounded-0 border-0">
                                <div class="row p-0">
                                    <div class="col-md-4 Recent_post_imge">
                                        <img src="assets/blogs/<?=$row->featured_image?>" width="100%" height="100%" alt="..." style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body ms-0">
                                            <h5 class="card-title" <?=(postcate('category_name',"$row->parent_cat_id")=='Blog(BN)') ? "style='font-family: bangla-azad !important; font-size:22px;'" : '' ;?> ><?=$row->post_title?></h5>
                                            <p class="card-text text-dark" <?=(postcate('category_name',"$row->parent_cat_id")=='Blog(BN)') ? "style='font-family: bangla-regular !important;font-size:16px;'" : '' ;?> >
                                                <?php $postcontent=html_entity_decode($row->blognews_content); $content=strip_tags($postcontent);
                                                        echo mb_strimwidth($content,0,270," "); ?></p>

                                            <p class="card-text text-dark" style="font-size: 11px;">
                                                By <span class="text-muted">admin</span> on <?=date('M d, Y | h:i A',strtotime($row->datetime)); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            <?php
                $page=pagnation('blog_news', '10');
                if ($page>1) {?>
                    <!-- pagination -->
                    <div class="pagination">
                        <a href="post.php?page=1">&laquo;</a>
                            <?php
                                for ($traget=1; $traget <=$page ; $traget++) { ?>
                                    <a class="<?=("post.php?page=".$traget==$baseurl) ? 'active' : '' ;?>" href="post.php?page=<?php echo $traget ?>"><?php echo $traget ?></a>
                            <?php } ?>
                        <a href="post.php?page=<?=$page?>">&raquo;</a>
                    </div>
            <?php }?>
            <!-- Popular_post -->
            <div class="Popular_post pt-5">
                <h5 class="section_title" ><i class='fas fa-file-alt'></i> Popular post: 
                <?php if (isset($_GET['category'])) {echo $_GET['category'];}elseif (isset($_GET['sub_category'])) {echo $_GET['sub_category']; }else{echo 'All Post';}?>
                </h5>      
                <div class="row gx-3">                             
                    <?php
                        $data = (!isset($_GET['category'])) ? SelectData('blog_news','LIMIT 12'): SelectData('blog_news',"WHERE parent_cat_id='$cat_id'  LIMIT 4");
                        while($row = $data->fetch_object()){?> 
                        <div class="col-md-2 mb-4 d-flex align-items-stretch">                                   
                            <div class="post_card bg-light p-0 m-0 rounded-0 border-0 " >                                            
                                <a class="nav-link p-0 m-0 " href="post_full.php?detail=<?=$row->page_url?>">                                                
                                <img src="assets/blogs/<?=$row->featured_image?>" style="object-fit: cover; height: 100px;  width:100%">
                                <div class="Popular_post_title p-2"><?= substr_replace($row->post_title, "",150)?></div>   
                                </a>                                           
                            </div>                                    
                        </div>  
                    <?php } ?> 
                </div>                       
            </div>
            <!-- Popular_post end-->
        </div>
    </div>
                   

    <!-- Category Post  -->
    <div class="col-md-2 m-0 p-0 pt-4 bg-white">                                    
        <div class="sub-cat lawyer">
            <h6 class="m-0 section_title"><i class="far fa-file-alt"></i> Category Post</h6>
            <hr class="p-0 mt-2 " style="border-bottom:3x solid #979797;  width: 100%;" >
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
                        <li class="pt-1"><a class="<?=(isset($_GET['sub_category']) AND $_GET['sub_category']==$catrow->category_name) ? 'sub_active' : '' ;?>"  href="post.php?sub_category=<?=$catrow->category_name?>"><?=$catrow->category_name?> </a></li>

                <?php } ?>
            </ul>
        </div>                       
    </div>

    </div>
 </main>
                  

<?php include"inc/footer.php";?>
