<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Interfaces;

/**
 * Description of SmsProvider
 *
 * @author romerd
 */
interface SmsProviderInterface {
    public function send($phone,$msg);
}
