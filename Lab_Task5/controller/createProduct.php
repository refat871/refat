<?php  
require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['bprice'] = $_POST['bprice'];
	$data['sprice'] = $_POST['sprice'];
  
  // else 
  // {
  //   echo "Sorry, there was an error uploading your file.";
  // }

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
}
 else {
	echo 'You are not allowed to access this page.';
}

?>