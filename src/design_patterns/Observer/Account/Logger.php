<?php

namespace design_patterns\Observer\Account;


class Logger implements Observer
{
    public function update(Observable $subject)
    {
        //Update status in log table
        echo "Account is {$subject->status}. Updating status in log table.\n";
    }
}