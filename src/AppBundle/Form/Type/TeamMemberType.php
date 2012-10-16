<?php
namespace AppBundle\Form\Type;


use Neutron\Plugin\TeamMemberBundle\Form\Type\TeamMemberType as BaseType;

use AppBundle\Form\Type\Layout\CalloutBoxType;

use AppBundle\Form\Type\Layout\FooterTextType;

use AppBundle\Form\Type\Layout\StaticWidgetsType;

use AppBundle\Form\Type\Layout\BannerTextType;

use Symfony\Component\Form\FormBuilderInterface;


class TeamMemberType extends BaseType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->add('content', 'app_team_member_content');
    }
    
    public function getName()
    {
        return 'app_team_member';
    }
}