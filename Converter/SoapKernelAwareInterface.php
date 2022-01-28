<?php

/*
 * This file is part of the BeSimpleSoapCommon.
 *
 * (c) Christian Kerl <christian-kerl@web.de>
 * (c) Francis Besset <francis.besset@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ppadevs\SoapCommon\Converter;

use ppadevs\SoapCommon\SoapKernel;

/**
 * Internal type converter interface.
 *
 * @author Andreas Schamberger <mail@andreass.net>
 */
interface SoapKernelAwareInterface
{
    /**
     * Set SoapKernel instance.
     *
     * @param \ppadevs\SoapCommon\SoapKernel $soapKernel SoapKernel instance
     *
     * @return void
     */
    function setKernel(SoapKernel $soapKernel);
}