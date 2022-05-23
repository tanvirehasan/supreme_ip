<?php
    include "db.php";

//SELECT
function SelectData($TableName, $moresql){
	global $conn;
	$sql = "SELECT * FROM $TableName $moresql";
	$select = mysqli_query($conn, $sql);
	return $select;
}

//update data
function UpdateData($table_name, $more){
	global $conn;
	$sql = "UPDATE {$table_name} SET {$more} ";
	$update = mysqli_query($conn,$sql);
	return $update;
}


//Delete Data
function DeleteData($table_name, $more){
	global $conn;
    $sql = "DELETE FROM {$table_name} WHERE {$more} ";
	$delete = mysqli_query($conn,$sql);
	return $delete;
}



//Home Page
function postcate($col_name, $id){
    $row = mysqli_fetch_array(SelectData('blogs_category',"WHERE cat_id='$id'"));
    return $row[$col_name];
}


//page name
function pagename($cat_col, $id){

    $sql = SelectData('pages',"WHERE page_id='$id'");
    $row = mysqli_fetch_array($sql);

    if (mysqli_num_rows($sql)>0) {
    	return $row[$cat_col];
    }else{
    	
    	$none = "None";
    	return $none;
    }



}



//UserData
function UserData($U_data){
    $row = mysqli_fetch_array(SelectData('admin',"WHERE email='{$_SESSION['user']}'"));
    echo $row[$U_data];
}

//UserData
function footerdata($U_data){
    $row = mysqli_fetch_array(SelectData('genar_setting',"WHERE id='1'"));
    echo $row[$U_data];
}



//reconect
function Reconect($url){
	echo "<script> location.replace('".$url."')</script>";
}


//Login Required
function If_Not_Login($url){
	if (!isset($_SESSION['user'])) {
		Reconect($url);
	}
}



//If_Login
function If_Login($url){
	if (isset($_SESSION['user'])) {
		Reconect($url);
	}
} 




//catagory
function catagory($cat_col, $id){
    $row = mysqli_fetch_array(SelectData('category',"WHERE cat_id='$id'"));
    return $row[$cat_col];
}


//child catagory
function sub_catagory($subcat_col, $pid){

	$sql = SelectData('sub_category',"WHERE sub_id='$pid'");
    $row = mysqli_fetch_array($sql);

    if (mysqli_num_rows($sql)>0) {
    	return $row[$subcat_col];
    }else{
    	
    	$none = "None";
    	return $none;
    }
     
}


//settings
function settings($U_data){
    $row = mysqli_fetch_array(SelectData('settings',""));
    echo $row[$U_data];
}


//header_menu
function header_menu($U_data){
    $row = mysqli_fetch_array(SelectData('header_menu',""));
    echo $row[$U_data];
}

//Sub_menu
function sub_menu($data){
    $row = mysqli_fetch_array(SelectData('sub_menu',""));
    return $row[$data];
}

//color code to color name
function color_code_to_name($color_id, $color_name){
    $row = mysqli_fetch_array(SelectData('color_settings',"WHERE color_code='$color_id' "));
    return $row[$color_name];
}


function select_color(){                                   
    $data = SelectData('color_settings','');
    while ($textcolor = $data->fetch_object()) {
    echo "<option value='$textcolor->color_code'>$textcolor->color_name</option>";                                 
    }
}


function font_select(){?>
    <option style="font-family:Georgia;" value="Georgia">Georgia</option>
    <option style="font-family:Times New Roman;" value="Times New Roman">Times New Roman</option>
    <option style="font-family:Arial;" value="Arial">Arial</option>
    <option style="font-family:Helvetica;" value="Helvetica">Helvetica</option>
    <option style="font-family:Arial Black;" value="Arial Black">Arial Black</option>
    <option style="font-family:Impact;" value="Impact">Impact</option>
    <option style="font-family:Lucida Sans Unicode;" value="Lucida Sans Unicode">Lucida Sans Unicode</option>
    <option style="font-family:Tahoma;" value="Tahoma">Tahoma</option>
    <option style="font-family:Verdana;" value="Verdana">Verdana</option>
    <option style="font-family:Courier New;" value="Courier New">Courier New</option>
    <option style="font-family:Lucida Console;" value="Lucida Console">Lucida Console</option>
    <option style="font-family:serif;" value="serif">serif</option>
    <option style="font-family:sans-serif;" value="sans-serif">sans-serif</option>
    <option style="font-family:cursive;" value="cursive">cursive</option>
    <option style="font-family:fantasy;" value="fantasy">fantasy</option>
    <option style="font-family:monospace;" value="monospace">monospace</option>
    <option style="font-family:Poppins;" value="Poppins">Poppins</option>
    <option style="font-family:'Bebas Neue', cursive;" value="Bebas Neue">Bebas Neue</option>
    <option style="font-family:'Oswald'" value="Oswald">Oswald</option>
<?php } 


//Team_Design
function Team_Design($data){
    $row = mysqli_fetch_array(SelectData('our_team_design',""));
    return $row[$data];
}

//Section_Design
function Section_Design($data){
    $row = mysqli_fetch_array(SelectData('section_design',""));
    return $row[$data];
}















?>