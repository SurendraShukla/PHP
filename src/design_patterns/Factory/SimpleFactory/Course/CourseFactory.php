<?php

namespace design_patterns\Factory\SimpleFactory\Course;


class CourseFactory
{
    public static function createCourse(string $scheduleType): AbstractCourse
    {
        $objCourse = null;
        switch ($scheduleType) {
            case "N":
                $objCourse = new NetCourse();
                break;
            case "J":
                $objCourse = new JavaCourse();
                break;
            //Add more case conditions here for VC++ and C++
        }
        $objCourse->createCourseMaterial();
        $objCourse->createSchedule();
        return $objCourse;
    }

}
