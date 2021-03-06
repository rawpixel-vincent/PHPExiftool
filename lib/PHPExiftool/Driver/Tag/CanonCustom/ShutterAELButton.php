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
class ShutterAELButton extends AbstractTag
{

    protected $Id = 4;

    protected $Name = 'ShutterAELButton';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Shutter Button/AEL Button';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AF/AE lock stop',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AE lock/AF',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'AF/AF lock, No AE lock',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AE/AF, No AE lock',
        ),
    );
}
