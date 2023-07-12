"use strict";
function validateForm(event) {
    const email = document.getElementsByName("mail")[0]
        .value;
    const password = document.getElementsByName("password")[0].value;
    const firstName = document.getElementsByName("first_name")[0].value;
    const lastName = document.getElementsByName("last_name")[0].value;
    const emailSignUp = document.getElementsByName("email")[0].value;
    let valid = true;
    const passwordValidation = /^[A-Za-z]\w{7,14}$/;
    const errorElement = document.getElementById("error");
    if (errorElement) {
        errorElement.textContent = "";
    }
    if (!validateEmail(emailSignUp)) {
        if (errorElement) {
            errorElement.textContent += " *Invalid email address";
        }
        valid = false;
    }
    if (!validateEmail(email)) {
        if (errorElement) {
            errorElement.textContent += " *Invalid email address";
        }
        valid = false;
    }
    if (!firstName) {
        if (errorElement) {
            errorElement.textContent += " *First name is required";
        }
        valid = false;
    }
    if (!lastName) {
        if (errorElement) {
            errorElement.textContent += " *Last name is required";
        }
        valid = false;
    }
    if (!password.match(passwordValidation)) {
        if (errorElement) {
            errorElement.textContent +=
                " *Password must be between 7 to 15 characters which contain only characters, numeric digits, underscore, and the first character must be a letter";
        }
        valid = false;
    }
    if (!valid) {
        event.preventDefault();
    }
}
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
const form = document.querySelector("form");
if (form) {
    form.addEventListener("submit", validateForm);
}
