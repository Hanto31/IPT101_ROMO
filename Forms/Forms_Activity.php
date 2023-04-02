<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo '<h1>Welcome ' . $_POST["fname"] . $_POST["lname"] . '</h1>' . PHP_EOL;
    echo '<h1>Your Email Address is ' . $_POST["email"] . '</h1>' . PHP_EOL;
    echo '<h1>Your Password has ' . strlen($_POST["pswrd"]) . ' Characters</h1>' . PHP_EOL;

    if($_POST["pswrd"] == $_POST["cpswrd"])
    {
      echo 'Your password is equal!' . PHP_EOL;
    }
    else
    {
      echo 'Not Equal!' . PHP_EOL;
    }

    echo 'It is a POST DATA.';

  }
  else
  {
     echo 'It is not a POST DATA.';
  }
?>