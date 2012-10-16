<?php
namespace AppBundle\Controller\Backend\Plugin\TeamMember;

use AppBundle\Entity\Layout;

use Neutron\Plugin\TeamMemberBundle\Controller\Backend\TeamMemberOverviewController as BaseController;

class TeamMemberOverviewController extends BaseController
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