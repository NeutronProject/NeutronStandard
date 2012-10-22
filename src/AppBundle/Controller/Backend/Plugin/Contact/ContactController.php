<?php
namespace AppBundle\Controller\Backend\Plugin\Contact;

use Neutron\Plugin\ContactBundle\Controller\Backend\ContactController as BaseController;

use AppBundle\Entity\Layout;

class ContactController extends BaseController
{
    protected function getData($id)
    { 
        $data = parent::getData($id); 
        
        if (null === $data['content']->getLayout()){
            $data['content']->setLayout(new Layout());
        }
        
        $layout = $data['content']->getLayout();
        
        $data['static_widgets'] = $layout;
        $data['banner_text'] = $layout;
        $data['footer_text'] = $layout;
        $data['callout_box'] = $layout;
        
        return $data;
    }
}