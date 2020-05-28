<?php
namespace models;

/**
 * Class OperationBuilder
 * @package models
 */
class OperationBuilder {

    private float $total = 0;

    public function add(Currency $currency, int $qty = 1): OperationBuilder{
        $this->total += $currency->getRate() * $qty;
        return $this;
    }

    public function sub(Currency $currency, int $qty = 1): OperationBuilder {
        $this->total -= $currency->getRate() * $qty;
        return $this;
    }

    public function mul(int $number): OperationBuilder {
        $this->total *= $number;
        return $this;
    }

    public function div(int $number): OperationBuilder {
        $this->total /= $number;
        return $this;
    }

    public function calcIn(Currency $target): float {
        return $target->getRate() === 0.0 ? $target->getRate() : $this->total / $target->getRate();
    }

    public function calcInFormatted(Currency $target): string {
        return sprintf($target::getTemplate(), $target->getRate() === 0.0 ? $target->getRate() : $this->total / $target->getRate());
    }

}