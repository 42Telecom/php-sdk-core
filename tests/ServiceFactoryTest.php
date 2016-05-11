<?php
namespace Fortytwo\SDK\Test;
use Fortytwo\SDK\Core\Factories\ServiceFactory;

class ServiceFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceImSend()
    {
        $instance = ServiceFactory::get('IM/Send');
        $this->assertContainsOnlyInstancesOf('Fortytwo\SDK\Core\Services\IM\SendService', array($instance));

        $this->assertEquals('https', $instance->getScheme());
        $this->assertEquals('rest.fortytwo.com', $instance->getDomain());
        $this->assertEquals('1', $instance->getPrefix());
        $this->assertEquals('im', $instance->getRessource());
        $this->assertEquals('POST', $instance->getMethod());
        $this->assertEquals('https://rest.fortytwo.com/1/im', $instance->getEndPoint());
    }
    public function testInstanceImStatus()
    {
        $instance = ServiceFactory::get('IM/Status');
        $this->assertContainsOnlyInstancesOf('Fortytwo\SDK\Core\Services\IM\StatusService', array($instance));

        $this->assertEquals('https', $instance->getScheme());
        $this->assertEquals('rest.fortytwo.com', $instance->getDomain());
        $this->assertEquals('1', $instance->getPrefix());
        $this->assertEquals('im/status', $instance->getRessource());
        $this->assertEquals('GET', $instance->getMethod());
        $this->assertEquals('https://rest.fortytwo.com/1/im/status', $instance->getEndPoint());
    }
    public function testInstanceTfaRequest()
    {
        $instance = ServiceFactory::get('TFA/Request');
        $this->assertContainsOnlyInstancesOf('Fortytwo\SDK\Core\Services\TFA\RequestService', array($instance));

        $this->assertEquals('https', $instance->getScheme());
        $this->assertEquals('rest.fortytwo.com', $instance->getDomain());
        $this->assertEquals('1', $instance->getPrefix());
        $this->assertEquals('2fa', $instance->getRessource());
        $this->assertEquals('POST', $instance->getMethod());
        $this->assertEquals('https://rest.fortytwo.com/1/2fa', $instance->getEndPoint());
    }
    public function testInstanceTfaValidate()
    {
        $instance = ServiceFactory::get('TFA/Validate');
        $this->assertContainsOnlyInstancesOf('Fortytwo\SDK\Core\Services\TFA\ValidateService', array($instance));

        $this->assertEquals('https', $instance->getScheme());
        $this->assertEquals('rest.fortytwo.com', $instance->getDomain());
        $this->assertEquals('1', $instance->getPrefix());
        $this->assertEquals('2fa', $instance->getRessource());
        $this->assertEquals('POST', $instance->getMethod());
        $this->assertEquals('https://rest.fortytwo.com/1/2fa', $instance->getEndPoint());
    }
    /**
     * @expectedException Exception
     */
    public function testInstanceInvalid()
    {
        $instance = ServiceFactory::get('plop');
        $this->assertContainsOnlyInstancesOf('Fortytwo\SDK\Core\Services\TFA\ValidateService', array($instance));

        $this->assertEquals('https', $instance->getScheme());
        $this->assertEquals('rest.fortytwo.com', $instance->getDomain());
        $this->assertEquals('1', $instance->getPrefix());
        $this->assertEquals('im', $instance->getRessource());
        $this->assertEquals('POST', $instance->getMethod());
        $this->assertEquals('https://rest.fortytwo.com/1/im', $instance->getEndPoint());
    }
}
