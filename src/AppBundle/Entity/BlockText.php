<?php
/*
 * This file is part of AppBundle
*
* (c) Zender <azazen09@gmail.com>
*
* This source file is subject to the MIT license that is bundled
* with this source code in the file LICENSE.
*/
namespace AppBundle\Entity;

use Neutron\Widget\BlockTextBundle\Entity\BlockText as Base;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="widget_block_text")
 * @ORM\Entity(repositoryClass="Neutron\Widget\BlockTextBundle\Entity\Repository\BlockTextRepository")
 * 
 */
class BlockText extends Base
{
    
}