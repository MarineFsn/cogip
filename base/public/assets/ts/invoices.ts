const containerHeader = document.querySelector(".container__info");
if (containerHeader) {
  containerHeader.remove();
}

const buttonPrevious = document.getElementById("myTable_previous");
if (buttonPrevious) {
  buttonPrevious.textContent = "<";
}
