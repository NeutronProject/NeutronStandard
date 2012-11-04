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
 * @ORM\Table(name="slider")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\SliderRepository")
 * 
 */
class Slider 
{
    
    /**
     * @var integer 
     *
     * @ORM\Id @ORM\Column(name="id", type="integer")
     * 
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string 
     *
     * Gedmo\Translatable
     * @ORM\Column(type="string", name="title", length=255, nullable=true, unique=false)
     */
    protected $title;
    
    /**
     * @var string 
     * 
     * Gedmo\Translatable
     * @ORM\Column(type="text", name="content", nullable=true)
     */
    protected $content;
    
    /**
     * @ORM\OneToOne(targetEntity="SliderImage", cascade={"all"}, orphanRemoval=true, fetch="EAGER")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    protected $image;
    
    /**
     * @var string 
     *
     * @ORM\Column(type="string", name="template", length=255, nullable=true, unique=false)
     */
    protected $template;
    
    /**
     * @var string 
     *
     * Gedmo\Translatable
     * @ORM\Column(type="string", name="btn_label", length=255, nullable=true, unique=false)
     */
    protected $btnLabel;
    
    /**
     * @var string 
     *
     * Gedmo\Translatable
     * @ORM\Column(type="string", name="btn_url", length=255, nullable=true, unique=false)
     */
    protected $btnUrl;
    
    /**
     * @var string 
     *
     * @ORM\Column(type="string", name="btn_target", length=255, nullable=true, unique=false)
     */
    protected $btnTarget;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="btn_enabled")
     */
    protected $btnEnabled = false;
    
    /**
     * @var integer
     * 
     * @Gedmo\SortablePosition
     * @ORM\Column(type="integer", name="position", length=10, nullable=false, unique=false)
     */
    protected $position;
    
    /**
     * @Gedmo\SortableGroup
     * @ORM\Column(name="sortable_category", type="string", length=128, nullable=true)
     */
    private $sortableCategory;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enabled")
     */
    protected $enabled = false;
    
	public function getId ()
    {
        return $this->id;
    }

	public function getTitle ()
    {
        return $this->title;
    }

	public function setTitle ($title)
    {
        $this->title = $title;
    }

	public function getContent ()
    {
        return $this->content;
    }

	public function setContent ($content)
    {
        $this->content = $content;
    }

	public function getImage ()
    {
        return $this->image;
    }

	public function setImage (ImageInterface $image)
    {
        $this->image = $image;
    }

	public function getTemplate ()
    {
        return $this->template;
    }

	public function setTemplate ($template)
    {
        $this->template = $template;
    }

	public function getBtnLabel ()
    {
        return $this->btnLabel;
    }

	public function setBtnLabel ($btnLabel)
    {
        $this->btnLabel = $btnLabel;
    }

	public function getBtnUrl ()
    {
        return $this->btnUrl;
    }

	public function setBtnUrl ($btnUrl)
    {
        $this->btnUrl = $btnUrl;
    }

	public function getBtnTarget ()
    {
        return $this->btnTarget;
    }

	public function setBtnTarget ($btnTarget)
    {
        $this->btnTarget = $btnTarget;
    }

	public function getBtnEnabled ()
    {
        return $this->btnEnabled;
    }

	public function setBtnEnabled ($btnEnabled)
    {
        $this->btnEnabled = $btnEnabled;
    }

	public function getPosition ()
    {
        return $this->position;
    }

	public function setPosition ($position)
    {
        $this->position = $position;
    }
    
    public function setSortableCategory($sortableCategory)
    {
        $this->sortableCategory = $sortableCategory;
    }
    
    public function getSortableCategory()
    {
        return $this->sortableCategory;
    }

	public function getEnabled ()
    {
        return $this->enabled;
    }

	public function setEnabled ($enabled)
    {
        $this->enabled = $enabled;
    }

    
}