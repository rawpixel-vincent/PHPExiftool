<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ExposureModeInManual extends AbstractTag
{

    protected $Id = 267;

    protected $Name = 'ExposureModeInManual';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Exposure Mode In Manual';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Specified metering mode',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Evaluative metering',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Partial metering',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Spot metering',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Center-weighted average',
        ),
    );
}
