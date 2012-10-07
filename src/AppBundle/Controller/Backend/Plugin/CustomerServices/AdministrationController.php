<?php
namespace AppBundle\Controller\Backend\Plugin\CustomerServices;

use AppBundle\Entity\Layout;

use Neutron\Plugin\CustomerServicesBundle\Controller\Backend\AdministrationController as BaseController;

class AdministrationController extends BaseController
{
    
    public function getData($id)
    {
        $data = parent::getData($id);
        
        if (null === $data['content']->getLayout()){
            $data['content']->setLayout(new Layout());
        }
        
        $data['static_widgets'] = $data['content']->getLayout();
        $data['banner_text'] = $data['content']->getLayout();
        $data['footer_text'] = $data['content']->getLayout();
        //$data['callout_box'] = $data['instance']->getLayout();
    
        return $data;
    }
}