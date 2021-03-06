<?php

declare(strict_types=1);

namespace DesignPattern\Behavioral\Interpreter;

interface ExpressionInterface
{
    /**
     * @param  array  $context
     *
     * @return mixed
     */
    public function interpret(array $context);
}
