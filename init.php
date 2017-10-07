<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "id3178302_keerthana");
	define("DB_PASS", "password");
	define("DB_NAME", "id3178302_fcm_db");

  // 1. Create a database connection
  $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
