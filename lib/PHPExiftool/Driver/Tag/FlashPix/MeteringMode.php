<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MeteringMode extends AbstractTag
{

    protected $Id = 620756999;

    protected $Name = 'MeteringMode';

    protected $FullName = 'FlashPix::ImageInfo';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Metering Mode';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Average',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Center-weighted average',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Spot',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Multi-spot',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Multi-segment',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Partial',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Other',
        ),
    );
}
