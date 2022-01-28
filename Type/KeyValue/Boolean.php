<?php

namespace ppadevs\SoapCommon\Type\KeyValue;

use ppadevs\SoapBundle\ServiceDefinition\Annotation as Soap;
use ppadevs\SoapCommon\Type\AbstractKeyValue;

class Boolean extends AbstractKeyValue
{
    /**
     * @Soap\ComplexType("boolean")
     */
    protected $value;
}
