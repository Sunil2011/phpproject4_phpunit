<?php
class DataTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return array(
          'adding zeros' => array(0, 0, 0),
          'zero plus one' => array(0, 1, 1),
          'one plus zero' => array(1, 0, 1),
          'one plus one' => array(1, 1, 3)
        );
    }
}
?>
