function validateForm() {
  var name = document.myForm.name.value;
  var pass = document.forms["myForm"]["password"].value;
  var add = document.forms["myForm"]["address"].value;
  var game = document.forms["myForm"]["game"].value;
  var gender = document.forms["myForm"]["gender"].value;
  var age = document.forms["myForm"]["age"].value;

  if (
    name == "" ||
    pass == "" ||
    add == "" ||
    game == "" ||
    gender == "" ||
    age == ""
  ) {
    alert("All filed must be filled out");
    return false;
  }
}
