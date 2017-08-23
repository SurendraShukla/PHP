<?php

namespace design_patterns\singleton;

/**
 * Singleton class
 */
final class SingletonClassUsesMethodVariable
{

    /**
     * Call this method to get singleton
     *
     * @return SingletonClassUsesClassProperty
     */
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new SingletonClassUsesMethodVariable();
        }
        return $inst;
    }

    /**
     * Private constructor so nobody else can instance it
     */
    private function __construct()
    {
    }

}

$fact = SingletonClassUsesMethodVariable::Instance();
$fact2 = SingletonClassUsesMethodVariable::Instance();

echo "[" . ($fact === $fact2) . "]";
//$fact = new SingletonClassUsesMethodVariable();


//http://stackoverflow.com/questions/203336/creating-the-singleton-design-pattern-in-php5