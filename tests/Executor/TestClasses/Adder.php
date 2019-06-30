<?php

declare(strict_types=1);

namespace GraphQL\Tests\Executor\TestClasses;

class Adder
{
    /** @var float */
    public $num;

    /** @var callable */
    public $test;

    public function __construct(float $num)
    {
        $this->num = $num;

        $this->test = function ($rootValue, $args, $context) {
            return $this->num + $args['addend1'] + $context['addend2'];
        };
    }
}
