<?php 

class FileLogger{

public $Path;
public $Severity;

public function __construct($pth, $sev)
{
    $this->Path = $pth;
    $this->Severity = $sev;


}


}


