<?php
/*
 * This file is part of AppBundle
 *
 * (c) Zender <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace AppBundle\Form\Backend\Type;

use AppBundle\Form\Type\Layout\FooterTextType;

use AppBundle\Form\Type\Layout\BannerTextType;

use AppBundle\Form\Type\Layout\StaticWidgetsType;

use Neutron\Plugin\ContactBundle\Form\Backend\Type\ContactType as BaseType;

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
class ContactType extends BaseType
{
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.AbstractType::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       parent::buildForm($builder, $options);
       
       $builder->add('content', 'app_backend_contact_content');
       $builder->add('static_widgets', new StaticWidgetsType());
       $builder->add('banner_text', new BannerTextType());
       $builder->add('footer_text', new FooterTextType());
    }

    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.FormTypeInterface::getName()
     */
    public function getName()
    {
        return 'app_backend_contact';
    }
}