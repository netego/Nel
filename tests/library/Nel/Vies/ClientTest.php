<?php
namespace Nel\Vies;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-11-03 at 17:49:44.
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Client;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers \Nel\Vies\Client::checkVat
     */
    public function testCheckVat()
    {
        $requestData = new CheckVat_RequestData();
        //Google VAT
        $requestData->countryCode = 'IE';
        $requestData->vatNumber = '6388047V';

        $responseData = $this->object->checkVat($requestData);

        $this->assertTrue($responseData->valid);
    }

    /**
     * @covers \Nel\Vies\Client::checkVat
     */
    public function testCheckVatInvalid()
    {
        $requestData = new CheckVat_RequestData();
        //Invalid VAT
        $requestData->countryCode = 'LU';
        $requestData->vatNumber = '214161272';

        $responseData = $this->object->checkVat($requestData);

        $this->assertFalse($responseData->valid);
    }

    /**
     * @covers \Nel\Vies\Client::checkVat
     */
    public function testCheckVatInvalidCountryCode()
    {
        $this->setExpectedException('\Nel\Vies\ApiException','INVALID_INPUT');

        $requestData = new CheckVat_RequestData();
        $requestData->countryCode = 'abcd';

        $this->object->checkVat($requestData);
    }

    /**
     * @covers \Nel\Vies\Client::checkVatApprox
     */
    public function testCheckVatApprox()
    {
        $requestData = new CheckVatApprox_RequestData();
        //eBay VAT
        $requestData->countryCode = 'LU';
        $requestData->vatNumber = '21416127';
        //Google VAT
        $requestData->requesterCountryCode = 'IE';
        $requestData->requesterVatNumber = '6388047V';

        $responseData = $this->object->checkVatApprox($requestData);

        $this->assertTrue($responseData->valid);
        $this->assertRegExp("/\S{16}/",$responseData->requestIdentifier);
    }

    /**
     * @covers \Nel\Vies\Client::checkVatApprox
     */
    public function testCheckVatApproxInvalid()
    {
        $requestData = new CheckVatApprox_RequestData();
        //Invalid VAT
        $requestData->countryCode = 'LU';
        $requestData->vatNumber = '214161272';

        $responseData = $this->object->checkVatApprox($requestData);

        $this->assertFalse($responseData->valid);
    }

    /**
     * @covers \Nel\Vies\Client::checkVatApprox
     */
    public function testCheckVatApproxInvalidCountryCode()
    {
        $this->setExpectedException('\Nel\Vies\ApiException','Invalid_input');

        $requestData = new CheckVatApprox_RequestData();
        $requestData->countryCode = 'abcd';

        $this->object->checkVatApprox($requestData);
    }
}