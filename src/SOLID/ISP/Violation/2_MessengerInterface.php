<?php

namespace src\SOLID\ISP\Violation;

interface MessengerInterface {

    public function askForCard();
    public function tellInvalidCard();
    public function askForPin();
    public function tellInvalidPin();
    public function tellCardWasSiezed();
    public function askForAccount();
    public function tellNotEnoughMoneyInAccount();
    public function tellAmountDeposited();
    public function tellBalance();

}
