function validateForm() {
  var fname = document.getElementsByid("fname").value;
  var lname = document.getElementById("lname").value;
  var pass = document.getElementById("password").value;
  var number = document.getElementById("number").value;
  var email = document.getElementById("email").value;
  var gender = document.getElementById("gender").value;
  var dob = document.getElementById("dob").value;
  var country = document.getElementById("country").value;
  var check = document.getElementsById("agrement");

  /*if (
    fname ==""   ||
    lname == "" ||
    pass == "" ||
    add == "" ||
    email == "" ||
    gender == "" ||
    number == "" ||
    dob == "" ||
    country == "" 
  ) {*/
  alert("All filed must be filled out");
}
