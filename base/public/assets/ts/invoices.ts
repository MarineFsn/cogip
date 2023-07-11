const containerHeader = document.querySelector(".container__info");
if (containerHeader) {
  containerHeader.remove();
}
const allLabel = document.querySelectorAll("label");
if (allLabel) {
  allLabel.forEach((element) => {
    element.remove();
  });
}
