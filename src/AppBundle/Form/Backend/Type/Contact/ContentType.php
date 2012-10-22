<?php
/*
 * This file is part of AppBundle
 *
 * (c) Zender <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace AppBundle\Form\Backend\Type\Contact;

use Neutron\Plugin\ContactBundle\Form\Backend\Type\Contact\ContentType as BaseType;

use Symfony\Component\Form\FormView;

use Symfony\Component\Form\FormInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\AbstractType;

/**
 * Short description
 *
 * @author Zender <azazen09@gmail.com>
 * @since 1.0
 */
class ContentType extends BaseType
{
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.AbstractType::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       parent::buildForm($builder, $options);
       
       $builder
           ->add('image', 'neutron_image_upload', array(
               'data_class' => 'AppBundle\Entity\ContactImage',
               'configs' => array(
                   'minWidth' => 650,
                   'minHeight' => 169,
                   'extensions' => 'jpeg,jpg',
                   'maxSize' => '2M',
                   'runtimes' => 'html5,flash'
               ),
           ))
       ;
    }
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.FormTypeInterface::getName()
     */
    public function getName()
    {
        return 'app_backend_contact_content';
    }
}