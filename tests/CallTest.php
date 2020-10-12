<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tests;
use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Services\ClaroCarrierService;
use App\Mobile;

/**
 * Description of ContactTest
 *
 * @author romerd
 */
class CallTest extends TestCase{
    
    protected function tearDown(): void
    {
        m::close();
    }
    
    /** @test */
    public function it_returns_true_when_call_valid_contact()
    {
        $param ='Juan';

        $service=m::mock('overload:App\Services\ContactService')
                ->shouldReceive('findByName')
                ->once()
                ->with($param)        
                ->andReturn(new \App\Contact(1, "+51999999999", 'Juan'));
        
        $provider = new ClaroCarrierService();

        $mobile = new Mobile($provider);
        $this->assertTrue($mobile->makeCallByName('Juan') instanceof \App\Call);
    }    
}
