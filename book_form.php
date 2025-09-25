<?php

$connection = mysqli_connect('localhost','your_db_username','your_db_password','your_db_name');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_Post['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    
    $request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    mysqli_query($connection, $request);

    header('location:book.php');
}else{
    echo 'something went wrong try again';
}

?>