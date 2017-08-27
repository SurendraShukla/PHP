<?php

namespace design_patterns\Factory\SimpleFactory\Course;


class NetCourse extends AbstractCourse
{

    public function createCourseMaterial() {
        echo "\n.Net course material created";
    }

    public function createSchedule() {
        echo "\n.Net course schedule created";
    }
}
