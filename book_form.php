<?php
// making connecton to local host 
$connection = mysqli_connect('localhost', 'root', '', 'book_car');
// select from input send button
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $package = $_POST['package'];
// going into book form table
    $request = "insert into book_form(name, email, phone, date, package) values ('$name', '$email', '$phone', '$date', '$package')";

    mysqli_query($connection, $request);
    header('location:book.php');
} else{
    echo 'Oops, something went wrong. Please try again later';
}
?>