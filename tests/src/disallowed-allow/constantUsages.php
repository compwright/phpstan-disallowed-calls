<?php
declare(strict_types = 1);

use Inheritance\Base;
use Waldo\Quux\Blade;

// allowed by path
FILTER_FLAG_NO_PRIV_RANGE;
\FILTER_FLAG_NO_PRIV_RANGE;
\Inheritance\Sub::BELONG;
\Inheritance\Base::BELONG;
Base::BELONG;
Blade::RUNNER;
\Waldo\Quux\Blade::RUNNER;

$quux = 'Quux';
$blade = "\\Waldo\\{$quux}\\Blade";
$blade::DECKARD;

// not a disallowed constant usage
Base::ALL;

// not a constant
Base::class;
\Constructor\ClassWithConstructor::class;
