function validation() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var pass = document.forms["myForm"]["password"].value;
    var confpass = document.forms["myForm"]["confpassword"].value;
    var add = document.forms["myForm"]["address"].value;
    var game = document.forms["myForm"]["game"].cheked;
    var gender = document.forms["myForm"]["gender"];
    var age = document.forms["myForm"]["age"].value;
    var file = document.forms["myForm"]["file"].value;
  
    function matchPass(pass1, confpass1) {
      if (pass1 != confpass1) {
        alert("password doesn't match");
      }
    }
    if (name == "") {
      alert("Please Enter your name:");
      name.focus();
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
    if (add == "") {
      alert("Please Enter your Address:");
      add.focus();
      return false;
    }
    if (game == false) {
      alert("Please Select your Game:");
      game.focus();
      return false;
    }
    if (gender.value == "") {
      alert("Please Select your Gender:");
      gender.focus();
      return false;
    }
    if (age == "Select") {
      alert("Please Select your Age:");
      age.focus();
      return false;
    }
    if (file == false) {
      alert("Please Upload file:");
      file.focus();
      return false;
    }
  
    matchPass(pass, confpass);
  }
  