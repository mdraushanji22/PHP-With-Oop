<?php

// Parent Class
class BankAccount
{

    private $balance = 10000;      // Private: Sirf iss class ke andar access hoga
    protected $pin = 1234;         // Protected: Child class me bhi access hoga

    public function getBalance()
    { // Public: Sab jagah access
        return "Your balance is: " . $this->balance;
    }

    private function updateBalance($amount)
    {  // Private: Sirf BankAccount ke andar
        $this->balance += $amount;
    }

    public function depositMoney($amount)
    {
        $this->updateBalance($amount);  // Calling private function internally
        return "₹$amount deposited successfully!";
    }
}

// Child Class
class EmployeePanel extends BankAccount
{

    public function showPin()
    {
        return "Customer PIN is: " . $this->pin;  // Protected access allowed
    }

    public function resetPin($newPin)
    {
        $this->pin = $newPin;
        return "PIN reset successfully to: " . $this->pin;
    }
}

// ----------- Execution -------------

$user = new BankAccount();
echo $user->getBalance() . "<br>";
echo $user->depositMoney(5000) . "<br>";
echo $user->getBalance() . "<br>";

$emp = new EmployeePanel();
echo $emp->showPin() . "<br>";
echo $emp->resetPin(9876) . "<br>";
