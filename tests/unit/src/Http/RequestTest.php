<?php

namespace Cb\Tests\Unit\RestFramework\Http;

use Cb\RestFramework\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    /** @var Request */
    private $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new Request();
    }
    
    protected function tearDown()
    {
        parent::tearDown();
        unset($this->sut);
    }
    
    public function testGetRequest()
    {
        $_REQUEST = [];
        $request = $this->sut->getRequest();
        $this->assertIsArray($request);
    }

    public function testSetRequest()
    {
        $request = [];
        $this->sut->setRequest($request);
        $this->assertIsArray($this->sut->getRequest());
    }

    public function testGetParams()
    {
        $_GET = [];
        $params = $this->sut->getParams();
        $this->assertIsArray($params);
    }

    public function testSetParams()
    {
        $params = [];
        $this->sut->setRequest($params);
        $this->assertIsArray($this->sut->getParams());
    }
}
