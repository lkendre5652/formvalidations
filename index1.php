<?php 
 
include("config.php");

$fname = !empty($_POST['fname'])? $_POST['fname'] : "";
$mname = !empty($_POST['mname'])? $_POST['mname'] : "";
$lname = !empty($_POST['lname'])? $_POST['lname'] : "";
$ename = !empty($_POST['ename'])? $_POST['ename'] : "";
$cname = !empty($_POST['cname'])? $_POST['cname'] : "";
$address = !empty($_POST['address'])? $_POST['address'] : "";
$skills = !empty($_POST['skills'])? $_POST['skills'] : "";
$address1 = !empty($_POST['address1'])? $_POST['address1'] : "";
$resume = !empty($_FILES['resume'])? $_FILES['resume'] : "";

$file_name = $_FILES['resume']['name'];
$file_size = $_FILES['resume']['size'];
$file_tmp = $_FILES['resume']['tmp_name'];
$file_type = $_FILES['resume']['type'];
$file_error = $_FILES['resume']['error'];

// Move uploaded file to a directory
move_uploaded_file($file_tmp, "uploads/" . $file_name);
$file_content = file_get_contents($file_tmp);

if( !empty($_POST['fname']) && !empty($_POST['mname']) && !empty($_POST['lname']) && !empty($_POST['ename']) && !empty($_POST['cname']) && !empty($_POST['address']) && !empty($_POST['skills']) && !empty($_POST['address1'])  && !empty($file_name)   ){

	$query = "INSERT INTO empdata (fname,mname,lname,ename,cname,address,skills,address1,resume) VALUES( '$fname','$mname','$lname','$ename','$cname','$address','$skills','$address1','$resume' ) ";


	$result = mysqli_query($conn, $query);
	if( $result ){
		$rsp = array("msg" => "success" , "status" => "success", "cls" => "text-success");
		echo json_encode($rsp);
	}else{
		$rsp = array("msg" => "failed" , "status" => "failed","cls" => "text-warning");
		echo json_encode($rsp);
	}

}

?>