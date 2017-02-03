<?php
// Using the Mock Builder API can be used to configure the generated test double class

require 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('SomeClass')
                     ->disableOriginalConstructor()
                     ->getMock();

        // Configure the stub.
        $stub->expects($this->any())
             ->method('doSomething')
             ->will($this->returnValue('foo'));

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }
}