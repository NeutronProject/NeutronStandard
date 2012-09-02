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
 * @Gedmo\TranslationEntity(class="AppBundle\Entity\Translation\PageImageTranslation")
 * @ORM\Table(name="page_image")
 * @ORM\Entity
 * 
 */
class PageImage extends AbstractImage
{
    /**
     * @var integer 
     *
     * @ORM\Id @ORM\Column(name="id", type="integer")
     * 
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public function getUploadDir()
    {
        return '/media/images/page';
    }
}