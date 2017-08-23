<?php

namespace SOLID\SRP\Violation;

// Two reasons to change
// 1. To create user
// 2. To log error
class User {

    public $forename;
    protected $surname;
    protected $address1;
    protected $city;
    protected $country;


    public function create(string $data) {
        try{
            $this->validate($data);
            //... Create user and save it in database
        }catch(DatabaseException $e) {
            $this->logError($e->getMessage());
        }
    }

    protected function validate($data) {
        if (strlen($data) < 2) {
            return false;
        }
        return true;
    }

    public function logError($message) {
        // ... write error to file
    }

}
