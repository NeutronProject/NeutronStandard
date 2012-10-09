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

use Neutron\Plugin\TeamMemberBundle\Entity\AbstractTeamMemberReference;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team_member_reference")
 */
class TeamMemberReference extends AbstractTeamMemberReference
{}