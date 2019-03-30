


<html>
<head>
    <title>Admin Index</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
   <h3 class="text-center">Add Organization</h3>
    <form class="form-horizontal" action="organization_insert.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2">Organization Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Organization Name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Mobile No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Mobile no"  name="mobile_no">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Need</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Need" name="need">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Address" name="address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Login ID for issuer</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Login ID" name="login_issuer">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Issuer Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="email" placeholder="Enter Password" name="issuer_password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Login ID for Higher Authority</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter Login ID" name="login_higher_authority">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" name="name">Higher Authority Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="email" placeholder="Enter Password" name="higher_authority_password">
            </div>
        </div>
        
        
        
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="submit">Submit</button>
            </div>
        </div>
        
    </form>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>