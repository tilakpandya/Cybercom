var bill = [124,48,268]; // store bill amount in array
var tip=[];              // we'll store all 3 resturants tips
var finalBill=[];        // we'll store all 3 resturants final bill


for(var i=0;i<=bill.length;i++){  //looping through all elements in bill array
    if(bill[i]<=50){
        var temp = (bill[i]*20)/100;
        tip.push(temp);                 //store in tip array
        finalBill.push(temp+bill[i]);    //store in finalbill array
    }
    else if(bill[i]>50 && bill[i]<=200){
        var temp = (bill[i]*15)/100;     
        tip.push(temp);                    //store in tip array
        finalBill.push(temp+bill[i]);      //store in finalbill array
    }
    else if( bill[i]>200){
        var temp = (bill[i]*10)/100;    
        tip.push(temp);                 //store in tip array
        finalBill.push(temp+bill[i]);    //store in finalbill array
    }
}

// print the tips and final bill 
alert("total tips are: "+tip);
alert("total final bill: "+finalBill);
console.log(tip);
console.log(finalBill);

