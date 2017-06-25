<?php
    session_start();
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    $server = "localhost";
    $uname = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($server,$uname,$password,$dbname);

    if($conn->connect_error){
        die("Connection Failed.".$conn->connect_error);
    }

    $sql = "SELECT * FROM users where username = '$username'";
    $result = $conn->query($sql);
    
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            //echo $row["username"]."  ".$row["password"];//$row["email"].$row["code"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["email"] = $row["email"];
            
            if($username==$row["username"] && $pwd==$row["password"]){
                $_SESSION["username"] = $row["username"];
                $_SESSION["email"] = $row["email"]; 
                header('Location: ../add_book.php');
            }else{
                echo "Invalid username or password.";
                echo '<script language="javascript">';
                echo 'alert("No user found.")';
                echo '</script>';
                //sleep(2);
                header('Location: ../');
            }
        }
    }else{
        echo "Invalid username or password.";
        echo '<script language="javascript">';
        echo 'alert("No user found.")';
        echo '</script>';
        //sleep(2);
        header('Location: ../');
    }
    $conn->close();
?>