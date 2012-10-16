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

use Neutron\Plugin\CustomerServiceBundle\Entity\AbstractCustomerService;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="customer_services")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\CustomerServiceRepository")
 * 
 */
class CustomerService extends AbstractCustomerService
{
    
    /**
     * @ORM\OneToOne(targetEntity="Layout", cascade={"persist", "remove", "merge"}, orphanRemoval=true)
     */
    protected $layout;
    
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CustomerServiceImage", cascade={"all"}, orphanRemoval=true)
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    protected $image;
    
    public function setLayout(Layout $layout)
    {
        $this->layout = $layout;
    }
    
    public function getLayout()
    {
        return $this->layout;
    }
    
    public function setImage(ImageInterface $image)
    {
        $this->image = $image;
    }
    
    public function getImage()
    {
        return $this->image;
    }
}