<?php

require 'mixt.php';
class mixtTest extends PHPUnit_Framework_TestCase{
    
    public function testmixt(){
        
        $m = new mixt;
        $this->assertEquals(9, $m->mix(5, 4));
        echo 'result = '.$m->mix(5, 4);
    }
}
