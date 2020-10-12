<?php

namespace App;


class Contact
{
        private $id;
	private $phone;
        private $name;
        
	function __construct($id,$phone, $name)
	{
           $this->id = $id; 
           $this->names=$name;
           $this->phone=$phone;
	}
        
        function getId() {
            return $this->id;
        }

        function setId($id): void {
            $this->id = $id;
        }

                function getPhone() {
            return $this->phone;
        }

        function getName() {
            return $this->name;
        }

        function setPhone($phone): void {
            $this->phone = $phone;
        }

        function setName($name): void {
            $this->name = $name;
        }


}