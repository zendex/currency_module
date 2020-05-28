<?php
namespace models;

/**
 * Class CourseStorage
 * @package models
 */
abstract class CourseStorage {

    protected array $courses;

    private \DateTime $date_at;

    public function __construct() {
        $this->date_at = new \DateTime();
        $this->load();
    }

    public function setDateAt(\DateTime $date_at) {
        $this->date_at = $date_at;
    }

    public function getCourse($currency): float {
        if( key_exists($currency::getCode(), $this->courses) )
            return $this->courses[$currency::getCode()];
        else
            return 0;
    }

    abstract public function load();

}