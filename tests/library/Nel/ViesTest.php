<?php
namespace Nel;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-11-03 at 17:49:44.
 */
class ViesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Vies
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Vies;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Nel\Vies::getSoapClient
     */
    public function testGetSoapClient(){
        $this->assertInstanceOf('\Zend\Soap\Client',$this->object->getSoapClient());
    }
}
