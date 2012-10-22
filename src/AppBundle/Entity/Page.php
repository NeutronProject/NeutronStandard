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

use Neutron\Plugin\PageBundle\Entity\AbstractPage;

use Neutron\Bundle\FormBundle\Model\ImageInterface;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PageRepository")
 * 
 */
class Page extends AbstractPage
{
    
    /**
     * @var string
     *
     * @ORM\Column(type="string", name="heading_text", length=255, nullable=true, unique=false)
     */
    protected $headingText;
    
    /**
     * @ORM\OneToOne(targetEntity="PageImage", cascade={"persist", "remove", "merge"}, orphanRemoval=true)
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    protected $pageImage;
    
    /**
     * @ORM\OneToOne(targetEntity="Layout", cascade={"persist", "remove", "merge"}, orphanRemoval=true, fetch="EAGER")
     */
    protected $layout;
    
    public function setHeadingText($text)
    {
        $this->headingText = (string) $text;
        return $this;
    }
    
    public function getHeadingText()
    {
        return $this->headingText;
    }
    
    public function setPageImage(ImageInterface $image)
    {
        $this->pageImage = $image;
        return $this;
    }
    
    public function getPageImage()
    {
        return $this->pageImage;
    }
    
    public function setLayout(Layout $layout)
    {
        $this->layout = $layout;
    }
    
    public function getLayout()
    {
        return $this->layout;
    }
}