<?php

namespace src\SOLID\SRP;

Class Logger {

    public function writeToFile($message) {
        echo $message;
    }

}

class UserValidator {

    public function validate(User $user) {
        if (strlen($user->forename) < 2) {
            return false;
        }
        return true;
    }
}


class User {

    private $logger;
    private $userValidator;

    public $forename;
    protected $surname;
    protected $address1;
    protected $city;
    protected $country;


    public function __construct(Logger $logger, UserValidator $userValidator) {
        $this->logger = $logger;
        $this->userValidator = $userValidator;
    }


    public function create(User $data) {
        try{
            //... Validate user and save it in database
            $this->userValidator->validate($data);
        }catch(DatabaseException $e) {
            $this->logger->writeToFile($e->getMessage());
        }
    }

}
