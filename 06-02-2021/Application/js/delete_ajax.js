function handleDelete(id) {
    $.ajax({
        type: "POST",
        data: {
            cid: id,
        },
        url: "delete.php",
        success: (data) => {
            console.log(data);
            const output = document.getElementById("hey");
            output.innerHTML = data;
        },
    });
};