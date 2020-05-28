<?php
namespace models;

/**
 * Class WebCourseStorage
 * @package models
 */
class WebCourseStorage extends CourseStorage {

    private string $url = "http://...";

    public function load() {
        // todo - load from url by date_at
    }

}