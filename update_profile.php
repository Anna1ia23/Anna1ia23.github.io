<?php
//This is embedded php that will update the database with the users information
//Connects to the database
include_once'Anna1ia23.github.io/connectionScript.php';

//Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  //Get user input
    $name = $_POST['userName'];
    $instagram = $_POST['userInstagram'];
    $linkedin = $_POST['userLinkedIn'];
    $canvas = $_POST['userCanvas'];


    try{
    //Insert user information into database
    $sql = "INSERT INTO [dbo].intern_profile (intern_name, instagram_username, linkedin_username, canvas_username) VALUES ('$name', '$instagram', '$linkedin', '$canvas')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $instagram, $linkedin, $canvas]);

    header('Location: ProfileEditSuccess.html');
    echo "Profile Successfully Updated!";

    //Redirects to success page
    exit;
    }
    //if there is an issue updating the DB, the catch block will execute an error statement
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
