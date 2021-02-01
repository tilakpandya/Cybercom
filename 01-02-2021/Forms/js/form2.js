function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var pass = document.forms["myForm"]["password"].value;
  var add = document.forms["myForm"]["address"].value;
  var game = document.forms["myForm"]["game"].value;
  var gender = document.forms["myForm"]["gender"].value;
  var dob = document.forms["myForm"]["dob"].value;
  var marital = document.forms["myForm"]["marital"].value;
  var check = document.getElementsById("agrement");

  if (
    name == "" ||
    pass == "" ||
    add == "" ||
    game == "" ||
    gender == "" ||
    dob == "" ||
    marital == ""
  ) {
    alert("All filed must be filled out");
  }
}
