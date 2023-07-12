function validateForm(event: Event) {
  const email = (document.getElementsByName("mail")[0] as HTMLInputElement)
    .value;
  const password = (
    document.getElementsByName("password")[0] as HTMLInputElement
  ).value;
  let valid = true;
  const passwordValidation = /^[A-Za-z]\w{7,14}$/;

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

function validateEmail(email: string) {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
}

const form = document.querySelector("form");
if (form) {
  form.addEventListener("submit", validateForm);
}
