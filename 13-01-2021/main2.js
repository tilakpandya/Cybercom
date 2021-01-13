var mark={name:"mark",
mass:35,
height:1.6,
CalculateMass:function (){ //calculate BMS Index
    var bms = this.mass/(this.height*this.height);
    return bms;
}
};
var john={name:"john",
mass:40,
height:1.52,
CalculateMass:function(){ //calculate BMS Index
    var bms = this.mass/(this.height*this.height);
    return bms;
}
};



//Compare mark and john BMS index
if(mark.CalculateMass() > john.CalculateMass()){
    alert("mark has heighest BMI which is "+mark.CalculateMass());
    console.log("mark has heighest BMI which is "+mark.CalculateMass());
}
else if(mark.CalculateMass() < john.CalculateMass()){
    alert("john has heighest BMI which is "+john.CalculateMass());
    console.log("john has heighest BMI which is "+john.CalculateMass());
}