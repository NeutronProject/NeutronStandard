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

use Neutron\Bundle\FormBundle\Entity\AbstractImage;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="slider_image")
 * @ORM\Entity
 * 
 */
class SliderImage extends AbstractImage
{    
    public function getUploadDir()
    {
        return '/media/images/slider';
    }
}