<?php 

class BankAcc{
    public $balance = 10.5;

    public function DisplayBal(){
       return "Balance: $this->balance";
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


$alex = new BankAcc;
$billy = new BankAcc;

echo"<h1>Alex Transaction</h1>";
echo "Before withdraw ". $alex->DisplayBal();
$alex->Withdraw(5);
echo "<br>after withdraw 5 ". $alex->DisplayBal();
$alex->Deposit(50);
echo "<br>after Deposit 50 ". $alex->DisplayBal();

echo"<h1>Billy Transaction</h1>";
$billy->balance=20;
echo "Before withdraw ". $billy->DisplayBal();
$billy->Withdraw(15);
echo "<br>after withdraw 15 ". $billy->DisplayBal();
$billy->Deposit(20);
echo "<br>after Deposit 20 ". $billy->DisplayBal();


?>