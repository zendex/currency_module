<?php
namespace models;

/**
 * Class Currency
 * @package models
 */
abstract class Currency {

    protected float $rate;

    public function __construct($rate = 1) {
        $this->setRate($rate);
    }

    protected function setRate($rate) {
        $this->rate = $rate;
    }

    public function getRate():float {
        return $this->rate;
    }

    public static function getCode(): string {
        return static::code;
    }

    public static function getName(): string {
        return static::name;
    }

    public static function getTemplate(): string {
        return static::template;
    }

}