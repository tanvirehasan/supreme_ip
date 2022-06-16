<?php 
  include "inc/db.php";
  include "inc/function.php";

    if (isset($_GET['id'])) {
        $page_data = SelectData('pages', "WHERE page_id={$_GET['id']} AND page_status='1' ");
        $pageinfo = $page_data->fetch_object();
        $pageid = $pageinfo->page_id;
        $page_content=$pageinfo->page_content;
        $page_title=$pageinfo->page_title;
    }

    if (isset($_GET['blog'])) {
        $blog_data = SelectData('blog_news', "WHERE page_url='{$_GET['blog']}' AND page_status='1' ");
        $bloginfo = $blog_data->fetch_object();
        $page_title=$bloginfo->post_title;
        $page_content=$bloginfo->blognews_content;
        $parent_cat_id=$bloginfo->parent_cat_id;
        $pageid = '0';
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
</head>

<body style="margin:0;" id="body" >
    <!-- onload="window.print()" onfocus="window.close()" -->
    <header >
        <?php
            $data = SelectData('settings','');
            $row = $data->fetch_object();
        ?>
        <img src="assets/brand/<?=$row->Print_page_header?>" style="width: 100%;" >
        <div class="print_button">
            <i onclick="window.print()" class="fas fa-print"></i>
            <i id="pdf" class="fas fa-file-pdf"></i>
        </div>
    </header>

    <div class="fullcontent" style="margin:70px;" >  
        
        <div <?=(isset($_GET['blog']) AND postcate('category_name',"$parent_cat_id")=='Blog(BN)') ? "style='font-family: bangla-azad !important; font-size:25px; margin-bottom:15px'  " : ''; ?> ><?=(isset($_GET['blog'])) ? $page_title : '';?></div>
        <div <?=(isset($_GET['blog']) AND postcate('category_name',"$parent_cat_id")=='Blog(BN)') ? "style='font-family: bangla-regular !important; font-size:16px;'" : ''; ?>  style="font-size:14px; text-align:justify;" class="text"><?=html_entity_decode($page_content)?></div>





        <!--Price-->
        <?php 
            $price_data = SelectData('prices', "WHERE price_page_id={$pageid}");
            if ($price_data->num_rows>0) {?> 
            <h3 style="margin:15px 0px; padding-top:30px;"><i class="fas fa-chart-line px-1"></i> <?=$pageinfo->Section_Title_Price?></h3>
            <table id="customers" style="margin-bottom:30px;">
            <?php while ($price = $price_data->fetch_object()) {?> 
                <tr>
                    <td style="width: 80%;" >
                        <h3 style="padding-top: 5px; padding-buttom:5px;  font-family:'arial','bangla-regular';" ><?=$price->price_title?></h3>
                        <p style="padding:0px 0px; font-family:'arial','bangla-regular';">  <?=html_entity_decode($price->Price_Description)?></p>
                    </td>
                    <td><h3 style="font-family: bangla-regular, arial" ><?=$price->Priceamount?></h3></td>
                </tr>                 
            <?php } ?>
            </table>
        <?php } ?>
         


        <!-- flowchart -->
        <?php 
            $i=1;
            $flowchart_data = SelectData('flowchart', "WHERE page_id={$pageid}");
            if ($flowchart_data->num_rows>0) {?>                
                <div class="flowchart p-4 mt-5 bg-white">
                    <h3 style="margin:15px 0px; padding-top:30px;"><i class="fas fa-chart-line px-1"></i> <?=$pageinfo->Section_Title_Flowchart?></h3>
                    <div class="p-3">

                    <?php while ($flowchart = $flowchart_data->fetch_object()) {?>
                        <!-- stage1 -->
                        <div class="bg-light p-2 ost-multi-header mb-4">
                            <h3 style="width:100px; border-bottom:1px solid #000; margin-bottom:10px; "><?=$flowchart->Process_Title?></h3>
                            <h2 style="margin:10px 0px; "><?=$flowchart->Flowchart_Titel?></h2>
                            <p><?=html_entity_decode($flowchart->Flowchart_descripstion)?></p>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <!-- flowchart end -->

            

        <!-- flowchart -->
            <?php $faq_data = SelectData('faq', "WHERE page_id={$pageid}");
            if ($faq_data->num_rows>0) {?>                
                    <h3 style="margin:15px 0px; padding-top:30px;"><i class="fas fa-chart-line px-1"></i> <?=$pageinfo->Section_Title_Faq?></h3>
   
                    <?php while ($faq = $faq_data->fetch_object()) {?>                       
                        <h3 style="margin-bottom:10px;"><?=$faq->faq_title?></h3>
                        <p ><?=strip_tags($faq->faq_descrippstion)?></p> <br>                       
                    <?php } ?>
            <?php } ?>
            <!-- flowchart end -->



    </div>



<style>
body {margin: 0px; padding: 0px; font-family: arial;}
@font-face { font-family: bangla-regular; src: url('assets/dist/css/font/kalpurush/kalpurush.ttf');}
@font-face { font-family: bangla-azad; src: url('assets/dist/css/font/AzadFeni/AzadFeni.ttf'); }


h1,h2,h3,h4,h5,h6,p{
    margin: 0;
    padding: 0;
}

.print_button{
    position: fixed;
    top: 20px;
    right: 20px;
}

.print_button i{
    font-size: 25px;
    cursor: pointer;
    padding: 5px;
    color: #b61026;
}

#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
}

.footer{
    display: none;
}


@media print {

    @page :first {
        margin-top: 0cm;
    }

    @page{
        size: A4;
        size: portrait;
        size: auto;
        margin: 25mm 0mm 25mm 0mm; 
    }

    header{
        -webkit-print-color-adjust: exact !important;
    }
    .print_button{
        display: none;
    } 

}


</style>
 <script>
	$(document).ready(function($) { 
		$(document).on('click', '#pdf', function(event){
			event.preventDefault();			
			var element = document.getElementById('body');
			var opt = {
			  margin:       0,
			  filename:     '<?=$page_title?>'+'.pdf',
			  image:        { type: '.pdf', quality: 0.2 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
			};
			html2pdf().set(opt).from(element).save();
		});  
	});
</script>
</body>
</html>
