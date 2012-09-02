<?php
namespace AppBundle\Form\Type;

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
            
        $builder->add('content', 'app_form_type_page_content');
    }
    
    public function getName()
    {
        return 'app_form_page';
    }
}