function validateForm() {
  var name = document.getElementById("name").value;
  var pass = document.getElementById("email").value;
  var add = document.getElementById("subject").value;
  var game = document.getElementById("message").value;

  if (name == "" || pass == "" || add == "" || game == "") {
    alert("All filed must be filled out");
  }
}
