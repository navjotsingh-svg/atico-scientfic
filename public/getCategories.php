<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = mysqli_connect('localhost','u458331663_scientific','Aticoindia@pass24','u458331663_scientific');
/*$file = fopen('no_category_group.csv', 'w'); 
$fields = array("Category","Status");
fputcsv($file, $fields);
$ids=array();
$sql = "select *from group_categories";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){
	$ids[]="'".$row['category_id']."'";
}
$sql= "select *from categories where id not in (".implode(",", $ids).") and parent_id=0";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){
	$data=array($row['name'],$row['status']==1?'Active':'Inactive');
	fputcsv($file, $data);
}*/
$file = fopen('category_group.csv', 'w'); 
$fields = array("Group Name","Category Name",'Category Status',"Sub Categories",'Sub Category Status');
fputcsv($file, $fields);

$groups = array();
$sql = "select *from groups where status=1";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
	$id= $row['id'];
	$group_name = $row['name'];
	$qry = "select *from group_categories where group_id='".$id."'";
	$response = mysqli_query($conn, $qry);
	while( $res = mysqli_fetch_array($response)){
		$cat_id =$res['category_id'];
		$sql2 = "select *from categories where  id='".$cat_id."'";
		$response2 = mysqli_query($conn, $sql2);
		while( $res2 = mysqli_fetch_array($response2)){
			$cat_name = $res2['name'];
			$cstatus = $res2['status']==1?'Active':'Inactive';
		}

		$sql2 = "select *from categories where  parent_id='".$cat_id."' order by name ASC";
		$response2 = mysqli_query($conn, $sql2);
		if(mysqli_affected_rows($conn)> 0 ){
			while( $res2 = mysqli_fetch_array($response2)){
				$sub_cat_name = $res2['name'];
				$csstatus = $res2['status']==1?'Active':'Inactive';
				$data = array($group_name,$cat_name,$cstatus,$sub_cat_name,$csstatus);
				fputcsv($file, $data);

			}
		}
		else
		{
			$data = array($group_name,$cat_name,$cstatus,"","");
				fputcsv($file, $data);
		}

	}

}
?>