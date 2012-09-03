<?php
namespace AppBundle\Controller\Backend\Plugin\Page;

use AppBundle\Entity\Layout;

use Neutron\Plugin\PageBundle\Controller\Backend\PageController;

class AdministrationController extends PageController
{
    protected function getData($id)
    {
        $data = parent::getData($id);
        if (null === $data['content']->getLayout()){
            $data['content']->setlayout(new Layout());
        }
        
        $data['static_widgets'] = $data['content']->getLayout();
        $data['banner_text'] = $data['content']->getLayout();
        $data['footer_text'] = $data['content']->getLayout();
        $data['callout_box'] = $data['content']->getLayout();
        
        return $data;
    }
}