function blogValidation() {
  var title = document.forms["myForm"]["title"].value;
  var content = document.forms["myForm"]["content"].value;
  var url = document.forms["myForm"]["url"].value;
  var publishedat = document.forms["myForm"]["publishedat"].value;
  var category = document.forms["myForm"]["category"].value;
  var image = document.forms["myForm"]["image"].value;

  if (title == "") {
    alert("Please Enter your name:");
    title.focus();
    return false;
  }
  if (content == "") {
    alert("Please Enter your content:");
    content.focus();
    return false;
  }
  if (url == "") {
    alert("Please Enter url");
    url.focus();
    return false;
  }
  if (publishedat == "") {
    alert("Please Enter published date");
    confpass.focus();
    return false;
  }
  if (category == "Category") {
    alert("Please Choose category");
    category.focus();
    return false;
  }
  if (image == false) {
    alert("Please Select your image:");
    image.focus();
    return false;
  }
}
