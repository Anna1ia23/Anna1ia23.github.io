<!-- SEARCH RESULTS PAGE! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results : FALC</title>
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
    <div class="results">
        <div class="candidate__container">
        <form class="candidate__form" id="login">
            <h1 class="form__title">Search Results</h1>
            <!-- This is the part that will display if an error has occured (e.g. no users found) -->
            <div class="form__message form__message--error"></div>
            <!-- This is the part that holds candidate information -->
                    <!--PHP code below! Katie- can this be cleaned up to fit with the rest of the site?-->
                <?php
                    session_start();
                    if (isset($_SESSION['search_results']) && count($_SESSION['search_results']) > 0) {
                        foreach ($_SESSION['search_results'] as $result) { ?>
                            <div class="candidate">
                                <div class="candidate__information">
                                    <?php
                                        echo '<c class="candidate__name" id="candidate__name">Name: ' . $result['intern_name'] . '<br><br></c>';
                                        echo '<linkTXT class="candidate__instagram" id="candidate__instagram" href="/">Instagram:' . $result['instagram_username'] . '<br>‎ </linkTXT>';
                                        echo '<linkTXT class="candidate__linkedin" id="candidate__linkedin" href="/">LinkedIn:' . $result['linkedin_username'] . '<br>‎ </linkTXT>';
                                        echo '<linkTXT class="candidate__canvas" id="candidate__canvas" href="/">Canvas:' . $result['canvas_username'] . '<br>‎ </linkTXT>';
                                    ?>
                                </div>
                                <div class="candidate__img--container">
                                    <img id="candidate__img" src="images/miscPFP_Image.svg" />
                                </div>
                            </div>
                                <?php
                            // old code
                            //echo "<tr><td>" . $result['intern_name'] . "</td><td>" . $result['instagram_username'] . "</td><td>" . $result['linkedin_username'] . "</td><td>" . $result['canvas_username'] . "</td></tr>";
                            }
                        echo "</table>";
                    } else {
                        //old code
                        //echo "No results found.";
                        // change the content of the code below to change the reload time; i just made it a small number so we can see whats happening
                        ?>
                        <meta http-equiv="refresh" content="10; URL=http://falc-mcs2513.com/NoResults.html" />
                        <?php
                    }
                    unset($_SESSION['search_results']);
                ?>
            <!-- Fix Later -->
            <a href="/Search.html" class="button">Back</a>
        </form>
    <script src="/JS_Files/app.js"></script>
    <script src="/JS_Files/results.js"></script>
</body>
</html>
