<?php

include("./config/app.php");
include("./codes/authentication_code.php");

include("./includes/header.php");
include("./includes/navbar.php");

?>

<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Register</h4>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="mb-3">
                <label for="">First Name</label>
                <input type="text" name="fname" class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Last Name</label>
                <input type="text" name="l name" class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Email Id</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Password</label>
                <input type="text" name="pass" class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Confirm Password</label>
                <input type="text" name="cpass" class="form-control">
              </div>
              <div class="mb-3">
                <button type="submit" name="register-btn" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>