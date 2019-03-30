<?php
$student_name = "Vishal Israni";
$field = "Academics";
$rank = "1st";
$class= "D15";
$organisation_name = "VIVEKANAND INSTITUTE OF TECHNOLOGY";
$date = "22/07/2018";
$signature_1 = "Signature";
$signature_2 = "Signature";
$certificate_title = "Certificate of Achievement";
$committee_name = "CSI";

?>
  <html>
   <head>  
    
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style-certificate.css">

    
    <title>Certificate</title>
    </head>
    <body>
      <div class="content">
       <div class="container">
          <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="certificate-body">
             <div class="certi-qr-code">
                 <div class="qr-code">
                   <img src="../../assets/images/certificate_inside_images/qr-code.png" alt="">
               </div>
            </div>
 
               <div class="certi-logo">
               <div class="logo">
                   
               </div>
               </div>
               
               <div class="certi-title">
                   <p style="margin-right : 10px"><?php echo $certificate_title?></p>
               </div><!--certi-title-->
               <div class="organisation">
                   <p><?php echo $organisation_name?></p>
               </div>
               <div class="certi-body">
                   <p>This is to certify <span><?php echo $student_name;?>  </span> has secured <?php echo $rank; ?> rank of class <?php echo $class;?> for <br>his/her performance in <span>  <?php echo $field;?>  </span></p>
                   
               </div><!--certi-body-->
               
               <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-4">
                   <div class="certi-date"><p>Date: <?php echo $date;?></p></div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4">
               <div class="sign1">
                   <p><image class="sign" src="../../assets/images/certificate_inside_images/signature.png"></image></p><p><?php echo $signature_1;?></p>
               </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4">
               <div class="sign1">
                   <p><image class="sign"></image></p><p><?php echo $signature_2; ?></p>
               </div>
               </div>
                </div><!--row-->
               
               </div><!--certificate-body-->
           </div><!--col-md-12-->
        </div><!--row-->
       </div> <!--container-->
       </div><!--content-->
    </body>
    <script src="../../assets/js/bootstrap.min.js">
    
    </script>
</html>