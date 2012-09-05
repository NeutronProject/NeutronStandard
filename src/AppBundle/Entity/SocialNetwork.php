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

use Neutron\Widget\SocialNetworksBundle\Entity\SocialNetwork as BaseSocialNetwork;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="social_networks")
 * @ORM\Entity(repositoryClass="Neutron\Widget\SocialNetworksBundle\Entity\Repository\SocialNetworkRepository")
 * 
 */
class SocialNetwork extends BaseSocialNetwork
{}