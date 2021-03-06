<?php

declare(strict_types=1);

namespace DesignPattern\Behavioral\Mediator;

class Mediator implements MediatorInterface
{
    /**
     * @var \DesignPattern\Behavioral\Mediator\Consumer
     */
    private Consumer $consumer;

    /**
     * @var \DesignPattern\Behavioral\Mediator\Database
     */
    private Database $database;

    /**
     * @var \DesignPattern\Behavioral\Mediator\Server
     */
    private Server $server;

    /**
     * Set consumer instance.
     *
     * @param  \DesignPattern\Behavioral\Mediator\Consumer  $consumer
     *
     * @return $this
     */
    public function setConsumer(Consumer $consumer): self
    {
        $this->consumer = $consumer;

        return $this;
    }

    /**
     * Set database instance.
     *
     * @param  \DesignPattern\Behavioral\Mediator\Database  $database
     *
     * @return $this
     */
    public function setDatabase(Database $database): self
    {
        $this->database = $database;

        return $this;
    }

    /**
     * Set server instance.
     *
     * @param  \DesignPattern\Behavioral\Mediator\Server  $server
     *
     * @return $this
     */
    public function setServer(Server $server): self
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Send request.
     *
     * @return mixed
     */
    public function sendRequest()
    {
        return $this->server->response();
    }

    /**
     * Query some data.
     *
     * @return string
     */
    public function query(): string
    {
        return $this->database->query();
    }

    /**
     * Recv response.
     *
     * @param  string  $content
     *
     * @return void
     */
    public function recvResponse($content): void
    {
        echo $this->consumer->output($content);
    }
}
