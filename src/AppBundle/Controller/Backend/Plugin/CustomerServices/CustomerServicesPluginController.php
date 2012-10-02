<?php
namespace AppBundle\Controller\Backend\Plugin\CustomerServices;

use AppBundle\Entity\Layout;

use Neutron\Plugin\CustomerServicesBundle\Controller\Backend\CustomerServicesPluginController as BaseController;

class CustomerServicesPluginController extends BaseController
{
    
    protected function getData($id)
    {
        $data = parent::getData($id);
        if (null === $data['instance']->getLayout()){
            $data['instance']->setLayout(new Layout());
        }
    
        $data['static_widgets'] = $data['instance']->getLayout();
        $data['banner_text'] = $data['instance']->getLayout();
        $data['footer_text'] = $data['instance']->getLayout();
        $data['callout_box'] = $data['instance']->getLayout();
    
        return $data;
    }
}