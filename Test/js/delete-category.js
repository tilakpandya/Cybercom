function CategoryDeleteJs(id) {
  //alert(id);
  $.ajax({
    type: "POST",
    data: {
      cid: id,
    },
    url: "deleteCategory.php",
    success: (data) => {
      console.log(data);
      const output = document.getElementById("hey");
      output.innerHTML = data;
    },
  }); 
}
