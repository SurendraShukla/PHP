<?php

namespace design_patterns\Factory\SimpleFactory\Course;


class JavaCourse extends AbstractCourse
{
    public function createCourseMaterial() {
        echo "\nJava course material created";
    }

    public function createSchedule() {
        echo "\nJava course schedule created";
    }
}
