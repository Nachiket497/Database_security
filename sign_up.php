<?php
    $username = filter_input(INPUT_POST , 'username');
    $password = filter_input(INPUT_POST , 'password') ;
   
    if(!empty($username)){
        if (!empty($password)){
            $host = "localhost" ;
            $dbusername = "root";
            $dbpassword = "Nachi@123";
            $dbname = "Testing";

            $connection = new mysqli ($host ,$dbusername,$dbpassword,$dbname);
            if(mysqli_connect_error()){
                die("Connection error ( " .mysqli_connect_error() ." ) " . mysqli_connect_error());
            }
            else {
                $sql = "INSERT INTO admin_panel  ( id , username , pass_word ) Values( 7 , '$username' ,'$password')";
                if ($connection->query($sql)){
                    echo "added to the database";
                }
                else {
                    echo "ERROR ".$sql.'<br>'.$connection->error ;
                }
                $connection->close();
            }
        }
        else {
            echo "Password should not be empty";
        die();
        }

    }
    else {
        echo "Username should not be empty";
        die();
    }

?>