<?php
namespace models;

/**
 * Class FileCourseStorage
 * @package models
 */
class FileCourseStorage extends CourseStorage {

    public function load() {
        $this->courses = require ('storage.php');
    }

}