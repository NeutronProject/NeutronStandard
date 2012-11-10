<?php
namespace AppBundle\Form\Type;

use Neutron\Plugin\PageBundle\PagePlugin;

use Neutron\Plugin\PageBundle\Form\Type\PageType as BaseType;

use AppBundle\Form\Type\Layout\CalloutBoxType;

use AppBundle\Form\Type\Layout\FooterTextType;

use AppBundle\Form\Type\Layout\StaticWidgetsType;

use AppBundle\Form\Type\Layout\BannerTextType;

use Symfony\Component\Form\FormBuilderInterface;


class PageType extends BaseType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
            
        $builder->add('content', 'app_page_content');
        $builder->add('layout', 'app_backend_layout');
        
    }
    
    public function getName()
    {
        return 'app_page';
    }
}