<?php 

class BankAcc{
    public $balance = 10.5;

    public function DisplayBal(){
       return "Balance: $this->balance <br>";
    }

    public function Withdraw($amt){
        if ($amt>= $this->balance) {
            echo "Not Enough Money";
        } else {
            $this->balance = $this->balance - $amt;  
        }
        
    }

    public function Deposit($amt){
        $this->balance = $this->balance + $amt;  
    }
}


class SavingsAcc extends BankAcc{
    public $type = '18-25';
    
}

 $alex = new BankAcc;
 $alex->Deposit(100);
 echo $alex->DisplayBal();

 $alex_savings = new SavingsAcc;
 $alex_savings->Deposit(120);
 echo $alex_savings->DisplayBal();
?>