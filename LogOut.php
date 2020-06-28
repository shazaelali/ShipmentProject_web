<?php
  session_start();
  //end off session
  session_unset();
  session_destroy();

   header('location:Login.html');
?>