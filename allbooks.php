<?php
    session_start();
?>
<html>
    <head>
        <title>All Books</title>
    </head>
    <body>
    <?php 
        if(isset($_SESSION["username"])){
            echo 'Welcome '.$_SESSION["username"];
            echo ' <a href="php/logout.php">Logout</a>';
            $server = "localhost";
            $uname = "root";
            $password = "";
            $dbname = "library";

            $conn = new mysqli($server,$uname,$password,$dbname);

            if($conn->connect_error){
                die("Connection Failed.".$conn->connect_error);
            }

            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                echo '<h3 align="center">All Books</h3>';
                while($row=$result->fetch_assoc()){
                    echo $row["name"]."<br/>";
                } 
            }
            $conn->close();
        }else{
            echo 'Please <a href="index.php">Login first.</a>';
        }
        
    ?>
    </body>
</html>