<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  06/01/2023
  Help page
  This page shows the user how to navigate and use the stock trading simulator
-->
<html>
  <head>
    <title>ICS4U-Help</title>
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
      <h1>Help</h1>
      <h4>Gameplay video</h4>
      <video controls src="../stockSimDemo.mp4">
    </section>
    <section>
      <h1>Help</h1>
      <h4>Register page</h4>
      <p>
        The first step in to register your account in the register page located in the top right of this website. Here, you will be prompted to enter your first name, last name, username, and password. Make sure you remember your username and password as that is what you will be using to access your stock trading account.
      </p>
      <img src="../images/register.png" class="helpImg">
    </section>
    <section>
      <h4>Login page (on website)</h4>
      <p>
        The login page on the website serves as a tool to confirm your account is still valid. The login button is located right beside the register button. Once you enter your username and password, you will see the following screen and see who you are logged in as in the top right corner. 
      </p>
    </section>
    <section>
      <img src="../images/webLogin1.png" class="helpImg">
      <img src="../images/webLogin2.png" class="helpImg">
    </section>
    <section>
      <h4>Running the Application</h4>
      <p>
        To run the application. click the "PLAY" heading you see at the top of your screen. This will download a jar file to your device. Ensure that you have Java downloaded on your PC. Open this jar file and the Java application will appear.
      </p>
    </section>
    <section>
      <h4>Login page (on application)</h4>
      <p>
        This is the first page you will see when you open the trading application. As you may notice, there is no place for you to register. This is because the account you registered on the website is recognized by the program and will be the account you use to trade your stocks. This is why you must register on the website before opening the application. If there are errors with the login, an appropriate message will show, as you can see below:
      </p>
    </section>
    <section>
      <center><img src="../images/swingLogin1.png" height=450></center><br><br>
      <img src="../images/swingLogin2.png" height=450>
      <img src="../images/swingLogin3.png" height=450>
    </section>
    <section>
      <h4>Menu page</h4>
      <p>
        After you log in, you a menu screen will show. This is how you will navigate around the stock trading app. You have three options on this screen. You can either view your portfolio, trade your stocks, or logout of your account.<br><br>
        DISCLAIMER: DO NOT CLICK VIEW PROFILE MORE THAN ONCE IN A MINUTE.<br>We use an API to retrieve stock data in real time. Unfortunately, we do not have the funds to purchase a paid API, so we used a free one. With the free API comes limitations, and the major limitation is that we do not have many API calls available per minute. Opening the portfolio twice in the minute will not provide you will all the required information. If we were to publish this project, we would invest in an API that would be able to handle many API calls per minute.
      </p>
      <img src="../images/menu.png">
    </section>
    <section>
      <h4>Portfolio</h4>
      <p>
        When you open your portfolio, you will get information about your trading account. At the top, you will see your balance which is the amount of cash you have in your acconut. Every new account will have $10,000 to play with at the start. Below that shows the last time the stock prices were updated. below that shows your all time profit and percent. This is based on your total portfolio value and comparing it to the original $10,000. Below that is the portfolio value which contains the current money value of all the stocks in your portfolio.<br><br>Below that are a list of all the stocks you own. You will see the full name, ticker symbol, and type of the stock on the left side, an you will the the current price/share, number of shares you have, and the total value you have of the stock. If the stock is a single stock, you will also see the earnings per share value here.
        <br><br>
        Note: The portfolio updates in real time, so the stock value will only increase/decrease within the market hours (9:30AM - 4:00PM EDT)
      </p>
      <img src="../images/portfolio.png"><img src="../images/portfolio2.png">
    </section>
    <section>
      <h4>Trade</h4>
      <p>
        This is where you will be buying and selling stocks. You will be able to view your current balance at the top of the screen. Then you must select whether you want to buy or sell and enter the ticker symbol of the stock you want to buy/sell. Once you press "Select Stock", you will see the stock information of the left side. This is when you can you choose the quantity of the stock you would like to buy/sell. Once you press the "Buy" or "Sell" button, the action will go through and information on the screen will change (your balance and currently owned shares). There are input checkers throughout this page to make sure that a valid purchase is being made. An error will pop up if an incorrect input is submitted.<br><br>

        Note: ETFs have a 0.5% buy tax, you will see this message when you attempt to buy an ETF.
      </p>
      <img src="../images/trade1.png"><img src="../images/trade6.png">
      <h4>Buying a Stock</h4>
      <img src="../images/trade2.png"><img src="../images/trade3.png"><br>
      <h4>Selling a Stock</h4>
      <img src="../images/trade4.png"><img src="../images/trade5.png"><br>
    </section>
    <section>
      <h4>Common Single Stocks And Their Ticker Symbol</h4>
      <ul>
        <li>Apple Inc. - AAPL</li>
        <li>Alphabet Inc. - GOOG</li>
        <li>Meta Platforms, Inc. - META</li>
        <li>Tesla, Inc. - TSLA</li>
        <li>Advanced Micro Devices, Inc. - AMD</li>
        <li>Mastercard Incorporated - MA</li>
        <li>Amazon.com, Inc. - AMZN</li>
        <li>NVIDIA Corporation - NVDA</li>
      </ul>
      <h4>Common ETFs And Their Ticker Symbol</h4>
      <ul>
        <li>Invesco QQQ Trust Series 1 - QQQ</li>
        <li>Vanguard Mega Cap Growth - MGK</li>
        <li>SSgA Active Trust - SPDR S&P 500 ETF - SPY</li>
        <li>ProShares Ultra Bloomberg Natural Gas - BOIL</li>
        <li>Financial Select Sector SPDR Fund - XLF</li>
        <li>iShares Russell 2000 - IWM</li>
        <li>ProShares Short S&P500 - SH</li>
        <li>iShares iBoxx $ High Yield Corporate Bond - HYG</li>
      </ul>
    </section>
  </body>
</html>