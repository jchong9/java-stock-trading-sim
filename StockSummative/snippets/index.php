<?php
  session_start();
?>
<!--
  Jeremy Chong, Mika Vohl, and Krish Patel
  06/01/2023
  Milestone 3 homepage
  This page shows the user code snippets of how we implemented OOP into our program.
-->
<html>
  <head>
    <title>ICS4U-Snippets</title>
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
      <h1>OOP Implementations</h1>
      <h3>Encapsulation</h3>
      <p>
        Visibility modifiers are used in the User class to limit the scope of the instance variables to within the class. Certain instance variables, such as first name, are set as private. Since we do not want the user to directly access their name or balance, the visibility modifiers are set as private. Certain methods are set as public because we want to access those methods anywhere in the program. These methods may include access methods, and other methods like buying/selling stocks. 
      </p>
      <img src="../images/encapsulation.png">
    </section>
    <section>
      <h3>Inheritance</h3>
      <p>
        Inheritance is a mechanism in OOP where classes can inherit the properties and behaviours of other classes. The ETF class extends from the abstract Stock class to inherit its properties. Since ETFs are stocks, they inherit the private properties of the stock class, such as ticker. 
      </p>
      <img src="../images/inheritance.png">
    </section>
    <section>
      <h3>Polymorphism</h3>
      <p>
        Polymorphism is the ability of an object to take many forms. The stock variable is created as a reference variable to the Stock class. This allows this variable to hold data that are also descendants of Stock. The stock variable is then refers to a SingleStock or ETF depending on what type the stock is. This allows the stock variable to be more flexible and reusable throughout the program.
      </p>
      <img src="../images/overloading2.png">
    </section>
    <section>
      <h3>Abstract Classes</h3>
      <p>
        An abstract class is created for stocks. Since all stocks have a ticker, full name, and the number of shares, the abstract class organizes and groups related classes, such as single stocks, and ETFs. This class was also made abstract, since we do not need a stock object, but rather a specific type of stock.
      </p>
      <img src="../images/abstract.png">
    </section>
    <section>
      <h3>Interfaces</h3>
      <p>
        An interface is used for the Java Swing pages. The user variable is a constant since the current user remains the same unless they logout. The deletePage() method is used for each page to switch from page to page and each page overrides this method. 
      </p>
      <img src="../images/interface.png">
    </section>
    <section>
      <h3>Method Overriding</h3>
      <p>
        Method overriding is used to override the method from the Page interface. This method "deletes" the current page by making the Java Swing panel invisible and destroying the Java Swing frame.
      </p>
      <img src="../images/override.png">
    </section>
    <section>
      <h3>Method Overloading</h3>
      <p>
        Method overloading is used for the constructors of the SingleStock class. The second constructor is created with a different signature if the type of stock is unknown.
      </p>
    </section>
    <section>
      <img src="../images/overloading1.png">
    </section>
    <section>
      <h3>Static</h3>
      <p>
        Static refers to a member of a class that belongs to the class definition, and not the object. The background color variables are made into static constants since they do not need to be apart of an object and do not change. These variables can also be accessed anywhere from the code due to their public visibility modifier. 
      </p>
      <img src="../images/static.png">
    </section>
    <section>
      <h3>Constants</h3>
      <p>
        A constant is used for the fee percentage for the ETF stocks. This is made a constant since it does not change at all throughout the program.
      </p>
      <img src="../images/constant.png">
    </section>
    <section>
      <h3>Object Parameters</h3>
      <p>
        A new user object is created in the Login page using its constructor. The constructor initializes its instance variables, such as username and portfolio, so it can be used in other classes.
      </p>
    </section>
    <section>
      <img src="../images/objectParam1.png">
      <img src="../images/objectParam2.png">
    </section>
    <section>
      <h3>Immutability</h3>
      <p>
        Immutability refers to the concept of creating objects whose state cannot be modified once they are created. In Java, immutability is achieved by designing classes and objects in such a way that their internal state remains constant after initialization. Here, we created an instance of a String object that is immutable. By combining the final modifier with an immutable String object, the code ensures that the apiKey value cannot be changed once it is assigned. This immutability guarantees that the value of apiKey remains constant throughout the execution of the program.
      </p>
      <img src="../images/immutable.png">
    </section>
    <section>
      <h3>Access Methods</h3>
      <p>
        Access methods are methods that allow the programmer to access private or restricted data. In this case, the image displays the access methods of the User class. These methods allow other classes to get important data from the current user, such as their balance. This prevents others from directly changing this private information. 
      </p>
      <img src="../images/access.png">
    </section>
    <section>
      <h3>Instance Variables</h3>
      <p>
        Instance variables are variables that is specific to an object. In this case, the image displays the instance variables of the MainMenu class. These instance variables are necessary to create and style the pages of the main menu using Java Swing. A Portfolio and Trade object is created as well so that the main menu can access both pages. 
      </p>
      <img src="../images/instance.png">
    </section>
    <!-- Content for algorithm implementations -->
    <section>
      <h1>Algorithm Implementations</h1>
      <h3>Searching</h3>
      <p>
        Binary search is implemented into the program by checking if the ticker symbol of a stock exists within a portfolio. The portfolio is sorted by alphabetical order beforehand, and the search continously checks if the target is in the middle of the arraylist. If not, then the algorithm will split the search space in half until the element is found or is determined that it does not exist in the list.
      </p>
      <img src="../images/search.png">
    </section>
    <section>
      <h3>Sorting</h3>
      <p>
        Quick sort is implemented into the program by sorting the user's portfolio from least to greatest value of the owned stock. The algorithm partitions the array into 2 sub-arrays using a pivot, and then recursively sorts each sub-array.
      </p>
      <img src="../images/sorting.png">
    </section>
    <section>
      <h3>Encryption/Decryption</h3>
      <p>
        Encryption is used to encrypt passwords after the user registers in the website. If the user gets access to the registered users file, they would not know the users' actual password since it is encrypted. 
        <br><br>
        Decryption is used to decrypt passwords once the user logs into the stock trading simulator. This ensures that the entered password matches with the actual password that the user used to register.
      </p>
    </section>
    <section>
      <img src="../images/encrypt.png">
      <img src="../images/decrypt.png">
    </section>
    <section>
      <h3>Recursion</h3>
      <p>
        Recursion is used to calculate the total value of the user's portfolio. Similarly to a loop, the function starts at the beginning of the stock arraylist using an index parameter and adds the value to the portfolioValue parameter. The function is then recursively called, and this index is incremented every call. The base case is if the index reaches the arraylist size.
      </p>
      <img src="../images/recursion.png">
    </section>
  </body>
</html>