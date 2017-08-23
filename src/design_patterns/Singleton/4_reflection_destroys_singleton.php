<?php
namespace design_patterns\singleton;

//require_once __DIR__ . '/2_singleton_lazy_loading_using_class_property.php';
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

