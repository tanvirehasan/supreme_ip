<?php include "inc/header.php";?>

<!-- main content -->
 <main class="col-md-10 ms-sm-auto col-lg-10  m-0 p-0">
 	<div class="header_img">
 		<div class="row m-0 p-0 g-0">

 			<div class="col-9  m-0 p-0" style="background:<?php echo settings('Overlay_color')?>;">	
 			             <img src="assets/mediacenter/<?php echo settings('default_img')  ?>" alt="" style="height: 200px; position: absolute; opacity:<?=settings('Overlay_color_opasity')?>">
                 
                <h1 class="text-white h2 pe-5 " style="position: absolute; width: 70%; ">Contact Us</h1>  
              
                   
 			</div>


 			<div class="col-3 m-0 p-0 position-relative"  style="background:<?=settings('Overlay_color2')?>;">                
 				<div class="d-flex flex-column g-0">
 					<img src="assets/mediacenter/<?php echo settings('default_img2') ?>"style="height:200px; opacity:<?=settings('Overlay_color2_opasity') ?>;"> 

 				</div>
               

                <!-- breadcrumb -->
                    <nav aria-label="" class="breadcrumb_menu header_icon">
                        <ol class="nav" style="cursor: pointer;">
                            <li class="nav-link p-1 "><a href="https://www.facebook.com/sharer/sharer.php?u=<?=$sharelink?>"><i class="fab fa-facebook-square fs-5 "></i></a> </li>
                            <li class="nav-link p-1 "><a href="https://twitter.com/intent/tweet?url=<?=$sharelink?>"><i class="fab fa-twitter-square fs-5 "></i></a></li>
                            <li class="nav-link p-1 "><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$sharelink?>"><i class="fab fa-linkedin fs-5 "></i></a></li>
                            <li class="nav-link p-1 "><a href="https://api.whatsapp.com/send?text=<?=$sharelink?>"><i class="fab fa-whatsapp-square fs-5 "></i></a></li>
                            <li class="nav-link p-1 "><a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?=$sharelink?>"><i class="fas fa-envelope fs-5 "></i></a></li>
                            <li class="nav-link p-1 "><a href="print.php?id=<?= $pageinfo->page_id?>" target="null" > <i class="fas fa-print  fs-5"></i> </a> </li>
                        </ol>                     
                    </nav>                   
 			</div>
 		</div>
 	</div>


 	<!-- detail content --> 
 	<div class="row mx-0" style="background:<?php echo settings('default_theam_color')?>;">
 		 <!--short sidebar -->


        <div class="col-12 col-md-12 col-lg-12 bg-white">                 
                            
        <div class="page_content p-4" style=" min-height:800px;" >
        <div class="row bg-light p-0 ">
            <div class="col-md-4 p-0">
                <div class="contact_icon">
                    <h6 class="text-white p-1" ><i class="fas fa-map-marker-alt"></i> Rampura</h6>
                </div>
                
                <div class="contactinfo p-3 mt-5">
                    <h4>SUPREMEiP Law Firm</h4>
                    <p><i class="fas fa-map-marker-alt"></i> House#23 (Ground Floor), Road#4, Block#A, Banasree, Rampura, Dhaka-1219, Bangladesh</p>
                    <p><i class="fas fa-phone-alt"></i> +8801613336333</p>
                    <p><i class="fab fa-whatsapp"></i> +8801613336333</p>
                    <p><i class="fab fa-weixin"></i> +8801613336333</p>
                    <p><i class="fas fa-envelope"></i> info@supremeip.com</i></p>
                    <p><i class="fas fa-envelope"></i> info@supremeip.com</i></p>
                    <p><i class="fas fa-globe"></i> www.supremeip.com</i></p>
                </div>

            </div>
            <div class="col-md-8 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.5219015150738!2d90.4236387154317!3d23.764422694156355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f169f4a21f%3A0x4cdb23ddff69d585!2sSUPREMEiP%20Law%20Firm%20(Patent%2C%20Trademark%20%26%20Company%20Lawyers)!5e0!3m2!1sen!2sbd!4v1653055241604!5m2!1sen!2sbd" width="100%" margin="0" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
                        
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