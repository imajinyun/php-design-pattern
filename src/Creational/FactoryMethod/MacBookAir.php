<?php

declare(strict_types=1);

namespace DesignPattern\Creational\FactoryMethod;

class MacBookAir implements NotebookInterface
{
    /**
     * @var string
     */
    protected string $color;

    /**
     * Sets the color of the MacBookAir.
     *
     * @param  string  $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }
}
