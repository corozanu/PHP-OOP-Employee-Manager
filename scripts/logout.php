<?php
  unset($_SESSION["fillMe"])
  unset($_SESSION["fillMe2"]
  unset($_SESSION["fillMe3"])
  // Fill the above with your session variables set in login, we want to invalidate the session at this point
  header("Location: https://target.location");
  exit();
?>
