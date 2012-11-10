<?php
/*
 * This file is part of NeutronAdminBundle
*
* (c) Zender <azazen09@gmail.com>
*
* This source file is subject to the MIT license that is bundled
* with this source code in the file LICENSE.
*/
namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="layout")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\LayoutRepository")
 * 
 */
class Layout
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
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_search")
     */
    protected $enableSearch = false;
    
    /**
     * @var string 
     *
     * @Gedmo\Translatable
     * @ORM\Column(type="text", name="banner_text", nullable=true)
     */
    protected $bannerText;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_banner_text")
     */
    protected $enableBannerText = false;
    
    /**
     * @var string 
     *  
     * @Gedmo\Translatable
     * @ORM\Column(type="text", name="footer_text", nullable=true)
     */
    protected $footerText;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_footer_text")
     */
    protected $enableFooterText = false;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_mailing_list")
     */
    protected $enableMailingList = false;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_social_list")
     */
    protected $enableSocialList = false;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_callout_box")
     */
    protected $enableCallOutBox = false;
    
    /**
     * @var string 
     *
     * @Gedmo\Translatable
     * @ORM\Column(type="string", name="callout_box_title", length=255, nullable=true, unique=false)
     */
    protected $calloutBoxTitle;
    
    /**
     * @var string 
     *
     * @Gedmo\Translatable
     * @ORM\Column(type="text", name="callout_box_content", nullable=true)
     */
    protected $calloutBoxContent;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(type="boolean", name="enable_callout_box_btn")
     */
    protected $enableCalloutBoxBtn = false;
    
    /**
     * @var string 
     *
     * @Gedmo\Translatable
     * @ORM\Column(type="string", name="callout_box_btn_text", length=255, nullable=true, unique=false)
     */
    protected $calloutBoxBtnText;
    
    /**
     * @var string 
     *
     * @ORM\Column(type="string", name="callout_box_btn_url", length=255, nullable=true, unique=false)
     */
    protected $calloutBoxBtnUrl;
    
	public function getId ()
    {
        return $this->id;
    }
    
	public function getEnableSearch ()
    {
        return $this->enableSearch;
    }

	public function setEnableSearch ($enableSearch)
    {
        $this->enableSearch = $enableSearch;
    }

	public function getBannerText ()
    {
        return $this->bannerText;
    }

	public function setBannerText ($bannerText)
    {
        $this->bannerText = $bannerText;
    }

	public function getEnableBannerText ()
    {
        return $this->enableBannerText;
    }

	public function setEnableBannerText ($enableBannerText)
    {
        $this->enableBannerText = $enableBannerText;
    }

	public function getFooterText ()
    {
        return $this->footerText;
    }

	public function setFooterText ($footerText)
    {
        $this->footerText = $footerText;
    }

	public function getEnableFooterText ()
    {
        return $this->enableFooterText;
    }

	public function setEnableFooterText ($enableFooterText)
    {
        $this->enableFooterText = $enableFooterText;
    }

	public function getEnableMailingList ()
    {
        return $this->enableMailingList;
    }

	public function setEnableMailingList ($enableMailingList)
    {
        $this->enableMailingList = $enableMailingList;
    }

	public function getEnableSocialList ()
    {
        return $this->enableSocialList;
    }

	public function setEnableSocialList ($enableSocialList)
    {
        $this->enableSocialList = $enableSocialList;
    }

	public function getEnableCallOutBox ()
    {
        return $this->enableCallOutBox;
    }

	public function setEnableCallOutBox ($enableCallOutBox)
    {
        $this->enableCallOutBox = $enableCallOutBox;
    }

	public function getCalloutBoxTitle ()
    {
        return $this->calloutBoxTitle;
    }

	public function setCalloutBoxTitle ($calloutBoxTitle)
    {
        $this->calloutBoxTitle = $calloutBoxTitle;
    }

	public function getCalloutBoxContent ()
    {
        return $this->calloutBoxContent;
    }

	public function setCalloutBoxContent ($calloutBoxContent)
    {
        $this->calloutBoxContent = $calloutBoxContent;
    }
    
    public function getEnableCalloutBoxBtn()
    {
        return $this->enableCalloutBoxBtn;
    }
    
    public function setEnableCalloutBoxBtn($enableCalloutBoxBtn)
    {
        $this->enableCalloutBoxBtn = $enableCalloutBoxBtn;
    }

	public function getCalloutBoxBtnText ()
    {
        return $this->calloutBoxBtnText;
    }

	public function setCalloutBoxBtnText ($calloutBoxBtnText)
    {
        $this->calloutBoxBtnText = $calloutBoxBtnText;
    }
    
    public function setCalloutBoxBtnUrl($url)
    {
        $this->calloutBoxBtnUrl = $url;
    }
    
    public function getCalloutBoxBtnUrl()
    {
        return $this->calloutBoxBtnUrl;
    }



}