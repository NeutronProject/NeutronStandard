<?php 
namespace AppBundle\Form\Type\Page;

use Symfony\Component\Form\FormInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\AbstractType;

use Neutron\Plugin\PageBundle\Form\Type\Page\ContentType as BaseType;

class ContentType extends BaseType
{
    
    public function __construct($pageClass, array $templates)
    {
        parent::__construct($pageClass, $templates);
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $this->allowedRoles = array('ROLE_SUPER_ADMIN', 'ROLE_ADMIN');
        
        parent::buildForm($builder, $options);
        
        $builder
           ->add('headingText', 'text', array(
               'label' => 'form.headingText',
               'translation_domain' => 'NeutronPageBundle'
           ))
           ->add('pageImage', 'neutron_image_upload', array(
               'label' => 'form.image',
               'required' => false,
               'data_class' => 'AppBundle\Entity\PageImage',
               'translation_domain' => 'NeutronPageBundle',
               'configs' => array(
                   'minWidth' => '620',
                   'minHeight' => '161',
                   'extensions' => 'jpeg,jpg',
                   'maxSize' => '2M',
               ),
           ))
        ;
        
    }

    public function getName()
    {
        return 'app_form_type_page_content';
    }
    
}