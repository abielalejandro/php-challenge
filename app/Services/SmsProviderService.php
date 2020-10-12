<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;
use App\Interfaces\SmsProviderInterface;
/**
 * Description of SmsProviderService
 *
 * @author romerd
 */
class SmsProviderService implements SmsProviderInterface{
    
    public function send($phone, $msg) {
        print sprintf("'Sending SMS to %s with body %s",$phone, $msg);
    }

}
