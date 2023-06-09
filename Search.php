<!-- SEARCH PAGE! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search : FALC</title>
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
            <h2>Search</h2>
            <!-- ignore this error message i had to do some funky stuff but its working -->
            <p>Enter in search terms here, each new term separated by a comma<br>‎ </p>

            <form method="get" action="/searchResults.php"> 
            <input type="text" id="searchBarTXT" name ="q" class="search__input" autofocus placeholder="Enter Text...">

             <!--A.S. updated the button to send the text in the search bar to the php file called searchResults. This
                file will use the input to search the database and return users who have info that contains that keyword
                AT THIS POINT, PHP CAN ONLY HANDLE ONE WORD AT A TIME-->
            <button class="main__btn" type="submit">Search</button>
          </div>
        </div>
      </div>
    </div>
    <script src="/JS_Files/app.js"></script>
    <script src="/JS_Files/search.js"></script>
</body>
</html>
