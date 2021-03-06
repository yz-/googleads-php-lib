<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CallConversionType
{

    /**
     * @var int $conversionTypeId
     */
    protected $conversionTypeId = null;

    /**
     * @param int $conversionTypeId
     */
    public function __construct($conversionTypeId = null)
    {
      $this->conversionTypeId = $conversionTypeId;
    }

    /**
     * @return int
     */
    public function getConversionTypeId()
    {
      return $this->conversionTypeId;
    }

    /**
     * @param int $conversionTypeId
     * @return \Google\AdsApi\AdWords\v201609\cm\CallConversionType
     */
    public function setConversionTypeId($conversionTypeId)
    {
      $this->conversionTypeId = (PHP_INT_SIZE === 4)
          ? floatval($conversionTypeId) : $conversionTypeId;
      return $this;
    }

}
