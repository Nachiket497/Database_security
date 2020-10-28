<?php
    $username_1 = filter_input(INPUT_POST , 'username');
    $password_1 = filter_input(INPUT_POST , 'password') ;
   
    if(!empty($username_1)){
        if (!empty($password_1)){
            $host = "localhost" ;
            $dbusername = "root";
            $dbpassword = "Nachi@123";
            $dbname = "Testing";

            $connection = new mysqli ($host ,$dbusername,$dbpassword,$dbname);
            $username = mysqli_real_escape_string($connection , $username_1) ;
            $password = mysqli_real_escape_string($connection , $password_1) ;
            if(mysqli_connect_error()){
                die("Connection error ( " .mysqli_connect_error() ." ) " . mysqli_connect_error());
            }
            else {
                $sql = "select pass_word from admin_panel where username = ?;"  ;
                $stmt = mysqli_stmt_init($connection);
                if ( !mysqli_stmt_prepare($stmt,$sql)){
                    echo " SQL statement Failed ";
                }else {
                    mysqli_stmt_bind_param($stmt , "s" , $username);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt)->fetch_object() ;
                
              //  $result =   $connection->query($sql)->fetch_object() ;
                    if ($result != null ){
                        $psd = $result->pass_word ; 
                        if ($psd == $password ){
                            echo  "logine successfully" ;
                        } 
                        else {
                            echo 'Incorrect password' ;
                        }
                    }else {
                        echo "incorrect username" ;
                    }
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