<?php
class BankAccount
{

    final public function calculateInterest($amount)
    {
        return $amount * 0.05;   // Fixed 5% interest
    }
}

class SavingsAccount extends BankAccount
{
    // public function calculateInterest($amount) { }
}

$acc = new SavingsAccount();
echo $acc->calculateInterest(20000);
