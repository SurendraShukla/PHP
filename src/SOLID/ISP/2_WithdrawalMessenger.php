<?php

namespace src\SOLID\ISP;

interface WithdrawalMessenger {

    public function tellNotEnoughMoneyInAccount();
    public function askForFeeConfirmation();

}
