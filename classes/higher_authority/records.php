<?php
 require_once("../../functions/db.php");
$generation_id=$_GET['generation_id'];
//$generation_id=2;
//echo $generation_id;
function display_students(){
    global $connection;
     $generation_id = $_GET['generation_id'];
     $query="Select * from generation where generation_id = $generation_id";
     $result = mysqli_query($connection , $query);
     $row = mysqli_fetch_array($result);
     $commitee_name = $row['commitee_name'];
//     $organisation_id = $row['organisation_id'];
    // $query1="Select * from organisation where organisation_id = $organisation_id";
    // $result1 = mysqli_query($connection, $query1);
    // $row1 =mysqli_fetch_array($result1);
    // $organisation_name = $row1['organisation_name'];
    // $organisation_name = strtolower($organisation_name);
//    $commitee_name = 'csi';
//    $organisation_name = 'rait';
     $query2 = "select * from $commitee_name";
    //echo $query2
    $result2 = mysqli_query($connection , $query2);
    while($row2 = mysqli_fetch_assoc($result2)){
        $student_name = $row2['student_name'];
        $class = $row2['class'];
        $rank = $row2['rank'];
        $field= $row2['field']; 

        echo"<tr>";
        echo"<td>{$student_name}</td>";
        echo"<td>{$class}</td>";
        echo"<td>{$rank}</td>";
        echo"<td>{$field}</td>";
        echo"</tr>";
    }
}

 
?>





<html>

<head>
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <style>
        body{
	font-family: "Nunito Sans", sans-serif;
	
/*	background:#f8f8f8;*/
}
	.nav-item .logout:hover{
		background: #fff;
		border: 1px solid #b0413e;
		color: #b0413e;
	}

</style>
</head>

<body>

    <nav class="navbar-light bg-light" style="padding:20px;font-size:16px;">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="requests.php" style="color:#B0413E ">Home</a>
            </li>
            <li class="nav-item">
                <a class="logout btn" href="#" style="color:#fff;background-color:#b0413e; ">Logout</a>
            </li>


        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <?php
            
            ?>
            
            <div class="col-md-5" style="overflow: scroll; height:89%;">
                <table class="table table-striped table-hover">
                    <thead style="color:#b0413e;">
                        <tr>
                            <th>Student Name</th>
                            <th>Class</th>
                            <th>Rank</th>
                            <th>Field</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        display_students();
        ?>
                    </tbody>
                </table>

            </div>
            <!--col-md-5-->
            <div class="col-md-7" style="background-color: #b0413e; padding: 20px;">
                <div>
                    <img src="../../assets/images/preview1.png" alt="" style="height: 500px; width: 650px; padding: 30px; margin: 30px; margin-left: 100px;">
                </div>
                <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default" style="width: 100px; background-color: white; color: #b0413e; font-size: 20px;  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" data-toggle='modal' data-target='#verifyModal'> Verify <i class="fa fa-check"></i></button>
                    </div>
                </div>
            </div>

        </div>
        <!--row-->
    </div>
    <!--container_fluid-->
    <!--Verify Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="verifyModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <h4 class="modal-title">Verify All Certificates</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <form action="qr_generation.php" method="POST" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="form-group clearfix">

                                    <div class="col-md-9">
                                       <label for="">Upload your Signature <span style="color: red;">Please Upload a Transperent png. Tool: <a href="https://onlinepngtools.com/create-transparent-png">onlinepngtool</a></span></label>
                                        <input type="file" id="edit_category_id" name="higher_authority_signature"> 
                                    </div>
                                    
                                    <div class="col-md-9">
                                        <input type="hidden" id="edit_category_id" name="generation_id" value="<?php echo $generation_id; ?>" > 
                                    </div>
                                    
                                </div>
                                
                                <div class="modal-footer">
                                    <button id="" type="submit" class="btn btn-default" name="verify" style="background-color: #b0413e; color: white;" >Verify <i class="fa fa-check"></i></button>
                                </div>

                            </div>
                        </form>
                    </div>


                </div>

            </div>

            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/vendor/@fortawesome/fontawesome-free/js/fontawesome.min.js"></script>
</body>

</html>
