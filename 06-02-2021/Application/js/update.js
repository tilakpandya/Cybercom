function validation() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
  var phone = document.forms["myForm"]["phone"].value;
  var title = document.forms["myForm"]["title"].value;
  var created = document.forms["myForm"]["created"].value;

  if (
    name == "" ||
    email == "" ||
    phone == "" ||
    title == "" ||
    created == ""
  ) {
    alert("Please Fill All Data!");
    window.location.href = "update.php";
  }
}
