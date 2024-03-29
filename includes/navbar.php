<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <script src="../assets/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="btn nav-link" href="<?= base_url('index.php') ?>">Home</a>
        </li>
        <?php if (isset($_SESSION['authenticated'])) { ?>
          <li class="nav-item active">
            <a class="nav-link" href="#"></a>
          </li>
          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_fname'] . " " . $_SESSION['auth_user']['user_lname']; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?= base_url('my-profile.php') ?>">My Profile</a>
              <li>
                <form action="" method="post">
                  <button type="submit" name="logout-btn" class="dropdown-item">Logout</button>
                </form>
              </li>
            </div>
          </div>
        <?php } else { ?>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('login.php') ?>">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('register.php') ?>">Register</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</body>

</html>