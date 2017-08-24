<?php

namespace design_patterns\Observer\Account;


class Mailer implements Observer
{
    public function update(Observable $subject)
    {
//        switch (get_class($subject)) {
//            case "Account":
                if ($subject->status == "Expired") {
                    //send email: "account expired"
                    echo "Sending account expired email.\n";
                }
//        }
    }
}