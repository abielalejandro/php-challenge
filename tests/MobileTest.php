<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;
use App\Interfaces\CarrierInterface;
use App\Services\ClaroCarrierService;
class MobileTest extends TestCase
{
        protected function tearDown(): void
        {
            m::close();
        }
	
	/** @test */
	public function it_returns_null_when_name_empty()
	{
            $param ='';

            $service=m::mock('overload:App\Services\ContactService')
                ->shouldReceive('findByName')
                ->once()
                ->with($param)        
                ->andReturn(new \App\Contact(1, "+51999999999", 'Juan'));
        
            $provider = new ClaroCarrierService();

            $mobile = new Mobile($provider);

            $this->assertNull($mobile->makeCallByName($param));
	}

}
