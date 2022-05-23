<?php include "inc/header.php";

if (isset($_GET['team'])) {
    $pageurl = $_GET['team'];
    $teamurl = str_replace('-', ' ', $_GET['team']);
    $pagedata = SelectData('our_team', "WHERE Name='$teamurl'");
    $team = $pagedata->fetch_object();
    $teamid = $team->team_id;
    $sharelink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
} ?>



<!-- main content -->
 <main class="col-md-10 ms-sm-auto col-lg-10  m-0 p-0">
 	<div class="header_img bg-dark">
 		<div class="row mx-0 m-0 p-0">
 			<div class="col-9  m-0 p-0" style="background-image: url('assets/mediacenter/<?=settings('default_img')?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
 				<h1 class="text-white h2  pe-5"><?=$team->Name?>
 				<div class="overlay" style="background:<?php echo settings('Overlay_color')?>; opacity: 0.7;"></div>
            </h1>   
                              
 			</div>
 			<div class="col-3 m-0 p-0 position-relative">
 				<div class="d-flex flex-column">
 					<img src="assets/mediacenter/<?=settings('default_img2')?>"style="height:200px;"> 					
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
                        </ol>                     
                    </nav>                   
 			</div>
 		</div>
 	</div>


     <!-- mobile side menu -->
     <div class="p-1 d-md-none d-sm-block my-3">        
         <nav class="navbar navbar-expand-lg navbar-light bg-danger">
              <div class="container-fluid">               
                <button class="navbar-toggler bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars fs-4 pe-3"></i><?=$team->Name?></button>
                <div class="collapse navbar-collapse " id="navbarNav">
                      <ul class="navbar-nav align-items-end">
                            <li class="nav-item">
                              <a class="nav-link  text-white"  href="team.php?team=<?=$pageurl?>"><?=$team->Name;?></a>
                            </li>
                        <?php 
                            $data = SelectData('our_team',"ORDER BY team_id ASC");
                            while($row = $data->fetch_object()){?> 
                            <li class="nav-item">
                              <a class="nav-link  text-white"  href="team.php?team=<?=$row->Name;?>"><?=$row->Name;?></a>
                            </li>
                            <?php }?>
                      </ul>
                </div>
              </div>
       </nav>
     </div>

 	<!-- detail content --> 
 	<div class="row mx-0" style="background:<?php echo settings('default_theam_color')?>;">
 		 <!--short sidebar -->
 		<div class="col-md-3 col-lg-2 pt-1 p-3 m-0 h-100 side-menu">
            <ul class="nav flex-column main_header">
                <?php 
                    $data = SelectData('our_team',"ORDER BY serial_list ASC");
                    while($row = $data->fetch_object()){?>
                <li class="nav-item">
                    <a class="nav-link nav_menu 
                        <?php if ($baseurl=='team.php?team='.str_replace(' ', '-', $row->Name)) { echo "active_menu";} ?>                    
                        " href="team.php?team=<?=str_replace(' ', '-', $row->Name)?>"><?=$row->Name;?>
                        <?php if ($baseurl=='team.php?team='.str_replace(' ', '-', $row->Name)) {  echo "<i class='fas fa-location-arrow' style='display: inline-block!important;transform: rotate(45deg);'></i>";} ?>                                                   
                   </a>
                   
                </li>
            <?php } ?>
            </ul>	
 		</div>

        <div class="col-12 col-md-9 col-lg-8 bg-white">                 
            <nav class="mb-3 d-md-none d-lg-none ">
                <ol class="nav" style="cursor: pointer;">
                    <li class="nav-link p-2 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-3 text-muted"></i></a> </li>
                    <li class="nav-link p-2 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-3 text-muted"></i></a></li>
                    <li class="nav-link p-2 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-3 text-muted"></i></a></li>
                    <li class="nav-link p-2 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-3 text-muted"></i></a></li>
                    <li class="nav-link p-2 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-3 text-muted "></i></a></li>
                </ol>                     
            </nav>

                            
        <div class="page_content p-4" style=" min-height:800px;" ><?=html_entity_decode($team->About)?></div> 


           
        </div> 
        
        <div class="col-lg-2 d-md-none d-lg-block bg-white pt-3 "> 
            <div class="lawyer">
                <?php 
                        $teag_data = SelectData('our_team', "WHERE team_id='$teamid'");
                        $contentinfo = $teag_data->fetch_object();?>     

                            <div class="team-card" id="ylh" >    
                                <div class="team_icon">
                                    <a href="tel:<?=$contentinfo->Phone_No?>"><i class="fas fa-phone-alt"></i></a> 
                                    <a href="mailto:<?=$contentinfo->Email?>"><i class="fas fa-envelope"></i></a>
                                </div>                                      
                                <div class="profile_pic"><img src="assets/mediacenter/team/<?=$contentinfo->Profile_pic?>" alt="" > </div>                                            
                                <div class="team_info">
                                    <b><?=$contentinfo->Name?></b>
                                    <p ><?=$contentinfo->Designation?></p> 
                                </div>                                 
                            </div> 
                <?php  ?>

            </div>
        </div>   

    </div><!-- row end  -->
</main>
<?php include"inc/footer.php";?>

<script>
    $(document).ready(function(){

        $("#ylhbtn").click(function(){
            $("#ylh").toggle(300);
        });

        $(".readbtn").click(function(){
            $(".read").toggle(200);
        });

    });
</script>
