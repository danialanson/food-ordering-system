<?php

    $connection = mysqli_connect('db-instance.cb8mo4secept.us-east-1.rds.amazonaws.com','admin','Bf7PC!u7','order_db');

    if (isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $item = $_POST['food'];
        $quantity = $_POST['quantity'];
        $date = $_POST['date'];

        $request = "insert into order_form(name, email, phone, address, item, quantity, date) values
        ('$name','$email','$phone','$address','$item','$quantity','$date')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }

?>