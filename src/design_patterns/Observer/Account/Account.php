<?php

namespace design_patterns\Observer\Account;


class Account implements Observable
{
    public $status;
    private $_observers = array();

    public function __construct()
    {
        $this->attachObserver(new Logger());
        $this->attachObserver(new Mailer());
    }

    public function attachObserver(Observer $object)
    {
        $this->_observers[] = $object;
    }

    public function detachObserver(Observer $object)
    {
        foreach ($this->_observers as $index => $observer) {
            if ($object == $observer) {
                unset($this->_observers[$index]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    public function getUpdate()
    {
        return $this;
    }

    public function save()
    {
//        $this->notify($this);
        $this->notify();
    }

}