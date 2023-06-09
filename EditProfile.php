<!-- INTERN EDIT PROFILE PAGE! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Website : FALC</title>
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
    <!-- Hero Section -->
    <div class="main">
        <div class="main__container">
          <div class="main__content">
            <h1>User Profile</h1>
            <p>Enter in your information so our system can have more accurate results.</p>
            <div class="form__message form__message--error"></div>
              <!--Will send the stuff in each input to the php file--!>
             <form action="update_profile.php" method="POST">
            <div class="form__input--group">
                <input type="text" id="userName" name="userName" class="form__input" autofocus placeholder="Name">
                <div class="form__input-error-message"></div>
            </div>
        <div class="form__input--group">
            <input type="text" id="userInstagram" name="userInstagram" class="form__input" autofocus placeholder="Instagram Username">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input--group">
            <input type="text" id="userLinkedIn" name="userLinkedIn" class="form__input" autofocus placeholder="LinkedIn Username">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input--group">
            <input type="text" id="userCanvas" name="userCanvas" class="form__input" autofocus placeholder="Canvas Username">
            <div class="form__input-error-message"></div>
        </div>
            <!--Removed href tag because PHP file will send the user to the next screen. See update_profile.php to modify next screen location-->
                <button class="main__btn" type="submit">Update</button>
              </form>
          </div>
          <div class="main__img--container">
            <img id="main__img" src="images/error_Image.svg" />
          </div>
        </div>
      </div>
    <script src="/JS_Files/app.js"></script>
</body>
</html>
