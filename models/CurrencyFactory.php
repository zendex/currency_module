<?php
namespace models;

/**
 * Class CurrencyFactory
 * @package models
 */
class CurrencyFactory {

    private CourseStorage $storage;

    public function __construct(CourseStorage $storage) {
        $this->storage = $storage;
    }

    public function getDollar(): CurrencyDollar {
        return new CurrencyDollar($this->storage->getCourse(CurrencyDollar::class));
    }

    public function getBelarusianRuble(): CurrencyBelarusianRuble {
        return new CurrencyBelarusianRuble($this->storage->getCourse(CurrencyBelarusianRuble::class));
    }

    public function getRuble(): CurrencyRuble {
        return new CurrencyRuble($this->storage->getCourse(CurrencyRuble::class));
    }

}