<?php

include("./config/app.php");
$auth->isLoggedIn();

include("./includes/header.php");
include("./includes/navbar.php");

?>

<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <?php include("./message.php"); ?>

        <div class="card">
          <div class="card-header">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form action="" method="POST">

              <div class="mb-3">
                <label for="">Email Id</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Password</label>
                <input type="text" name="pass" class="form-control">
              </div>

              <div class="mb-3">
                <button type="submit" name="login-btn" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>