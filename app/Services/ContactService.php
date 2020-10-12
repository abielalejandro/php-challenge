<?php

namespace App\Services;

use App\Contact;


class ContactService
{
        
        public static function findByName($name): Contact
	{
            
	}

	public static function validateNumber(string $number): bool
	{
            $pattern = '/^\+(?:[0-9] ?){6,14}[0-9]$/';
            return preg_match($pattern, $number);
	}
}