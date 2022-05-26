<?php include "inc/header.php";?>

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
        width:45%;
        overflow: hidden;
    }


    .home-link{
        text-decoration: none;
        margin: 0;
        padding: 0;
    }

    .home-link:hover{
        opacity: 0.5;
    }


    .page-content  h2{
        text-shadow: 2px 2px #000;
        font-family: MochiyPopOne;
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



</style>

<!-- main content -->
<main class="col-md-10 ms-md-auto col-lg-10 px-md-0 mx-0"  style="overflow: hidden;">  
<div class="row m-0">

  <!-- section-1 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">

        <!--section-1.1-->        
        <div class="col-12 m-0 p-0" >            
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=HomePage('image', '1')?>);">
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '1')?>; opacity: 0.8;">
                    <h2 class="page_titletext text-center p-5"><a class="home-link" href="<?=HomePage('link', '1')?>"><?=HomePage('content', '1')?> </a>
                    <br><a href="<?=HomePage('link', '1')?>" class="readmore">Read More</a>                    

                 </h2> 
                </div>    
            </div>            
        </div>
       

        <!--section-1.2--> 
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '2')?>);">   
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '2')?>;opacity: 0.6;">
                    <h5 class="page_titletext p-3 pt-5 ">
                        <a class="home-link" href="<?=HomePage('link', '2')?>">
                            <?=HomePage('content', '2')?>
                        </a>
                    </h5>
                </div>               
            </div>
        </div>

        
        
        <!--section-1.3--> 
        <a class="home-link" href="<?=HomePage('link', '3')?>">
        <div class="col-12 m-0 p-0">
            <div class="page-content page3" style="background-image:url(assets/mediacenter/<?=HomePage('image', '3')?>)">                
            </div>
        </div>
        </a>
    </div>   
  </div>


  <!-- section-2 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">       

        <!--section-2.1--> 
        <a class="home-link" href="<?=HomePage('link', '4')?>">
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '4')?>);">   
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '4')?>;opacity: 0.6;">
                    <h5 class="page_titletext p-3 pt-5 ">
                        <a class="home-link" href="<?=HomePage('link', '2')?>">
                            <?=HomePage('content', '4')?>
                        </a>
                    </h5>
                </div>               
            </div>
        </div>
        </a>


        <!--section-2.2--> 
        <a class="home-link" href="<?=HomePage('link', '5')?>">
        <div class="col-12 m-0 p-0">
          <div class="page-content page3" style="background-image:url(assets/mediacenter/<?=HomePage('image', '5')?>)">                
            </div>
        </div>
        </a>


         <!--section-2.3-->        
        <div class="col-12 m-0 p-0">
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=HomePage('image', '6')?>);">  
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '6')?>;opacity: 0.8;">
                    <h2 class="page_titletext text-center p-5"> 
                        <a class="home-link" href="<?=HomePage('link', '6')?>"> <?=HomePage('content', '6')?></a>
                         <br><a href="<?=HomePage('link', '6')?>" class="readmore">Read More</a>
                    </h2>                    
                </div>                                              
            </div>
        </div>
        </a>
    </div>   
  </div>



  <!-- section-3 -->
  <div class="col-lg-4 col-md-6 m-0 p-0 mb-lg-0">    
    <div class="row mx-0">

        <!--section-3.1-->         
        <div class="col-12 m-0 p-0">
            <div class="page-content page1" style="background-image:url(assets/mediacenter/<?=HomePage('image', '7')?>);">  
                <div class="page1overlay" style="background:<?=HomePage('bg_color', '7')?>; opacity: 0.8;">
                    <h2 class="page_titletext text-center p-5">
                        <a class="home-link" href="<?=HomePage('link', '7')?>">
                            <?=HomePage('content', '7')?>
                            <br><a href="<?=HomePage('link', '7')?>" class="readmore">Read More</a>
                         </a>
                    </h2>                    
                </div>                                              
            </div>
        </div>
        

        <!--section-3.2--> 
        <a class="home-link" href="<?=HomePage('link', '8')?>">
        <div class="col-12 m-0 p-0">
            <div class="page-content page2" style="background-image:url(assets/mediacenter/<?=HomePage('image', '8')?>);">   
                <div class="page2overlay" style="background:<?=HomePage('bg_color', '8')?>;opacity: 0.6;">
                    <h5 class="page_titletext p-3 pt-5 ">
                        <a class="home-link" href="<?=HomePage('link', '2')?>">
                            <?=HomePage('content', '8')?>
                        </a>
                    </h5>
                </div>               
            </div>
        </div>
        </a>


        <!--section-3.3--> 
        <a class="home-link" href="<?=HomePage('link', '9')?>">
        <div class="col-12 m-0 p-0">
            <div class="page-content page3" style="background-image:url(assets/mediacenter/<?=HomePage('image', '9')?>)">                
            </div>
        </div>
        </a>
    </div>   
  </div>


</div>
</main>

<?php include "inc/footer.php";?>
   



    
    
