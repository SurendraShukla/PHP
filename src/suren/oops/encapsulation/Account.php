<?php
/**
 * Created by IntelliJ IDEA.
 * User: shuklas
 * Date: 8/17/17
 * Time: 2:08 PM
 */

namespace src\suren\oops;


class Account {
    /**
     * How much money is currently in the account
     * @var float
     */
    private $accountBalance;

    /**
     * @param float $currentAccountBalance Initialize account to this dollar amount
     */
    public function __construct($currentAccountBalance) {
        $this->accountBalance = $currentAccountBalance;
    }

    /**
     * Add money to account
     * @param float $money Dollars to add to balance
     * @return void
     */
    public function deposit($money) {
        $this->accountBalance += $money;
    }

    /**
     * Remove money from account
     * @param float $money Dollars to subtract from balance
     * @throws Exception
     * @return void
     */
    public function withdraw($money) {
        if ($this->accountBalance < $money) {
            throw new Exception('Cannot withdraw $' . $money . ' from account as it contains $' . $this->accountBalance);
        }
        $this->accountBalance -= $money;
    }

    /**
     * Get current account balance, that takes all additions and subtractions into consideration.
     * @return float
     */
    public function getAccountBalance() {
        return $this->accountBalance;
    }
}

// Create a new object from the Account class with a starting balance of $500.00
$myAccount = new Account(500.00);

// We have clearly defined methods for adding and subtracting money from the Account
// If we didn't have a method for withdraw(), nothing would prevent us from withdrawing more money than was available in the account
$myAccount->deposit(10.24);
$myAccount->withdraw(4.45);

// Get the current balance
$accountBalance = $myAccount->getAccountBalance();
echo 'My Account Balance: $' . $accountBalance; // 505.79

// Our code forbids us from withdrawing more than we have
$myAccount->withdraw(600.00); // Exception Message: Cannot withdraw $600 from account as it contains $505.79
