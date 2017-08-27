<?php

namespace design_patterns\Factory\SimpleFactory\Course;


abstract class AbstractCourse
{
    private $courseDuration;
    private $courseName;

    abstract function createCourseMaterial();
    abstract function createSchedule();

}
