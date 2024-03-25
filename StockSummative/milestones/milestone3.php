<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  06/01/2023
  Milestone 3 homepage
  This page shows the user 
-->
<html>
  <head>
    <title>ICS4U-Milestone3</title>
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
            <a href="milestone1.php"> MILESTONE 1</a>
            <a href="milestone2.php">MILESTONE 2</a>
            <a href="milestone3.php">MILESTONE 3</a>
          </div>
        </li>
        <li><a href="../help/index.php">HELP</a></li>
        <li><a href="../snippets/index.php">CODE SNIPPETS</a></li>
        <li><a href="../StockSimulator.jar" download="StockSimulator.jar">PLAY</a></li>
        <li><a href="../code.txt">CODE</a></li>
        <button id="btnRegister" onclick="window.location.href='../registration/register.php'">REGISTER</button>
        <button id="btnLogin" onclick="window.location.href='../registration/login.php'">LOGIN</button>
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
    <div class="divider"></div>
    <!-- Content -->
    <section>
      <h2>PHP Implementations</h2>
      <h4>How PHP was implemented in this project:</h4>
      <p>
        Forms were used to help the user log in and register into the website with a username and password that they have created. The password is then encrypted using the Caesar cipher algorithm on the backend of PHP and is stored in a JSON file along with other information, such as the user's first name and username. In the backend of the login page, the password is decrypted to check if the user's input matches with the database. This is done by converting the JSON file into an associative array using the json_decode() method and accessing the encrypted password as an element, which is then decrypted to check if it matches with the user's input to ensure proper logins. Below displays the form for the login and registration pages, and the PHP code that checks if the input is valid. Once the input is checked, it is then put into the JSON file.
      </p>
    </section>
    <section>
      <img src="../images/form1.png">
      <img src="../images/form2.png">
    </section>
    <section>
      <img src="../images/php1.png">
      <img src="../images/php2.png">
    </section>
    <section>
      <p>
        Session variables were also used to keep the user logged in. From the images above, after a valid input is confirmed, the current user will be stored in a variable with PHP (using the $_SESSION associative array). This variable is then used to display a message to the user to show that they are currently logged in.
      </p>
      <img src="../images/php3.png">
    </section>
    <section>
      <h4>File input & output in PHP</h4>
      <p>
        File input was used to read from the JSON file that holds all of the registered users. This data is then used to check if the user exists and logs them into the website.
      </p>
      <img src="../images/input.png">
      <p>
        File output was used to add a new user to the JSON file after they have registered. 
      </p>
      <img src="../images/output.png">
    </section>
    <section>
      <h4>2D arrays in PHP</h4>
      <p>
        The users data is held in a 2D associative array. The users array holds an array of their data. This 2D array is used to parse the JSON file and add to its contents.
      </p>
      <img src="../images/2darrays.png">
    </section>
    <section>
      <h2>What Was Left Out</h2>
      <h4>Ideas that were not implemented in the final product:</h4>
      <p>
        Originally, SpringBoot was going to be used as the framework for the simulator. However, it was not implemented due to the limited environment provided by Replit and networking limitations. As a result, Java Swing was used instead to create the program in order to provide the user with a similar graphical interface. Additionally, due to time constraints, the company news feature was not implemented. This feature would allow the user to see positive/negative news about companies, which would provide insight into whether the user should buy/sell/keep.
      </p>
    </section>
  </body>
</html>