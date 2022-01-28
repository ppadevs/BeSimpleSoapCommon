<?php

namespace ppadevs\SoapCommon\Type\KeyValue;

use ppadevs\SoapBundle\ServiceDefinition\Annotation as Soap;
use ppadevs\SoapCommon\Type\AbstractKeyValue;

class Date extends AbstractKeyValue
{
    /**
     * @Soap\ComplexType("date")
     */
    protected $value;
}
