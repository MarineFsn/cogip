function validateForm(event: Event) {
  const email = (document.getElementsByName("mail")[0] as HTMLInputElement)
    .value;
  const password = (
    document.getElementsByName("password")[0] as HTMLInputElement
  ).value;
  let valid = true;
  const passwordValidation =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

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
        "*The password must be between 8 and 15 characters and must contain at least one lowercase letter, one uppercase letter, one digit, and one special character from [@ $!%*?&]. The first character must be a letter.";
    }
    valid = false;
  }

  if (!valid) {
    event.preventDefault();
  }
}

function validateEmail(email: string) {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
}

const form = document.querySelector("form");
if (form) {
  form.addEventListener("submit", validateForm);
}
