<?php if (isset($_GET['category'])) {echo $_GET['category'];}elseif (isset($_GET['sub_category'])) {echo $_GET['sub_category']; }else{echo 'All Post';}?>




        <div class="m-0 p-0 text-center" id="ylh" style="border:none;">
            <img src="assets/mediacenter/team/<?=$contentinfo->Profile_pic?>" width="100%">
            <div class="card card-body" style="background-color:<?php echo $pageinfo->contact_parson_color;?>;">
                <b class=" text-center" style="font-size:13px;"><?=$contentinfo->Name?></b>
                <p class=" text-center" style="font-size:11px;"><?=$contentinfo->Designation?></p>
                <p class=" text-center  p-0 m-0" style="font-size:12px;"><?=$contentinfo->Phone_No?></p>
                <p class=" text-center  p-0 m-0" style="font-size:12px;"><?=$contentinfo->Email?></p>
            </div>
        </div>





<script>
    $(document).ready(function(){

        $(".menubtn").click(function(){
            $(".menu").toggle(200);
        });

        $(".teambtn").click(function(){
            $(".team").toggle(200);
        });

        $(".pagebtn").click(function(){
            $(".page").toggle(200);
        });

        $(".settingbtn").click(function(){
            $(".setting").toggle(200);
        });
        
        $(".globalbtn").click(function(){
            $(".global").toggle(200);
        });

    });
</script>