<?php

class Example
{
    public function __construct($abc) {
        $this->func($abc);
    }
    public function func( $abc)
    {
        echo $abc;
    } 
}

$example = new Example("Hello"); 
?>