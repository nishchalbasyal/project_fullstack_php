const nameElement = document.getElementById("name");
const emailElement = document.getElementById("email");
const msgElement = document.getElementById("message");

const nameErrorElement = document.getElementById("name_error");
const emailErrorElement = document.getElementById("email_error");
const msgErrorElement = document.getElementById("message_error");

function validationForm() {
  let Fname = nameElement.value.trim();
  let email = emailElement.value.trim();
  let msg = msgElement.value.trim();

  nameErrorElement.style.display = "none";
  emailErrorElement.style.display = "none";
  msgErrorElement.style.display = "none";

  if (Fname == null || Fname.length == 0) {
    nameErrorElement.textContent = "Name is empty !!";
    nameErrorElement.style.display = "block";
    return false;
  }

  if (Fname.length <= 4) {
    nameErrorElement.textContent = "Name length must be greater than 3 !!";
    nameErrorElement.style.display = "block";
    return false;
  }

  if (email == null || email.length == 0) {
    emailErrorElement.textContent = "Email is empty !!";
    emailErrorElement.style.display = "block";
    return false;
  }

  let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  if (!emailPattern.test(email)) {
    emailErrorElement.textContent = "Wrong Email!!";
    emailErrorElement.style.display = "block";
    return false;
  }

  if (msg == null || msg.length == 0) {
    msgErrorElement.textContent = "Message is empty !!";
    msgErrorElement.style.display = "block";
    return false;
  }
  if (msg.length <= 10) {
    msgErrorElement.textContent = "Message length must be greater than 10!!";
    msgErrorElement.style.display = "block";
    return false;
  }

  return true;
}

function handleFormSubmit() {
  if (validationForm()) {
    console.log("Form is valid");
    return true
  } else {
    console.log("Form is invalid");
    return false
  }
}
