<!-- SIGN UP/LOG IN PAGE! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In : FALC</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="/" id="navbar__logo">FALC</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="/index.html" class="navbar__links">
                        Home
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Login Section -->
    <div class="login">
    <div class="login__container">
    <form class="form form--hidden" class="form" id="login">
        <h1 class="form__title">Login</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input--group">
            <input type="text" id="userLogInEmail" name="logInUsername" class="form__input" autofocus placeholder="Email Address">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input--group">
            <input type="password" id="userLogInPass" name="logInPassword" class="form__input" autofocus placeholder="Password">
            <div class="form__input-error-message"></div>
        </div>

        <input type="checkbox" id="logInCheckbox" name="logInCheckbox" value="Business" class="form__input">
        <label for="logInCheckbox"> Are you a business?</label><br>

        <button class="form__button" type="submit" onclick="auth()" >Continue</button>
        <p class="form__text">
            <a class="form__link" id="linkCreateAccount" >Don't have an account? Sign up!</a>
        </p>
        <script>
               function auth() {
                var email = document.getElementById("userLogInEmail").value;
                var password = document.getElementById("userLogInPass").value;

                //need to check the database...dont know how but will try to find it out
                if (email == "companyexample" && password == "password123!") {
                    window.location.assign("Search.html");
                    alert("Login successful ");
                }
                else {
                    alert("Invalid Information ");
                    return;
                }
            }
        </script>
    </form>
    <!-- Sign Up Section -->
    <form id="createAccount" action="SignUpBackEnd.php" method="post">
        <h1 class="form__title">Sign Up</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input--group">
            <input type="text" id="userSignUpEmail" name="userEmail" class="form__input" autofocus placeholder="Email Address">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input--group">
            <input type="password" id="userSignUpPass" name="userPassword" class="form__input" autofocus placeholder="Password">
            <div class="form__input-error-message"></div>
        </div>

        <input type="checkbox" id="signUpCheckbox" name="signUpCheckbox" value="Business" class="form__input">
        <label for="signUpCheckbox"> Are you a business?</label><br>

        <button class="form__button" type="submit" onclick="input()">Continue</button>
        <p class="form__text">
            <a class="form__link" id="linkLogin">Already have an account? Log In!</a>
        </p>
        <script>
           /* function input() {
                var email = document.getElementById("userLogInEmail").value;
                var password = document.getElementById("userLogInPass").value;
                //var checkbox = document.getElementById("signUpCheckBox").value; ??

                //send the variables to the DB

                //check if they have an account in the DB
                //if so, alert and clear the textboxes
                //if not, save the info in the DB, alert them to the success, then send them to one of the pages
                window.location.assign("SignUpLogIn.php");
                alert("Signup Successful ");

            }*/
        </script>
    </form>
    </div>
    </div>
    <script src="/JS_Files/login.js"></script>
    <script src="/JS_Files/app.js"></script>
</body>
</html>