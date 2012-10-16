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
     * @var string 
     *
     * @ORM\Column(type="string", name="github", length=255, nullable=true, unique=false)
     */
    protected $github;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_github")
     */
    protected $enableGithub = false;
    
    /**
     * @var string 
     *
     * @ORM\Column(type="string", name="twitter", length=255, nullable=true, unique=false)
     */
    protected $twitter;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_twitter")
     */
    protected $enableTwitter = false;
    
    /**
     * @ORM\OneToOne(targetEntity="TeamMemberImage", cascade={"all"}, orphanRemoval=true, fetch="EAGER")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    protected $image;

	public function getGithub ()
    {
        return $this->github;
    }

	public function setGithub ($github)
    {
        $this->github = $github;
    }

	public function getEnableGithub ()
    {
        return $this->enableGithub;
    }

	public function setEnableGithub ($enableGithub)
    {
        $this->enableGithub = $enableGithub;
    }

	public function getTwitter ()
    {
        return $this->twitter;
    }

	public function setTwitter ($twitter)
    {
        $this->twitter = $twitter;
    }

	public function getEnableTwitter ()
    {
        return $this->enableTwitter;
    }

	public function setEnableTwitter ($enableTwitter)
    {
        $this->enableTwitter = $enableTwitter;
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