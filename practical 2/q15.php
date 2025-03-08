<?php
class BankAccount {
    public $accountNumber;
    public $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
}

$account = new BankAccount(123456, 5000);
$account->deposit(2000);
$account->withdraw(1000);
echo "Balance: " . $account->balance;
?>
