<?php include('connection.php');
session_start();
$output= array();
$sql = "SELECT * FROM officer ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'o_id',
	1 => 'fname',
	2 => 'lname',
	3 => 'username',
	4 => 'role',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE username like '%".$search_value."%'";
	$sql .= " OR lname like '%".$search_value."%'";
	$sql .= " OR fname like '%".$search_value."%'";
	$sql .= " OR role like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY o_id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['o_id'];
	$sub_array[] = $row['fname'];
	$sub_array[] = $row['lname'];
	$sub_array[] = $row['username'];
	$sub_array[] = $row['role'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['o_id'].'"  class="btn btn-success btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['o_id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
