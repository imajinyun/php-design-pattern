<?php

declare(strict_types=1);

namespace DesignPattern\Test\Structural\Proxy;

use DesignPattern\Structural\Proxy\Employee;
use DesignPattern\Structural\Proxy\WifiNetwork;
use DesignPattern\Structural\Proxy\WifiNetworkProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    /**
     * @var \DesignPattern\Structural\Proxy\WifiNetworkInterface
     */
    private $wifiNetwork;

    /**
     * @var \DesignPattern\Structural\Proxy\WifiNetworkProxy
     */
    private WifiNetworkProxy $wifiNetworkProxy;

    protected function setUp(): void
    {
        $this->wifiNetwork = new WifiNetwork('MyCompanyWifi');
        $this->wifiNetworkProxy = new WifiNetworkProxy('MyCompanyWifiProxy');
    }

    public function testInterfaceImplementation(): void
    {
        self::assertInstanceOf(WifiNetwork::class, $this->wifiNetwork);
        self::assertInstanceOf(WifiNetworkProxy::class, $this->wifiNetworkProxy);
    }

    public function testWifiNetworkAccess(): void
    {
        $allow1 = new Employee('Amy', 'pass', Employee::ACCESS_LEVEL_ALLOW);
        self::assertTrue($this->wifiNetwork->grantAccess($allow1));

        $allow2 = new Employee('Andy', '', Employee::ACCESS_LEVEL_DENY);
        self::assertTrue($this->wifiNetwork->grantAccess($allow2));
    }

    public function testWifiNetworkProxyAccess(): void
    {
        $allow = new Employee('Amy', 'pass', Employee::ACCESS_LEVEL_ALLOW);
        self::assertTrue($this->wifiNetworkProxy->grantAccess($allow));

        $deny = new Employee('Andy', '', Employee::ACCESS_LEVEL_DENY);
        self::assertFalse($this->wifiNetworkProxy->grantAccess($deny));
    }
}
