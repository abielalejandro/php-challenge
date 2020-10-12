<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;
use App\Interfaces\SmsProviderInterface;
/**
 * Description of SmsService
 *
 * @author romerd
 */
class SmsService {
    
    protected $service;
    protected $provider;
    
    public function __construct(SmsProviderInterface $provider,ContactService $service) {
        $this->service = $service;
        $this->provider = $provider;
    }
    
    public function send($phone, $msg): Contact
    {
        if ($this->service->validateNumber($number)) {
            $this->provider->send($phone, $msg);
        }
    }    
}
