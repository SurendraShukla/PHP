<?php

namespace design_patterns\Observer\Account;


interface Observer
{
    public function update(Observable $subject);

}