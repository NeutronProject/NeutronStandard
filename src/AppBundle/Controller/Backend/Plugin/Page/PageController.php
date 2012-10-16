<?php
namespace AppBundle\Controller\Backend\Plugin\Page;

use Neutron\Plugin\PageBundle\Controller\Backend\PageController as BaseController;

use AppBundle\Entity\Layout;

class PageController extends BaseController
{
    protected function getData($id)
    { 
        $data = parent::getData($id); 
        
        if (null === $data['content']->getLayout()){
            $data['content']->setLayout(new Layout());
        }
        
        $data['static_widgets'] = $data['content']->getLayout();
        $data['banner_text'] = $data['content']->getLayout();
        $data['footer_text'] = $data['content']->getLayout();
        $data['callout_box'] = $data['content']->getLayout();
        
        return $data;
    }
}