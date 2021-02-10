function BlogDeleteJs(id) {
  //alert(id);
  $.ajax({
    type: "POST",
    data: {
      cid: id,
    },
    url: "deleteBlog.php",
    success: (data) => {
      console.log(data);
      const output = document.getElementById("hey");
      output.innerHTML = data;
    },
  });
}
