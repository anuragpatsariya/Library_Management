<?php
    session_start();

?>
<html>
   <head>
        <title>Add Book</title>
   </head>
   <body>
        <?php 
        if(isset($_SESSION["username"])){
            echo "Welcome ".$_SESSION["username"];
            echo '<a href="php/logout.php" align="right">Logout</a>';
            echo ' <a href="allbooks.php">Show All Books</a>';
        echo '
        <form name="add_book" action = "php/addbook.php" method="post">
        <div align="center">
            <h3>Add a new book</h3>
            Book ISBN:<input type="text" id="isbn" name="isbn"><br/><br/>
            Book Name:<input type="text" id="bookname" name="bookname"><br/><br/>
            Author Name:<input type="text" id="author" name="author"><br/><br/>
            Pages:<input type="text" id="pages" name="pages"><br/><br/>
            <input type="submit" value="Add Book">
        </div>
        </form>';
        }else{
            echo 'Please <a href="index.php">Login first.</a>';
        }
        ?>
   </body>     
</html>