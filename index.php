<?php

require_once 'config/config.php';
$message = false;
if(isset($_POST['submit'])){

        
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    
  
    $insert = "INSERT INTO `data`(`first_name`, `last_name`, `username`, `email`, `address`, `country`, `state`, `zip`)
     VALUES ('$first_name','$last_name','$username','$email','$address','$country','$state','$zip')";
    mysqli_query($conn,$insert); 
    
    $message = true;
}
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="addressbook.php">AddressBook</a></li>

  <li style="float:right"><a href="#about">About</a></li>
</ul>

    <div class="content">

<?php if($message){ ?>
            <div class="alert alert-success">
                <a class="close" data-dismiss="alert" href="#">×</a>Record Inserted Successfully!
            </div>
            
            <?php } ?>
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?php  $_SERVER['PHP_SELF']; ?>">
              <div class="box-body">

                <div class="form-group">
                  <label for="name">First name</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Name..." required>
                </div>

                <div class="form-group">
                  <label for="name">Last name</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Email..." required>
                </div>

                <div class="form-group">
                  <label for="name">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Email..." required>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email..." required>
                </div>

                <div class="form-group">
                  <label for="name">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Email..." required>
                </div>

                <div class="form-group">
                  <label for="name">Country</label>
                  <input type="text" class="form-control" id="country" name="country" placeholder="Enter Email..." required>
                </div>

                <div class="form-group">
                  <label for="name">State</label>
                  <input type="text" class="form-control" id="state" name="state" placeholder="Enter Email..." required>
                </div>

                <div class="form-group">
                  <label for="name">Zip</label>
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter Email..." required>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button  type="submit" class="button" name="submit">Add Admin</button>

           
              </div>
          </div>
            </form>


</body>
</html>