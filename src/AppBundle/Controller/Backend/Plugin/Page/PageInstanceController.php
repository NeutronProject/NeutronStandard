<?php
namespace AppBundle\Controller\Backend\Plugin\Page;



use Neutron\Plugin\PageBundle\Controller\Backend\PageInstanceController as BaseController;

use AppBundle\Entity\Layout;


class PageInstanceController extends BaseController
{
    protected function getData($id)
    { 
        $data = parent::getData($id); 
        if (null === $data['instance']->getLayout()){
            $data['instance']->setlayout(new Layout());
        }
        
        $data['static_widgets'] = $data['instance']->getLayout();
        $data['banner_text'] = $data['instance']->getLayout();
        $data['footer_text'] = $data['instance']->getLayout();
        $data['callout_box'] = $data['instance']->getLayout();
        
        return $data;
    }
}