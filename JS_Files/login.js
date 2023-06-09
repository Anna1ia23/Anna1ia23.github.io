function setFormMessage(formElement, type, message){
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add('form__message--${type}');
}

function setInputError(inputElement, message){
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement){
    inputElement.classList.remove("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}

/*function allowAccessToWebsite(checked){
    // if checked, the user is a business
    if (checked === true) {
        location.href = "/Search.html";
    } else {
        location.href = "/EditProfile.php";
    }
}*/


document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkLogin").addEventListener("click", e =>{
        // stops the link from doing it's default action (which in this case is refreshing the page)
        e.preventDefault();

        /*
        I created the form--hidden class so when added to an element, it hides it from user view.
        By adding it to the createAccountForm and removing it from loginForm, it toggles between the
        two menus.
        */
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });

    document.querySelector("#linkCreateAccount").addEventListener("click", e =>{
        // stops the link from doing it's default action (which in this case is refreshing the page)
        e.preventDefault();

        /*
        I created the form--hidden class so when added to an element, it hides it from user view.
        By adding it to the loginForm and removing it from createAccountForm, it toggles between the
        two menus.
        */
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });
    loginForm.addEventListener("submit", e => {
        e.preventDefault();
        let username = document.getElementById('userLogInEmail').value;
        let password = document.getElementById('userLogInPass').value;

        
        // if both username and password are real values (this is only false if they don't enter in data)
        if (username && password){

            // begin searching the database right HERE!!
            location.href = "/PHP_Files/LogInBackEnd.php";
            // if there is a match, run this function:
            //allowAccessToWebsite(document.getElementById('logInCheckbox').checked);

            // if there isn't a match, display this message:
            // setFormMessage(loginForm, "error", "Incorrect username or password.");

        } else {
            setFormMessage(loginForm, "error", "Please enter a username and password.");
        }
        
    });

    createAccountForm.addEventListener("submit", e => {
        e.preventDefault();
        let username = document.getElementById('userSignUpEmail').value;
        let password = document.getElementById('userSignUpPass').value;

        // if both username and password are real values (this is only false if they don't enter in data)
        if (username && password){

            // begin searching the database right HERE!!
            // only check usernames
            location.href = "/PHP_Files/LogInBackEnd.php";
            // if there isn't a match, save their data in the database and then run this function:
            // allowAccessToWebsite(document.getElementById('signUpCheckbox').checked);

            // if there is a match, then display this message:
            // setFormMessage(loginForm, "error", "Username has been taken.");

        } else {
            setFormMessage(loginForm, "error", "Please enter a username and password.");
        }
        
    });

    document.querySelectorAll(".form__input").forEach(inputElement => {
        // when the user clicks off of an input field, this checks if they entered valid input
        inputElement.addEventListener("blur", e=> {
            // maybe check somewhere here that there is an @ symbol in their email
            if ((e.target.id === "userLoginEmail" || e.target.id === "userSignUpEmail") && e.target.value.length <= 5 && e.target.value.length > 64){
                setInputError(inputElement, "Please enter a valid email address.");
            }
        })

        // if there was an error on the user's screen, this clears it when they enter new input
        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        })
    })
});




