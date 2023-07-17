function validateFormSignUp(event: Event) {
  const password = (
    document.getElementsByName("password")[0] as HTMLInputElement
  ).value;
  const firstName = (
    document.getElementsByName("first_name")[0] as HTMLInputElement
  ).value;
  const lastName = (
    document.getElementsByName("last_name")[0] as HTMLInputElement
  ).value;
  const email = (document.getElementsByName("email")[0] as HTMLInputElement)
    .value;

  let valid = true;
  const passwordValidation: RegExp =
  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  const errorElement = document.getElementById("error");

  if (errorElement) {
    errorElement.textContent = "";
  }

  if (!validateEmailSignUp(email)) {
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
        " *The password must be between 8 and 15 characters and must contain at least one lowercase letter, one uppercase letter, one digit, and one special character from [@ $!%*?&]. The first character must be a letter.";
    }
    valid = false;
  }

  if (!valid) {
    event.preventDefault();
  }
}

function validateEmailSignUp(email: string) {
  const re: RegExp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
}

const formSingUp = document.querySelector("form");
if (formSingUp) {
  formSingUp.addEventListener("submit", validateForm);
}
