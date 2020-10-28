<!DOCTYPE html>
<html>
    <head>
        <title>MY FORM</title>
        <style>
            form{
                padding-top: 20px;
                text-align: center;
                font-size: 30px;
            }
            input{
                width: 250px;
                height: 40px;
                font-size: 14px;
            }
            h1 {
                padding-top: 100px;
                text-align: center;
                font-size: 30px;
                color :crimson ;
            }
        </style>
    </head>
    <body>
        <h1 font-size: 30px; >Sign Up</h1>
        <form method="POST" action= 'sign_up.php' >
            Username : <input type="text" , name="username"><br><br>
            Password : <input type="password" , name="password"><br><br>
            <input type="submit" value="Sign Up" >
        </form>
            <form method= "POST" action="open_login.php" >
            <input type="submit" value="Sign In" >
        </form>
    </body>
</html>