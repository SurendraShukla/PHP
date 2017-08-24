<?php
namespace design_patterns\Singleton;

require_once __DIR__ . '/SingletonClassUsesClassProperty.php';
use \ReflectionClass;

class ReflectionSingletonTest {

    public static function breakSingletonClass($obj)
    {
        $instanceOne = SingletonClassUsesClassProperty::getInstance();

        echo "\n[".($obj === $instanceOne)."]";

        $reflection = new ReflectionClass($obj);
        $property = $reflection->getProperty('_instance');
        $property->setAccessible(true);
        $property->setValue($obj, null);

        $instanceTwo = SingletonClassUsesClassProperty::getInstance();
        echo "\n[".($instanceOne === $instanceTwo)."]";
    }

}
ReflectionSingletonTest::breakSingletonClass(SingletonClassUsesClassProperty::getInstance());

