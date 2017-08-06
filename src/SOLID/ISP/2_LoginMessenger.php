<?php

namespace src\SOLID\ISP;

interface LoginMessenger {

    public function askForCard();
    public function tellInvalidCard();
    public function askForPin();
    public function tellInvalidPin();

}
