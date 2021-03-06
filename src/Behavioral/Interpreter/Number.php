<?php

declare(strict_types=1);

namespace DesignPattern\Behavioral\Interpreter;

class Number implements ExpressionInterface
{
    /**
     * @var int
     */
    private int $value;

    /**
     * Number constructor.
     *
     * @param  int  $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param  array  $context
     *
     * @return int
     */
    public function interpret(array $context): int
    {
        return $this->value;
    }
}
