<?php include('connection.php');
session_start();
$output= array();
$sql = "SELECT * FROM report ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'rep_id',
	1 => 'rid',
	2 => 'uid',
	3 => 'o_id',
	4 => 'description',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE rep_id like '%".$search_value."%'";
	$sql .= " OR rid like '%".$search_value."%'";
	$sql .= " OR uid like '%".$search_value."%'";
	$sql .= " OR o_id like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY rep_id desc";
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
	$report = $row['rep_id'];
	$request = $row['rid'];
	$user = $row['uid'];
	$officer = $row['o_id'];
	$description = $row['description'];

	$sql1 = "SELECT fname FROM officer WHERE o_id='$officer'";
	$query1 = mysqli_query($con,$sql1);
	$count_rows1 = mysqli_num_rows($query1);
	$row1 = mysqli_fetch_assoc($query1);
	$oname = $row1['fname'];

	$sql2 = "SELECT fname FROM user WHERE uid='$user'";
	$query2 = mysqli_query($con,$sql2);
	$count_rows2 = mysqli_num_rows($query2);
	$row2 = mysqli_fetch_assoc($query2);
	$uname = $row2['fname'];


	$sql3 = "SELECT * FROM request WHERE rid='$request'";
	$query3 = mysqli_query($con,$sql3);
	$count_rows3 = mysqli_num_rows($query3);
	$row3 = mysqli_fetch_assoc($query3);
	$dname = $row3['device_name'];
	$problem = $row3['problemCS'];
	$serial = $row3['serial'];

	$sub_array = array();
	$sub_array[] = $report;
	$sub_array[] = $oname;
	$sub_array[] = $uname;
	$sub_array[] = $dname;
	$sub_array[] = $serial;
	$sub_array[] = $problem;
	$sub_array[] = $description;
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
