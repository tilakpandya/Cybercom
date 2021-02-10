function LoginCredential() {
  //alert("hello");
  var email = document.forms["myForm"]["email"].value;
  var pass = document.forms["myForm"]["password"].value;
  if (email == "") {
    alert("Please Enter your Email:");
    email.focus();
    return false;
  }
  if (pass == "") {
    alert("Please Enter your Password:");
    pass.focus();
    return false;
  }
}
