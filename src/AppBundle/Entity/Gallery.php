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

use Neutron\Plugin\GalleryBundle\Entity\AbstractGallery;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="gallery")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\GalleryRepository")
 * 
 */
class Gallery extends AbstractGallery
{
    /**
     * @ORM\ManyToMany(targetEntity="GalleryImage", cascade={"all"})
     * @ORM\OrderBy({"position" = "ASC"})
     * @ORM\JoinTable(
     *   inverseJoinColumns={@ORM\JoinColumn(unique=true,  onDelete="CASCADE")}
     * )
     */
    protected $images;
    
}