<?php
namespace AppBundle\Form\Type;

use AppBundle\Form\Type\Layout\CalloutBoxType;

use AppBundle\Form\Type\Layout\FooterTextType;

use AppBundle\Form\Type\Layout\StaticWidgetsType;

use AppBundle\Form\Type\Layout\BannerTextType;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\FormBuilderInterface;

use Neutron\Plugin\PageBundle\Form\Type\PageType as BaseType;

class PageType extends BaseType
{
    
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
            
        $builder->add('content', 'app_page_content');
        $builder->add('static_widgets', new StaticWidgetsType());
        $builder->add('banner_text', new BannerTextType());
        $builder->add('footer_text', new FooterTextType());
        $builder->add('callout_box', 'app_layout_callout_box', array('plugin_name' => 'neutron.plugin.page'));
    }
    
    public function getName()
    {
        return 'app_page';
    }
}