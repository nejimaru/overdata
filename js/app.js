
function ready() {
  document.addEventListener("keyup", function() {
    let myInput = document.getElementById("input"),
        myInputControl = document.getElementById("input-control");
    if (myInput.value !== "" && myInput.value !== null && myInput.value !== undefined)
      myInputControl.classList.add("input--filled");
    else
      myInputControl.classList.remove("input--filled");
  })
}

document.addEventListener("DOMContentLoaded", ready);
