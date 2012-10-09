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

use Neutron\Plugin\TeamMemberBundle\Entity\AbstractTeamMember;

use Neutron\Bundle\FormBundle\Model\ImageInterface;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="team_member")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\TeamMemberRepository")
 * 
 */
class TeamMember extends AbstractTeamMember
{
    
    /**
     * @ORM\OneToOne(targetEntity="TeamMemberImage", cascade={"persist", "remove", "merge"}, orphanRemoval=true)
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    protected $image;
    
    
    public function setImage(ImageInterface $image)
    {
        $this->image = $image;
    }
    
    public function getImage()
    {
        return $this->image;
    }
}