<?php

declare(strict_types=1);

namespace DesignPattern\Structural\FluentInterface;

class Mysql implements FluentInterface
{
    /**
     * @var array
     */
    private array $fields;

    /**
     * @var array
     */
    private array $table;

    /**
     * @var array
     */
    private array $conditions;

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            implode(',', $this->fields),
            implode(', ', $this->table),
            implode(' AND ', $this->conditions)
        );
    }

    /**
     * Select.
     *
     * @param  array  $fields
     *
     * @return \DesignPattern\Structural\FluentInterface\Mysql
     */
    public function select(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Table.
     *
     * @param  string  $table
     * @param  string  $alias
     *
     * @return \DesignPattern\Structural\FluentInterface\Mysql
     */
    public function from(string $table, string $alias = ''): self
    {
        $this->table[] = $alias ? sprintf('%s AS %s', $table, $alias) : $table;

        return $this;
    }

    /**
     * Where.
     *
     * @param  string  $conditions
     *
     * @return $this
     */
    public function where(string $conditions): self
    {
        $this->conditions[] = $conditions;

        return $this;
    }
}
