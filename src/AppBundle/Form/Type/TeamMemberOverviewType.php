<?php
namespace AppBundle\Form\Type;


use Neutron\Plugin\TeamMemberBundle\Form\Type\TeamMemberOverviewType as BaseType;

use AppBundle\Form\Type\Layout\CalloutBoxType;

use AppBundle\Form\Type\Layout\FooterTextType;

use AppBundle\Form\Type\Layout\StaticWidgetsType;

use AppBundle\Form\Type\Layout\BannerTextType;

use Symfony\Component\Form\FormBuilderInterface;


class TeamMemberOverviewType extends BaseType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->add('static_widgets', new StaticWidgetsType());
        $builder->add('banner_text', new BannerTextType());
        $builder->add('footer_text', new FooterTextType());
        //$builder->add('callout_box', 'app_layout_callout_box', array('plugin_name' => 'neutron.plugin.customer_services'));
    }
    
    public function getName()
    {
        return 'app_team_member_overview';
    }
}