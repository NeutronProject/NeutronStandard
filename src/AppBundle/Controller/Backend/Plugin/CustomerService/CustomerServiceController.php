<?php
namespace AppBundle\Controller\Backend\Plugin\CustomerService;

use AppBundle\Entity\Layout;

use Neutron\Plugin\CustomerServiceBundle\Controller\Backend\CustomerServiceController as BaseController; 

class CustomerServiceController extends BaseController
{
    
    public function getData($id)
    {
        $data = parent::getData($id);
        
        if (null === $data['content']->getLayout()){
            $data['content']->setLayout(new Layout());
        }
        
        $layout = $data['content']->getLayout();
        
        $data['static_widgets'] = $layout;
        $data['banner_text'] = $layout;
        $data['footer_text'] = $layout;
        //$data['callout_box'] = $data['instance']->getLayout();
    
        return $data;
    }
}