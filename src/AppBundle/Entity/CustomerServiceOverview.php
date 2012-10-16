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

use Neutron\Plugin\CustomerServiceBundle\Entity\AbstractCustomerServiceOverview as BaseEntity;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="customer_service_overview")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\CustomerServiceOverviewRepository")
 * 
 */
class CustomerServiceOverview extends BaseEntity
{
    
    /**
     * @ORM\OneToOne(targetEntity="Layout", cascade={"persist", "remove", "merge"}, orphanRemoval=true)
     */
    protected $layout;
    
    public function setLayout(Layout $layout)
    {
        $this->layout = $layout;
    }
    
    public function getLayout()
    {
        return $this->layout;
    }
}