<?php
    include_once'FALC/connectionScript.php';
    
    $username = $_POST['userEmail']
    $password = $_POST['userPassword']


    //input from user should be saved to a username and password variable. These are example variables in php
    //but I think you can use javascript to fill them.

    //this is the sql statement that will check if there is a record with both username and password
    $sql="SELECT * FROM user_login WHERE username='$username' AND password='$password';"

    //This executes the above statement and saves it into a 'result' variable:
    $result=$conn->query($sql);

    //this will check if there is a match:
    if($result->num_rows >0){
        echo "This email is already in use, please retry your sign-up.login if you have an account already. ";
        header('Location: /SignUpLogIn.html');
        exit;

    }
    else{
        $sql='INSERT INTO [dbo].[user_login] (username, password)
        VALUES ('$username', '$password');';

        echo "Sign-up Complete, please log in.";
        header('Location: /SignUpLogIn');
        exit;   
    }

   

?>
