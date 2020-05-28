<?php

use models\CurrencyFactory;
use models\FileCourseStorage;
use models\OperationBuilder;

function __autoload($classname) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $classname);
    require_once "{$path}.php";
}

$storage = new FileCourseStorage();
$factory = new CurrencyFactory($storage);
$usd = $factory->getDollar();
$byn = $factory->getBelarusianRuble();
$rub = $factory->getRuble();

echo "// производить математические операции:\n";

$result = (new OperationBuilder())
    ->add($rub)
    ->mul(5)
    ->div(10)
    ->calcInFormatted($rub);

echo "$result\n";

echo "// преобразовывать одну валюту в другую:\n";

$result = (new OperationBuilder())
    ->add($byn)
    ->calcInFormatted($usd);

echo "$result\n";

echo "// умеет работать с несколькими валютами:\n";

$result = (new OperationBuilder())
    ->add($byn)
    ->add($rub, 20)
    ->add($usd, 2)
    ->sub($byn)
    ->calcInFormatted($byn);

echo "$result\n";