<?php
namespace Fortytwo\SDK\Test;

use Fortytwo\SDK\Core\Mocks\TfaRequestMock;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

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


    public function testSendRequestNoParam()
    {
        $mock = new MockHandler([
            new Response(
                201,
                [],
                '{
                  "api_job_id": "0c6ccf37-dd15-49ff-a12f-ffad8f2655a6",
                  "result_info": {
                    "status_code": 0,
                    "description": "Success"
                  },
                  "result": {
                    "message_id": "14466445287300014003"
                  }
                }'
            )
        ]);
        $handler = HandlerStack::create($mock);

        $entity = new TfaRequestMock();

        $stub = $this->getMockForAbstractClass('Fortytwo\SDK\Core\Core', array($this->validToken, $handler));

        $stub->request('TFA/Request', array(), $entity);
    }

    public function testSendRequestWithParam()
    {
        $mock = new MockHandler([
            new Response(
                200,
                [],
                '{
                  "api_job_id": "0c6ccf37-dd15-49ff-a12f-ffad8f2655a6",
                  "result_info": {
                    "status_code": 0,
                    "description": "Valid"
                  }
                }'
            )
        ]);
        $handler = HandlerStack::create($mock);

        $stub = $this->getMockForAbstractClass('Fortytwo\SDK\Core\Core', array($this->validToken, $handler));

        $stub->request('TFA/Validate', array('reference1', '123456'));
    }
}
