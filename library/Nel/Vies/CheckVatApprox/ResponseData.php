<?php
namespace Nel\Vies;

class CheckVatApprox_ResponseData
{
    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $vatNumber;

    /**
     * @var \Datetime
     */
    public $requestDate;

    /**
     * @var bool
     */
    public $valid;

    /**
     * @var string
     */
    public $traderName;

    /**
     * @var string
     */
    public $traderCompanyType;

    /**
     * @var string
     */
    public $traderAddress;

    /**
     * @var string
     */
    public $traderStreet;

    /**
     * @var string
     */
    public $traderPostcode;

    /**
     * @var string
     */
    public $traderCity;

    /**
     * @var string
     */
    public $traderNameMatch;

    /**
     * @var string
     */
    public $traderCompanyTypeMatch;

    /**
     * @var string
     */
    public $traderStreetMatch;

    /**
     * @var string
     */
    public $traderPostcodeMatch;

    /**
     * @var string
     */
    public $traderCityMatch;

    /**
     * @var string
     */
    public $requestIdentifier;
}