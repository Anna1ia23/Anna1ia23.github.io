document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#SignUpSubmitButton");
    loginForm.addEventListener("submit", e => {
        //store user's searched terms in a const/global variable?
        var inputtedSearchTerms = document.getElementById('searchBarTXT').value;
        // remove the spaces of the string
        inputtedSearchTerms.replaceAll(' ', '');
        var keywords = inputtedSearchTerms.split(',');
        // keywords now holds the an array of strings entered by the user - Katie


        //check if said terms are in the array here
        var keywordsFound = false;

        //have something to search the array
        for (/*make it so it reads the whole array in search for a keyword*/) {
            if (/*The id's keywords match the inputted keywords*/) {
                //store the ID
                keywordsFound = true
            }
            else {
                //continue searching (so probably just do nothing here?)
            }
        }
        

        //if they are, go to results page. if not, idk do something
        if (keywordsFound = true) {
            //go to the results page
            location.href = "/Results.php";
        }
        else {
            location.href = "/NoResults.php";
            //still send them to the results page and give them nothing? or make an error right here?
        }
    });

});