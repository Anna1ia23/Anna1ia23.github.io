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

//setFormMessage(loginForm, "success", "You're Logged in!");

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

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
    loginForm.addEventListener("submit", e => {
        e.preventDefault();

        //PREFORM LOGIN VERIFICATION HERE!!! RIGHT HERE!!! :)
        function Verify() {
            var username/*=stored string*/;
            var password/*=stored string*/;

            if (/*username==DB && password==usernamePassword*/)
            {
                //signs in
            }
            else
            {
                //setFormMessage(loginForm, "error", "Incorrect Username or Password"); ??
            }

        }

        setFormMessage(loginForm, "error", "Incorrect Username or Password");
    });

    document.querySelectorAll(".form__input").forEach(inputElement => {
        // when the user clicks off of an input field, this checks if they entered valid input
        inputElement.addEventListener("blur", e=> {
            // maybe check somewhere here that there is an @ symbol in their email
            if (e.target.id === "userEmail" && e.target.value.length < 0 && e.target.value.length > 64){
                setInputError(inputElement, "Please enter a valid email address.");
            }
        })

        // if there was an error on the user's screen, this clears it when they enter new input
        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        })
    })
});