<?php

class Error{

public $Message;
public $Timestamp;


public function __construct($msg,$timeSt)
{
    $this->Message = $msg;
    $this->Timestamp = $timeSt;
}

}