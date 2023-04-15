//here are pieces of php that can be inserted into the javascript files where needed. Remember to include 
<?php
    include_once'FALC/connectionScript.php';
?>
at the top of the javaScript file.



//to insert a new username and password into the user_login table for sign up:
//hash in javascript?
<?php
$sql='INSERT INTO [dbo].[user_login] (username, password)
VALUES ('/*username variable*/', '/*password variable*/');';
?>



//USERNAME SHOULD BE SAVED IN A VARIABLE AND USED WHEN INSERTING A NEW INTERN PROFILE RECORD INTO THE DATABASE
//TO INSERT INTO THE INTERN PROFILE TABLE:
<?php

$username; //use this from sign up above
$internName;
$instagram_username;
$linkedin_username;
$canvas_username;

$sql='INSERT INTO [dbo].[intern_profile](intern_username, intern_name, instagram_username, linkedin_username, canvas_username)
VALUES('$username','$internName','$instagram_username','$linkedin_username','$canvas_username');';

?>



//TO INSERT INTO THE BUSINESS PROFILE TABLE:
<?php

$username;//also used from sign in
$companyName;

$sql='INSERT INTO [dbo].[business_profile](business_username, company_name) VALUES('$username','$companyName');';

?>



//to check if user has existing username and password in database:
<?php
//input from user should be saved to a username and password variable. These are example variables in php
//but I think you can use javascript to fill them.
$givenUsername;
$givenPassword;

//this is the sql statement that will check if there is a record with both username and password
$sql="SELECT * FROM user_login WHERE username='$givenUsername' AND password='$givenPassword';"

//This executes the above statement and saves it into a 'result' variable:
$result=$conn->query($sql);

//this will check if there is a match:
if($result->num_rows >0){
    echo "Access granted. ";
    //THIS IS WHERE THEY SHOULD BE ALLOWED ACCESS TO THEIR ACCOUNT/SEARCH PAGE
}else{
     echo "Invalid username or password. Please try again. If new user, please sign up.";
     //OR ANYTHING WE WANT DONE HERE
 }
?>




//MODIFYING INTERN SOCIAL MEDIA USERNAMES
//javascript will need to be used to determine which social username is to be updated. Use if else statements to loop through each social?

//If the instagram username is being updated:
<?php

$selectedUsername;
$newUsername;

$sql='UPDATE [[dbo].[instagram_account]
SET instagram_username = '$newUsername'
WHERE instagram_username = '$selectedUsername';';

echo "username updated.";

?>



//If the LinkedIn username is being updated:
<?php

$selectedUsername;
$newUsername;

$sql='UPDATE [[dbo].[Linkedin_Account]
SET linkedin_username = '$newUsername'
WHERE linkedin_username = '$selectedUsername';';

echo "username updated.";

?>



//If the Canvas username is being updated:
<?php

$selectedUsername;
$newUsername;

$sql='UPDATE [[dbo].[canvas_account]
SET canvas_username = '$newUsername'
WHERE canvas_username = '$selectedUsername';';

echo "username updated.";

?>