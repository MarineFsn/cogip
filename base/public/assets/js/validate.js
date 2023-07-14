"use strict";
function validateForm(event) {
    const email = document.getElementsByName("mail")[0]
        .value;
    const password = document.getElementsByName("password")[0].value;
    let valid = true;
    const passwordValidation = /^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;
    const errorElement = document.getElementById("error");
    if (errorElement) {
        errorElement.textContent = "";
    }
    if (!validateEmail(email)) {
        if (errorElement) {
            errorElement.textContent += " *Invalid email address";
        }
        valid = false;
    }
    if (!password.match(passwordValidation)) {
        if (errorElement) {
            errorElement.textContent +=
                "Password must be between 7 to 15 characters which contain only characters, numeric digits, underscore and first character must be a letter";
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
