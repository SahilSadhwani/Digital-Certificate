<?php
require_once("../../functions/db.php");
include('phpqrcode/qrlib.php'); 
//$organization_id=$_SESSION['organization_id'];
$organization_id=13;
//$generation_id=$_GET['generation_id'];
$generation_id=1;
$query="Select commitee_name from generation where generation_id=$generation_id";
echo $query;
$result_set=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result_set);
$table_name=$row['commitee_name'];


echo $table_name;

$query="Select * from $table_name";
$result_set=mysqli_query($connection,$query);
$num=mysqli_num_rows($result_set);
$count=0;
while($count!=2)
{   
    echo "<br>";
    $row=mysqli_fetch_assoc($result_set);
    $student_id=$row['student_id'];
    $name=$row['student_name'];
//    echo $student_id;
    $count=$count+1;
    $folder="images/";
    
    
//    $qr_name=explode(".",$generation_id,$student_id);
    $file_name=".png";
    $qr_name=$generation_id.$student_id.$file_name;
    $text=$name;
    
    echo $qr_name;
    $file=$folder.$qr_name;
    QRcode::png($text,$file);
    $link='<a>page</a>';
    $query="Update $table_name set qr_image='$qr_name',link='$link'";
    echo $query;
    $result=mysqli_query($connection,$query);
}
?>