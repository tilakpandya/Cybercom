function Validation() {
  var prefix = document.forms["myForm"]["prefix"].value;
  var firstname = document.forms["myForm"]["firstname"].value;
  var lastname = document.forms["myForm"]["lastname"].value;
  var email = document.forms["myForm"]["email"].value;
  var phone = document.forms["myForm"]["phone"].value;
  var pass = document.forms["myForm"]["password"].value;
  var confpass = document.forms["myForm"]["confpassword"];
  var information = document.forms["myForm"]["information"].value;
  var terms = document.forms["myForm"]["terms"].checked;

  function matchPass(pass1, confpass1) {
    if (pass1 != confpass1) {
      alert("password doesn't match");
    }
  }
  if (prefix == "Prefix") {
    alert("Please choos prefix");
    prefix.focus();
    return false;
  }
  if (firstname == "") {
    alert("Please Enter your Firstname");
    email.focus();
    return false;
  }
  if (lastname == "") {
    alert("Please Enter your lastname:");
    email.focus();
    return false;
  }
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
  if (confpass == "") {
    alert("Please Enter your Confirm Password:");
    confpass.focus();
    return false;
  }
  if (email == "") {
    alert("Please Enter your email Address:");
    email.focus();
    return false;
  }
  if (phone == "") {
    alert("Please Enter phone number");
    phone.focus();
    return false;
  }
  if (gender.value == "") {
    alert("Please Select your Gender:");
    gender.focus();
    return false;
  }
  if (information == "") {
    alert("Please Enter information");
    age.focus();
    return false;
  }
  if (terms == false) {
    alert("Please Mark on Terms and Conditions");
    file.focus();
    return false;
  }

  matchPass(pass, confpass);
}
