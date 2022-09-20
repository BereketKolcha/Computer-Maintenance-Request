<?php include('connection.php');
session_start();
$output= array();
$sql = "SELECT * FROM request ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'rid',
	1 => 'device_name',
	2 => 'problemCS',
	3 => 'serial',
	4 => 'registerd_date',
	4 => 'description',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE rid like '%".$search_value."%'";
	$sql .= " OR device_name like '%".$search_value."%'";
	$sql .= " OR serial like '%".$search_value."%'";
	$sql .= " OR problemCS like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY rid desc";
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

  if ($row['status'] != "sent" && $row['status'] != "finished") {
  	$sub_array = array();
	$sub_array[] = $row['rid'];
	$sub_array[] = $row['device_name'];
	$sub_array[] = $row['problemCS'];
	$sub_array[] = $row['serial'];
	$sub_array[] = $row['registerd_date'];
	$sub_array[] = $row['description'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['rid'].'"  class="btn btn-primary btn-sm deleteBtn" >Assign</a>';
	$data[] = $sub_array;
  }
	
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
