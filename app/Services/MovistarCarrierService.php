<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;
use App\Interfaces\CarrierInterface;
use App\Contact;
use App\Call;

/**
 * Description of CarrierService
 *
 * @author romerd
 */
class MovistarCarrierService implements CarrierInterface{

    public function dialContact(Contact $contact) {
        print sprintf("'Dialing to %s at %s",$contact->getName(), $contact->getPhone());
    }

    public function makeCall(): Call {
        return new Call();
    }

}
