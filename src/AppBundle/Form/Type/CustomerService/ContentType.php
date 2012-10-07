<?php
namespace AppBundle\Form\Type\CustomerService;

use Symfony\Component\Form\FormBuilderInterface;

use Neutron\Plugin\CustomerServicesBundle\Form\Type\CustomerService\ContentType as BaseType;

class ContentType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder
            ->add('image', 'neutron_image_upload', array(
                'required' => false,
                'data_class' => 'AppBundle\Entity\CustomerServiceImage',
                'configs' => array(
                    'minWidth' => 670,
                    'minHeight' => 321,
                    'extensions' => 'jpeg,jpg',
                    'maxSize' => '2M',
                    'runtimes' => 'html5,flash'
                ),
            ))
        ;
    }
    
    public function getName()
    {
        return 'app_customer_service_content';
    }
}