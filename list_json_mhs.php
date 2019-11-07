<?php 

	require_once('dbConnect.php');

	$sql = "select * from mobile";
	$result = mysqli_query($con,$sql);

$number_of_rows = mysqli_num_rows($result);
$temp_array = array();

if($number_of_rows > 0){
	while ($row = mysqli_fetch_assoc($result)){
		array_push($temp_array, array(
			"npm"=>$row['npm'],
			"nama"=>$row['nama'],
			"alamat"=>$row['alamat']
		));
	}
}else{
	echo "tidak ada data";
}
//var_dump($temp_array)

	echo json_encode(array("list_info"=>$temp_array));
 ?>