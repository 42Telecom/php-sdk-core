<?php
namespace Fortytwo\SDK\Test;

class CoreTest extends \PHPUnit_Framework_TestCase
{
    private $validToken = '9899948e-f37e-4b34-95d6-db0f9d2fb943';
    private $invalidToken = 'mySuperInvalidToken';

    public function testCoreValidToken()
    {
        $stub = $this->getMockForAbstractClass('Fortytwo\SDK\Core\Core', array($this->validToken));
    }

    /**
     * @expectedException Exception
     */
    public function testcoreInvalidToken()
    {
        $stub = $this->getMockForAbstractClass('Fortytwo\SDK\Core\Core', array($this->invalidToken));
    }
}
