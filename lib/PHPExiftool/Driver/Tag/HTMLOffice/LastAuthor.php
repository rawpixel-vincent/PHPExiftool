<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\HTMLOffice;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class LastAuthor extends AbstractTag
{

    protected $Id = 'LastAuthor';

    protected $Name = 'LastAuthor';

    protected $FullName = 'HTML::Office';

    protected $GroupName = 'HTML-office';

    protected $g0 = 'HTML';

    protected $g1 = 'HTML-office';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Last Author';

    protected $local_g2 = 'Author';
}
