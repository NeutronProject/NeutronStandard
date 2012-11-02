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

use Neutron\Plugin\ShowCaseBundle\Entity\AbstractShowCase;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="show_case")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\ShowCaseRepository")
 * 
 */
class ShowCase extends AbstractShowCase
{
  
}