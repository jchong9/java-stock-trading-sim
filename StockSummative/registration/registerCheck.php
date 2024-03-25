<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  05/31/2023
  Register confirmation page
  This page checks if the user's registration is valid or not and displays an appropriate message for each case.
-->
<html>
  <head>
    <title>ICS4U-RegisterConfirmation</title>
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
      $firstName = $_POST["firstName"];
      $lastName = $_POST["lastName"];
      $username = $_POST["username"];
      $password = $_POST["password"];
      $found = false;

      //Reads json file and gets its contents
      $json = json_decode(file_get_contents($file), true);

      //A function that adds users into the json file
      function addUser() {
        global $file, $firstName, $lastName, $username, $password, $json;
        
        $username = trim($username);
        $password = encrypt(trim($password), 2);

        //Adds a new array that holds the new user's information
        $json['users'][] = array(
          'first'=>$firstName, 
          'last'=>$lastName,
          'username'=>$username,
          'password'=>$password
        );
        //Puts the new data back into the json file
        file_put_contents($file, json_encode($json));
      }

      //This function encrypts a string for improved data security based off a key
      function encrypt($string, $key) {
        $length = strLen($string);
        
        for ($k = 0; $k < $length; $k++) {
          $ascii = ord($string[$k]);
          $string[$k] = chr($ascii + $key);
        }

        return $string;
      }

      //If the username is too long, shorten it
      if (strlen($username) > 15) {
        $username = substr($username, 15);
      }
      //If the json file is empty
      if ($json == []) {
        echo "<div class='checkModal'>
                <h2>Welcome to the stock trading simulator, $firstName!</h2>
                <a href='../index.php'>Return to home</a>
              </div>";
        addUser();
        $_SESSION["loggedUser"] = $username;
      }
      else {
        //Iterate through each user
        for ($i = 0; $i < count($json['users']); $i++) {
          //Check if the user already exists
          if ($json['users'][$i]['username'] == $username) {
            $found = true;
          echo "<div class='checkModal'>
                  <h2>This user already exists!</h2>
                  <a href='login.php'>Login here</a>
                </div>";
            break;
          }
        }
        //If the user is not an already existing user, allow them to register
        if (!$found) {
          echo "<div class='checkModal'>
                  <h2>Welcome to the stock trading simulator, $firstName!</h2>
                  <a href='../index.php'>Return to home</a>
                </div>";
          addUser();
          $_SESSION["loggedUser"] = $username;
        }
      }
    ?>
  </body>
</html>