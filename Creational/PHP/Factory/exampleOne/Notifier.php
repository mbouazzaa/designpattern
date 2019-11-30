<?php

/**
 * 
 */
class Notifier
{
	

	 Protected $to

public	function __construct(string $to)
	{
      this->to = $to;	
    }
abstract public function validateTo(): bool ;
abstract public function sendNotification() : string;


}