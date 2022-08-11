function validate(pForm) {
  let isValid = "";


  if (pForm.fullname.value === "") {
    document.getElementById("fnameErr").innerHTML =
      "Please fill up the Fullname.";
    isValid = "Not Valid";
  }

  if (pForm.username.value === "") {
    document.getElementById("unameErr").innerHTML =
      "Please fill up the username.";
    isValid = "Not Valid";
  }
  if (pForm.email.value === "") {
    document.getElementById("emailErr").innerHTML =
      "Please fill up the email email";
    isValid = "Not Valid";
  }
  if (pForm.password.value === "") {
    document.getElementById("passwordErr").innerHTML =
      "Please fill up the password";
    isValid = "Not Valid";
  }

  if (isValid === "") {
    return true;
  } else {
    return false;
  }
}