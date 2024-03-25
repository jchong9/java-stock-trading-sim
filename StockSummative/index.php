<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  05/31/2023
  Summative homepage
  This page allows the user to navigate through the entire summative website, providing them with information on various milestones we hit in the assignment, and how to use the program.
-->
<html>
  <head>
    <title>ICS4U-Summative</title>
    <link href="https://fonts.cdnfonts.com/css/lato-black" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Navigation bar -->
    <nav> 
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li class="dropdown">
          <span>MILESTONES&#9662;</span>
          <div class='dropdown-content'>
            <a href="milestones/milestone1.php"> MILESTONE 1</a>
            <a href="milestones/milestone2.php">MILESTONE 2</a>
            <a href="milestones/milestone3.php">MILESTONE 3</a>
          </div>
        </li>
        <li><a href="help/index.php">HELP</a></li>
        <li><a href="snippets/index.php">CODE SNIPPETS</a></li>
        <li><a href="StockSimulator.jar" download="StockSimulator.jar">PLAY</a></li>
        <li><a href="../code.txt">CODE</a></li>
        <button id="btnRegister" onclick="window.location.href='registration/register.php'">REGISTER</button>
        <button id="btnLogin" onclick="window.location.href='registration/login.php'">LOGIN</button>
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
    <div id="homeBanner">
      <h1>Stock Trading Simulator<br>
        <span>A realistic experience for all.</span>
      </h1>
    </div>
  </body>
</html>