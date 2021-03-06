<?php

declare(strict_types=1);

namespace DesignPattern\Behavioral\Visitor;

class Group implements RoleInterface
{
    /**
     * @var string
     */
    private string $name;

    /**
     * Group constructor.
     *
     * @param  string  $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get group name.
     *
     * @return string
     */
    public function getName(): string
    {
        return sprintf('Group: %s', $this->name);
    }

    /**
     * @param  \DesignPattern\Behavioral\Visitor\VisitorInterface  $visitor
     *
     * @return mixed|void
     */
    public function allow(VisitorInterface $visitor)
    {
        $visitor->visitGroup($this);
    }
}
