<?php
//echo "On addbook page.";
$isbn = $_POST["isbn"];
$name = $_POST["bookname"];
$author = $_POST["author"];
$pages = $_POST["pages"];
//echo $isbn.$name.$author.$pages;
$server = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($server,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed.".$conn->connect_error);
}

$sql = "INSERT INTO books (isbn,name,author,pages) VALUES ('$isbn','$name','$author',$pages)";

if($conn->query($sql)===TRUE){
    echo "Record inserted successfully.";
    
}else{
    echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();
?>
<a href="../add_book.php">Add a New Record</a>
<a href="logout.php">Logout</a>