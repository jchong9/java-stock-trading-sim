<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  05/31/2023
  Login confirmation page
  This page checks if the user exists in the registered users and allows them to log into the website. It displays an appropriate message for each case.
-->
<html>
  <head>
    <title>ICS4U-LoginConfirmation</title>
    <link href="https://fonts.cdnfonts.com/css/lato-black" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <!-- Navigation bar -->
    <nav> 
      <ul>
        <li><a href="../index.php">HOME</a></li>
        <li class="dropdown">
          <span>MILESTONES&#9662;</span>
          <div class='dropdown-content'>
            <a href="../milestones/milestone1.php"> MILESTONE 1</a>
            <a href="../milestones/milestone2.php">MILESTONE 2</a>
            <a href="../milestones/milestone3.php">MILESTONE 3</a>
          </div>
        </li>
        <li><a href="../help/index.php">HELP</a></li>
        <li><a href="../snippets/index.php">CODE SNIPPETS</a></li>
        <li><a href="../StockSimulator.jar" download="StockSimulator.jar">PLAY</a></li>
        <li><a href="../code.txt">CODE</a></li>
        <button id="btnRegister" onclick="window.location.href='register.php'">REGISTER</button>
        <button id="btnLogin" onclick="window.location.href='login.php'">LOGIN</button>
        <?php
          if (!isset($_SESSION["loggedUser"])) { 
            echo "<span id='logMsg'>Not logged in</span>"; 
          } 
          else {
            echo "<span id='logMsg'>Logged in as: " .$_SESSION['loggedUser']. "</span>";
          }  
        ?>
      </ul>
    </nav>
    <?php
      $file = "../data/users.json";
      $username = $_POST["username"];
      $password = $_POST["password"];
      $found = false;

      //Reads json file and gets its contents
      $json = json_decode(file_get_contents($file), true);

      //This function decrypts data so that the original text can be used by the program.
      function decrypt($string, $key) {
        $length = strLen($string);
        
        for ($k = 0; $k < $length; $k++) {
          $ascii = ord($string[$k]);
          $string[$k] = chr($ascii - $key);
        }

        return $string;
      }

      //If json is empty
      if ($json == []) {
        echo "<div class='checkModal'>
                <h2>No accounts have been made! Create an account</h2>
                <a href='register.php'>Register here</a>
              </div>";
      }
      else {
        //Check if user has an account
        for ($j = 0; $j < count($json['users']); $j++) {
          if (strcasecmp($json['users'][$j]['username'], trim($username)) == 0) {
            //Decrypts the encrypted password and checks if the user's input matches with it
            $realPassword = decrypt($json['users'][$j]['password'], 2);
            if (strcasecmp($realPassword, trim($password)) == 0) {
              echo "<div class='checkModal'>
                      <h2>Welcome back, ". $json['users'][$j]['first']. "!</h2>
                      <a href='../index.php'>Return to home</a>
                    </div>";
              $found = true;
              $_SESSION["loggedUser"] = $username;
              break;
            }
            else {
              echo "<div class='checkModal'>
                      <h2>Wrong password! Return to login and try again</h2>
                      <a href='login.php'>Login here</a>
                    </div>";
              $found = true;
              break;
            }
          }
        }
        //If the user is not found within the database, invalid inputs
        if (!$found) {
          echo "<div class='checkModal'>
                  <h2>Your account does not exist, try making one!</h2>
                  <a href='register.php'>Register here</a>
                </div>";
        }
      }
    ?>
  </body>
</html>