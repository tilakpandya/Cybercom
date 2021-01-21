if(localStorage.getItem("Admin_Registration_array"))
{
   var array = JSON.parse(localStorage.getItem("Admin_Registration_array"));
}
document.getElementById("DashboardName").innerHTML = array[0].Admin_name;

var UserArray=[];

const addToArray=()=>{
        
    function calculateAge(birthday) { // birthday is a date
        var ageDifMs = Date.now() - birthday.getTime();
        var ageDate = new Date(ageDifMs); // miliseconds from epoch
        return Math.abs(ageDate.getUTCFullYear() - 2021);
    }

    let user={
        UserName: document.getElementById('UserName').value,
        UserEmail : document.getElementById('UserEmail').value,
        UserPassword : document.getElementById('UserPassword').value,
        UserBdate : document.getElementById('UserBdate').value,

    }
    
    UserArray.push(user);

    document.forms[0].reset();

    console.log(UserArray);

    alert("Record inserted Successfully");
    localStorage.setItem('UserArray',JSON.stringify(array));

    var html = "<table border='1|1' align='center'>";
                html+="<tr>";
                html+="<th>Name</th>";
                html+="<th>Email</th>";
                html+="<th>Password</th>";
                html+="<th>Birthdate</th>";
                html+="<th>Age</th>";
                html+="<th>Actions</th>";
                html+="</tr>";
    for(var i in array) {
        html+="<tr>";
        html+="<td>"+UserArray[i].UserName+"</td>";
        html+="<td>"+UserArray[i].UserEmail+"</td>";
        html+="<td>"+UserArray[i].UserPassword+"</td>";
        html+="<td>"+UserArray[i].UserBdate+"</td>";
        html+="<td>"+calculateAge(UserArray[i].UserBdate)+"</td>";
        html+="<td><a href='#'>Delete</a><a href='#'>Update</a></td>";
        html+="</tr>";
    }
    
    html+="</table>";
document.getElementById("box").innerHTML = html;
}