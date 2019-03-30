<?php
include_once("../../functions/db.php");
session_start();
//$organization_id = $_SESSION["organization_id"]; to be uncommented
$organization_id = 13; //to be commented afterwards when involving sessions

if(isset($_POST["submit_generation"])){
    $name = $_POST["name"];
//    $logo = $_POST["logo"];
    $commitee_name = $_POST["commitee_name"];
//    echo $commitee_name;
    $certificate_title = $_POST["certificate_title"];
    $date = $_POST["date"];
    $signature_1_name = $_POST["signature_1_name"];
//    $signature_1_photo = $_POST["signature_1_photo"];
    $signature_2_name = $_POST["signature_2_name"];
//    $excel_sheet = $_POST["excel_sheet"];
    
    
    
    
    
    $query = "INSERT INTO generation(organization_id, template_id, commitee_name, certificate_title, issuer_name, higher_authority_name, date) VALUES($organization_id, '1','$commitee_name', '$certificate_title', '$signature_1_name', '$signature_2_name','$date')";
    
//    echo $query;
    
    $result = mysqli_query($connection, $query);
    
    $recent_id = mysqli_insert_id($connection);
    
    
    
    
    if(isset($_FILES['logo'])){
        //yes the file was uploaded so we are initializing all the required variables
        $image_name = $_FILES['logo']['name'];
        $image_size = $_FILES['logo']['size'];
        $temp_name = $_FILES['logo']['tmp_name'];
        $file_type = $_FILES['logo']['type'];
        
//        echo $image_name;
//        $file_extension = strtolower(end(explode(".",$image_name)));
    }
    
    
    if(isset($_FILES['logo'])){
        move_uploaded_file($temp_name,"../logo_images/".$image_name);   
    }
//    echo "ADDED";
    
    
    $image = $recent_id.".png";
//    echo $image;
    $query = "UPDATE generation SET logo = '$image' WHERE generation_id = $recent_id";
//    echo $recent_id;    
    $result = mysqli_query($connection, $query);
    
    
    
    
    if(isset($_FILES['signature_1_photo'])){
        //yes the file was uploaded so we are initializing all the required variables
        $image_name = $_FILES['signature_1_photo']['name'];
        $image_size = $_FILES['signature_1_photo']['size'];
        $temp_name = $_FILES['signature_1_photo']['tmp_name'];
        $file_type = $_FILES['signature_1_photo']['type'];
        
//        echo $image_name;
//        $file_extension = strtolower(end(explode(".",$image_name)));
    }
    
    
    if(isset($_FILES['signature_1_photo'])){
        move_uploaded_file($temp_name,"images/issuer_signature/".$image_name);   
    }
//    echo "ADDED";
    
    
    $image = $recent_id.".png";
//    echo $image;
    $query = "UPDATE generation SET issuer_signature = '$image' WHERE generation_id = $recent_id";
//    echo $recent_id;    
    $result = mysqli_query($connection, $query);
    
    
    
}


?>