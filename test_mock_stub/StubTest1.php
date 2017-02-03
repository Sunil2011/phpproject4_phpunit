<?php
// stubbing a method call to return a fixed value

require 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('SomeClass')
                    ->getMock();
       
        # $stub = $this->getMock('SomeClass');
        
        // Configure the stub.
       
       # $stub->method('doSomething')
        #     ->willReturn('foo');
        
         $stub->expects($this->any())
             ->method('doSomething')
             ->will($this->returnValue('foo') );
        

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething() );
    }
}