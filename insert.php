<?php
    $username="root";
    $password="Holiday1111";
    $database="nuvita_customer_rewards";

    
    $first=$_POST['first'];
    $last=$_POST['last'];
    $phone=$_POST['phone'];
    $bday=$_POST['bday'];
    
    mysql_connect(localhost,$username,$password);
    @mysql_select_db($database) or die( "Unable to select database");
    
    $query = "INSERT INTO nuvita_customer_rewards (first, last, phone_number, birthday) VALUES ('$first','$last','$phone','$bday')";
    
    mysql_query($query);
    
    mysql_close();
?>

