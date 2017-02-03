<?php

class addSubTest extends PHPUnit_Framework_TestCase{
    
    public function testAddNum(){
        $sum = new addition ;
        $this->assertEquals(4, $sum->add(2,2));
    }
    
    public function testSubNum(){
        $diff = new subtraction ;
        $this->assertEquals(0, $diff->sub(2, 2));
    }
}

