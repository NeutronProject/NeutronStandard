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


use Neutron\Plugin\TeamMemberBundle\Entity\AbstractTeamMemberOverview;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="team_member_overview")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\TeamMemberOverviewRepository")
 */
class TeamMemberOverview extends AbstractTeamMemberOverview
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