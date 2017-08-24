<?php

namespace design_patterns\Observer\Account;


interface Observable
{
    public function attachObserver(Observer $dependent);
    public function detachObserver(Observer $dependent);
    public function notify();
    public function getUpdate();
}