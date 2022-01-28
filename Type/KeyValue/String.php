<?php

namespace ppadevs\SoapCommon\Type\KeyValue;

use ppadevs\SoapBundle\ServiceDefinition\Annotation as Soap;
use ppadevs\SoapCommon\Type\AbstractKeyValue;

class String extends AbstractKeyValue
{
    /**
     * @Soap\ComplexType("string")
     */
    protected $value;
}
