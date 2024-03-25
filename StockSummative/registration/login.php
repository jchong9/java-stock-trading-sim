<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  05/31/2023
  Login page
  This page allows the user to login into the website and access their portfolio in the game.
-->
<html>
  <head>
    <title>ICS4U-Login</title>
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
    <form class="registerModal" action="loginCheck.php" method="post">
      <h2>Welcome back! Login here</h2>
      Username:<br>
      <input type="text" name="username" required><br>
      Password:<br>
      <input type="password" name="password" required><br><br>
      <input type="submit" value="SUBMIT"><br><br>
      <a href="register.php">Don't have an account?</a>
    </form>
  </body>
</html>