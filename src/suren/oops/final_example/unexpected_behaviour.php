<?php

namespace suren\oops\final_example;

/*
 * Such behaviour looks slight unexpected because in child class we cannot know, which private methods exists in a parent class and vice versa.
 */
class parentClass {
    final private function someMethod() { }
}
class childClass extends parentClass {
    private function someMethod() { }
}

