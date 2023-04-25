<?php
    include_once'FALC/connectionScript.php';

    //input from user should be saved to a username and password variable. These are example variables in php
    //but I think you can use javascript to fill them.
    $username = $_POST['logInUsername']
    $password = $_POST['logInPassword']



    //this is the sql statement that will check if there is a record with both username and password
    $sql="SELECT * FROM user_login WHERE username='$givenUsername' AND password='$givenPassword';"

    //This executes the above statement and saves it into a 'result' variable:
    $result=$conn->query($sql);

    //this will check if there is a match:
    if($result->num_rows >0){
        echo "Access granted. ";
        //THIS IS WHERE THEY SHOULD BE ALLOWED ACCESS TO THEIR ACCOUNT/SEARCH PAGE
    }
    else{
         echo "Invalid username or password. Please try again. If new user, please sign up.";
         header('Location: /SignUpLogIn.php');
         exit;
     }



?>