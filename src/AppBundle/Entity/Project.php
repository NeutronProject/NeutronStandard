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

use Neutron\Plugin\ShowCaseBundle\Entity\AbstractProject;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\ProjectRepository")
 * 
 */
class Project extends AbstractProject
{
    
    /**
     * @ORM\OneToOne(targetEntity="ProjectMainImage", cascade={"persist", "remove", "merge"}, orphanRemoval=true, fetch="EAGER")
     */
    protected $mainImage;
    
    /**
     * @ORM\ManyToMany(targetEntity="ProjectMultiImage", cascade={"all"})
     * @ORM\OrderBy({"position" = "ASC"})
     * @ORM\JoinTable(
     *   inverseJoinColumns={@ORM\JoinColumn(unique=true,  onDelete="CASCADE")}
     * )
     */
    protected $images;
}