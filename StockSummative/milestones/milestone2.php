<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  06/012023
  Milestone 2 homepage
  This page shows the user UML of all the classes planned out so far in this stage. This will provide them will a good sense of how OOP will be used within the program, such as abstract classes, and interfaces.
-->
<html>
  <head>
    <title>ICS4U-Milestone2</title>
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
      <h1>Object Analysis and Overview</h1>
      <img id="uml" src="../images/uml.png">
    </section>
    <section>
      <h1>UML Specifications</h1>
    </section>
    <section>
      <h3>Note:</h3>
      <p>
        Bolded text with the @ symbol next to it in the UML are special notes about the method (i.e whether the method is overridden, overloaded, etc).
      </p>
    </section>
    <section>
      <h3>Taxable Interface</h3>
      <p>
        The Taxable interface was created since not all stocks are taxed. Since we want to separate taxable and not taxable stocks, the interface provides easier readability and more abstraction to our program, as more stock classes may be added in the future.
      </p>
    </section>
    <section>
      <h3>User Class</h3>
      <p>
        Since the user is not a stock or a marketable item in the stock market, it is outside of the market hierarchy of the UML. The user class will provide the user with all the capabilities necessary for them to navigate and interact with the stock trading simulator.
      </p>
    </section>
  </body>
</html>