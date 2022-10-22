<?php
session_start();
//if login is successfull, save the username  to $_SESSION['user'];
$_SESSION['user'] = ""; // save the login name to session to register across the links
$_SESSION['uid'] = ""; // this will store the accouint id of user to be able to access to other links with his id
?>

<nav class="navbar">
  <div class="container-fluid">
    <div class="row w-100">
      <div class="col-lg-7 col-sm-12 sm-rspv">
        <a href="index.php?main" class="tiqspace-logo">
          <img src="./images/tlogo.png" alt="" class="imglogo-tq">
          Tiqspace</a>
      </div>
      <div class="col-lg-5 text-end signup">
        <div class="btn-group">
          <button type="button" class="_clr px-3 py-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Resources
          </button>
          <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-sm-start  mt-2">
            <li><a class="dropdown-item" href="event-planning.php">Event Planning</a></li>
            <li><a class="dropdown-item" href="community-guidelines.php">Community Guidelines</a></li>
            <li><a class="dropdown-item" href="terms-of-services.php">Terms of Services</a></li>
            <li><a class="dropdown-item" href="privacy-policy.php">Privacy Policy</a></li>
            <li><a class="dropdown-item" href="frequently-asks-questions.php">FAQs</a></li>
          </ul>
        </div>
        <!-- Modal for Sign In -->
        <a href="login.php?" class="m-btn" id="btn_login">Log In</a>
        <a href="register.php?" id="btnCNA" class=" m-btn create_new_acct">Create New Account</a>

        <div class="btn-group m1-left" id="profile">

          <button id="p2" type="button" class="_clr dropdown-toggle m-btn create_new_acct" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user pr-3"></i> <?php echo $_SESSION['user']; ?>
          </button>
          <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-sm-start mt-2">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-heart pr-2"></i> Favorites</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-ticket pr-2"></i>Tickets</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gears pr-2"></i>Account Settings</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php?success"><i class="fa-solid fa-right-from-bracket pr-2"></i>Logout</a></li>
          </ul>
        </div>

      </div>
    </div>

  </div>
</nav>



<?php
//this part will hide the profile if not logged in.
// profile will show if logged in
if (!isset($_SESSION['user']) or $_SESSION['user'] == "") {
  echo '<script>';
  echo 'document.getElementById("btnCNA").style.display = "inline-block";';
  echo 'document.getElementById("p2").style.display ="none";';

  echo '</script>';
} else {
  echo '<script>';
  echo 'document.getElementById("p2").style.display ="inline-block";';
  echo 'document.getElementById("btnCNA").style.display = "none";';
  echo '</script>';
}
?>