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

use Neutron\Bundle\FormBundle\Model\ImageInterface;

use Neutron\Plugin\ContactBundle\Entity\AbstractContact;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\ContactRepository")
 * 
 */
class Contact extends AbstractContact
{
    
    /**
     * @ORM\OneToOne(targetEntity="ContactImage", cascade={"persist", "remove", "merge"}, orphanRemoval=true, fetch="EAGER")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    protected $image;
    
    /**
     * @ORM\OneToOne(targetEntity="Layout", cascade={"persist", "remove", "merge"}, orphanRemoval=true, fetch="EAGER")
     */
    protected $layout;
    
    public function setImage(ImageInterface $image = null)
    {
        $this->image = $image;
        return $this;
    }
    
    public function getImage()
    {
        return $this->image;
    }
    
    public function setLayout(Layout $layout)
    {
        $this->layout = $layout;
    }
    
    public function getLayout()
    {
        return $this->layout;
    }
}