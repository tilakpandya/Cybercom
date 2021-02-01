function validateForm() {
  var pass = document.getElementById("pass").value;
  var email = document.getElementById("email").value;

  if (pass == "" || email == "") {
    alert("All filed must be filled out");
  }
}
