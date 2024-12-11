<?php
include("partials/connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form </title>

    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <!-- font-awesome link -->
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- style sheet -->
      <link rel="stylesheet" href="style/styles.css">

</head>
<body>
<div class="container d-flex align-items-center justify-content-center">
    <div class="card signin_card">
        <!-- start card header -->
        <div class="card-header">
            <h3 class="text-center">
                Sign In
            </h3>
        </div>
 <!-- end card header -->
 <!-- start card body  -->
<div class="card-body">
<form action= ""> 
<!-- 1st field -->
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>
  </span>
  <input type="text" class="form-control" placeholder="Enter your Username" aria-label="Username" aria-describedby="basic-addon1" name="username" required autocomplete="off">
</div>

 <!-- 2nd  field -->
 <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i>
  </span>
  <input type="password" class="form-control" placeholder="Enter your password" aria-label="password" aria-describedby="basic-addon1" name="password" required autocomplete="off">
</div>

  
   <!-- sign-in button -->
   <div class="form-group">
    <input type="submit" value="Signin" name="signin" class="btn signup_btn">
   </div>





</form>
</div>
 <!-- end card body  -->


        <!-- start card footer -->
         <div class=" card-footer  text-center text-light">
Don't have an account ? <a href="index.php" > Sign Up</a> 

         </div>
                 <!-- end  card footer -->
    </div>
</div>

</body>
</html>