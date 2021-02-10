function categoryValidation() {
  //alert("hello");
  var id = document.forms["myForm"]["id"].value;
  var title = document.forms["myForm"]["title"].value;
  var content = document.forms["myForm"]["content"].value;
  var url = document.forms["myForm"]["url"].value;
  var metatitle = document.forms["myForm"]["metatitle"].value;
  var category = document.forms["myForm"]["parentcat"].value;
  var image = document.forms["myForm"]["image"].value;

  if (id == "") {
    alert("Please Enter your Id");
    title.focus();
    return false;
  }
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
  if (metatitle == "") {
    alert("Please Enter meta title");
    confpass.focus();
    return false;
  }
  if (category == "Parent Category") {
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
