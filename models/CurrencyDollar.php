<?php
namespace models;

/**
 * Class CurrencyDollar
 * @package models
 */
class CurrencyDollar extends Currency {

    protected const name = "USD";
    protected const code = "840";
    protected const template = "$%.2f";

}