<?php 
    header("Content-type: text/css; charset: UTF-8");
    include "inc/db.php";
    include "inc/function.php";   
?>

.logoimg img{width:<?=settings('logo_size')?>%;}

<?php //Main menu ?>


.header_menu_scroll::-webkit-scrollbar-track{
  background-color: #fff;
}

.header_menu_scroll::-webkit-scrollbar{
  width: 3px;
  background-color: rgb(3, 110, 48);
}

.header_menu_scroll::-webkit-scrollbar-thumb{
  background-color: #047742;
  border: 2px solid #047742;
  border-radius: 10px;
}


.header_menu{
  height: <?=header_menu('scrol_height')?>px;
  margin:<?=header_menu('margin')?>;
}


.header_menu a{
  font-size: <?=header_menu('font_size')?>px !important;
  color:<?=header_menu('font_color')?>;
  text-transform:<?=header_menu('text_transform')?>;
  line-height:<?=header_menu('line_height')?>; 
  letter-spacing: 10px;
  cursor: pointer;
  margin-bottom:2px;
  font-family:<?php echo html_entity_decode(header_menu('font_family')); ?>;
}

.header_menu a i{
  transform: rotate(45deg);
  padding: 0 5px;
  display: none;
}

.header_menu a:hover{
  color: <?=header_menu('hover_color');?> !important;
  text-decoration: none;  
  font-weight: bold !important;
  transition: 0.3s;
  font-size: <?=2+header_menu('font_size');?>px !important;
}

.active{
  color:<?=header_menu('active_color');?> !important;
  font-size: <?=2+header_menu('font_size');?>px !important;
  font-weight: bold !important;
}


.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  overflow: visible;
  z-index: 100; /* Behind the navbar */
  box-shadow: 0px 0px <?=settings('shadow_color_number')?>px <?=settings('shadow_color')?>;
}




<?php //Sub-menu ?>

.side-menu a{ 
  font-size: <?=sub_menu('font_size')?>px;
  color:<?=sub_menu('font_color')?> !important;
  text-transform:<?=sub_menu('text_transform')?>;
  line-height:<?=sub_menu('line_height')?>; 
  cursor: pointer;
  margin-bottom:2px;
  font-family:<?php echo html_entity_decode(sub_menu('font_family')); ?>;

}

.side-menu li:hover a{  
  color:<?=sub_menu('hover_color')?> !important;
  text-decoration: none;
  font-size: <?=2+sub_menu('font_size');?>px !important;
  transition: 0.3s;
  font-weight: bold !important;
}


.side-menu .active_menu{
  color:<?=sub_menu('active_color')?> !important;
  font-weight: bold !important;
  font-size: <?=2+sub_menu('font_size');?>px !important;
}






<?php // Page Header?>


.header_img{
  box-shadow: 0px 0px  <?=settings('shadow_color_number')?>px <?=settings('shadow_color')?>;
}


.header_img h1{
  font-size:<?=settings('page_header_font_size')?>px !important;
  color:<?=settings('page_header_font_color')?>!important;
  font-family:<?=html_entity_decode(settings('page_header_font_famaily'))?>!important;
  text-transform:<?=settings('page_header_font_lettercash')?>!important;  
}

.header_img i{
  color:<?=settings('page_header_icon_color')?>!important;
}


#ylhbtn{

  font-size:<?=settings('Your_Lawyer_font_size')?>px !important;
  color:<?=settings('Your_Lawyer_font_color')?>!important;
  background:<?=settings('Your_Lawyer_bg_color')?>!important;
  font-family:<?=html_entity_decode(settings('Your_Lawyer_font_famaily'))?>!important;
  text-transform:<?=settings('page_header_font_lettercash')?>!important; 

}





<?php //Team ?>

.team_icon{
  padding: 5px 6px;
  position: absolute;
  z-index: 1;
  width:35px;
  background:<?=Team_Design('icon_bg_color')?>;
  overflow: hidden;
  border-bottom-right-radius:10px ;
}

.team_icon i{
  padding: 5px 3px;
  color: <?=Team_Design('icon_color')?>!important;
  font-size: 12px;
}

.team_icon i:hover{
  font-size: 14px;
}


.team_info{
  background: <?=Team_Design('background_color')?>;
  padding: 15px;
}

.team_info b{
  color: <?=Team_Design('name_font_color')?>!important;
  font-family:<?=html_entity_decode(Team_Design('name_font_family'))?>;
  font-size: <?=Team_Design('name_font_size')?>px;
}

.team_info p{
  font-size: <?=Team_Design('designation_font_size')?>px;
  color: <?=Team_Design('designation_font_color')?> !important;
  font-family:<?=html_entity_decode(Team_Design('designation_font_family'))?>;
}

.team-card:hover{
  box-shadow:0px 0px 7px <?=Team_Design('hover_color')?>;
  transition: 0.5s;
  cursor: pointer;
}


#ylh:hover{
 cursor: default !important;
}



.section_title_page{
  font-family: <?=html_entity_decode(Section_Design('font_family'))?>!important;
  background:<?=Section_Design('text_bg_color')?>!important;
  color:<?=Section_Design('font_color')?>!important;
  font-size: <?=Section_Design('font_size')?>px;
  padding: 10px 10px;
}
.section_title_page i{color:<?=Section_Design('font_color')?>!important;}



.post_card:hover{
  background:<?=settings('default_theam_color')?>!important;
  transition: 5s;
  color:black !important;
  
}





h1,.h1{ color:<?=text_color_settings('color_code', 'h1')?> !important; font-family:<?=html_entity_decode(text_color_settings('font_fmaily', 'h1'))?>!important; }
h2, .h2{ color:<?=text_color_settings('color_code', 'h2')?> !important;  font-family:<?=html_entity_decode(text_color_settings('font_fmaily', 'h2'))?>!important;}
h3, .h3{ color:<?=text_color_settings('color_code', 'h3')?> !important;  font-family:<?=html_entity_decode(text_color_settings('font_fmaily', 'h3'))?>!important;}
h4, .h4{ color:<?=text_color_settings('color_code', 'h4')?> !important;  font-family:<?=html_entity_decode(text_color_settings('font_fmaily', 'h4'))?>!important;}
h5, .h5{ color:<?=text_color_settings('color_code', 'h5')?> !important;  font-family:<?=html_entity_decode(text_color_settings('font_fmaily', 'h5'))?>!important;}
h6, .h6{ color:<?=text_color_settings('color_code', 'h6')?> !important;  font-family:<?=html_entity_decode(text_color_settings('font_fmaily', 'h6'))?>!important;}
p{ color:<?=text_color_settings('color_code', 'p')?> !important;}
blockquote{ color:<?=text_color_settings('color_code', 'q')?> !important;}
.Recent_post:hover h5{
  color:<?=text_color_settings('color_code', 'hover')?>!important;
}

a:hover, i:hover{
  color:<?=text_color_settings('color_code', 'hover')?>!important;
}


