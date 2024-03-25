<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  05/31/2023
  Milestone 1 homepage
  This page shows the user the objective of the program and the planning stages of this summative assignment.
-->
<html>
  <head>
    <title>ICS4U-Milestone1</title>
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
      <h2>Objective of the Program</h2>
      <p>
        The overall objective of this project is to create a stock trading simulator. This project will provide users with a platform to practice trading stocks without the risk of losing money in real life. This simulator will imitate real stock market conditions and allow users to learn more about stocks. It can also further improve their stock trading skills by practicing with and analyzing the simulated data. Through the use of Java, PHP, and HTML, those interested in stock trading will be given a realistic and practical learning experience, which can help them develop various skills, test strategies, and gain confidence before participating in real-world trading.
      </p>
    </section>
    <section>
      <h2>Inputs & Outputs</h2>
      <h3>Inputs</h3>
      <ul>
        <li>Giving the user an option to login/register into the program.</li>
        <li>Checking whether the user wants to buy/sell a stock.</li>
        <li>Providing the user with an option to place orders.</li>
        <li>Allowing the user ot check the price of stocks.</li>
      </ul>
      <h3>Outputs</h3>
      <ul>
        <li>Displaying a well-designed GUI for the user to navigate around the program and to login/register.</li>
        <li>Allowing the user to track their current holdings and monitor their stock performance.</li>
        <li>Displaying the user with a portfolio, along with company news to provide the user information to buy/sell.</li>
        <li>Displaying if the stock is up/down for the day.</li>
        <li>Displaying a leaderboard of all the user's estimated stock values.</li>
      </ul>
    </section>
    <section>
      <h2>Assumptions/Special Considerations</h2>
      <ul>
        <li>There are restrictions on the number of trades that can be made within a day and the number of shares that can be traded.</li>
        <li>Users can only trade during specific times within the program.</li>
        <li>After the user loses all their money, they will still be able to sell and buy stocks.</li>
        <li>The user will never become bankrupt, unless all the companies they have invested in file for bankruptcy.</li>
        <li>The user will start off with $10,000.</li>
      </ul>
    </section>
    <section>
      <h2>Group Contributions</h2>
      <h3>Mika</h3>
      <ul>
        <li><b>Lead programmer</b></li>
        <li>Mika will be responsible for applying SpringBoot to the program, which is an open-source tool that utilizes Java-based frameworks to create web applications and microservices.</li>
        <li>He will also be debugging/fixing any issues that may arise when incorporating the tool.</li>
      </ul>
      <h3>Krish</h3>
      <ul>
        <li><b>Project manager</b></li>
        <li>Krish will be responsible for integrating the stock API for the program and helping with the SpringBoot code.</li>
        <li>He will also design the preliminary plans for the program and help incorporate OOP concepts for the simulator.</li>
      </ul>
      <h3>Jeremy</h3>
      <ul>
        <li><b>Software designer</b></li>
        <li>Jeremy will be responsible for designing the GUI of the simulator, along with the website, and creating the PHP side of the program.</li>
        <li>He will also help debug/fix any issues related to the main program.</li>
      </ul>
    </section>
    <section>
      <h2>How We Will Use PHP</h2>
      <p>
        PHP will be used to register the user into the program and allow them to login. This will allow the program to keep track of users and their current holdings, which can allow them to continue where they left off from previous simulations.
      </p>
    </section>
   <section>
      <h2>How We Will Use Sort & Search</h2>
      <h3>Sorting</h3>
      <p>
        The user's stocks will be sorted from the lowest money invested within the stock to the greatest (their greatest investment will be displayed at the top of their screen). The leaderboard of all the user's estimated stock values will also be sorted from lowest to greatest.
      </p>
      <h3>Searching</h3>
      <p>
        The user will be able to search for specific stocks through the use of a searching algorithm. Also, the user's information can be found with a search algorithm after logging in.
      </p>
    </section>
   <section>
      <h2>How We Will Use Encryption</h2>
      <p>
        The user's data, such as the password for their account, will be encrypted into a file. This data will then be decrypted to ensure that the user has logged in with the correct credentials.
      </p>
    </section>
   <section>
      <h2>How We Will Use Recursion</h2>
      <p>
        Recursion will be implemented when buying a certain number of stocks. The recursive function will update the user's portfolio while buying til it reaches how many the user wants to get. The base case can be the number of shares that the user wants to buy, and in the body of the function, it will update their portfolio through various calculations. 
        <br><br>
        A recursive search method may also be implemented to search for a stock that a user would like to view.
      </p>
    </section>
  </body>
</html>