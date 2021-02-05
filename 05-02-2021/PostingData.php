<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script type="text/javascript">
      function insert() {
        //alert("Hi");
        text_value = document.getElementById("text").value;
        //alert(text_value);
        if (window.XMLHttpRequest) {
          xmlhttp = new XMLHttpRequest();
        } else {
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function () {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("message").innerHTML = xmlhttp.responseText;
          }
        };
        parameters = 'text='+text_value;
        xmlhttp.open("POST", "update.inc.php", true);
        xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        xmlhttp.send(parameters);
      }
    </script>
  </head>
  <body>
    <form>
      Insert : <input type="text" id="text" />
      <input type="submit" value="Submit" onclick="insert()" />
      <div id="message"></div>
    </form>
  </body>
</html>
