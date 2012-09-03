<?php
/*
 * This file is part of AppBundle
 *
 * (c) Zender <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace AppBundle\Form\Type\Layout;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

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
class CalloutBoxType extends AbstractType
{
    
    protected $subscriber;
    
    public function __construct(EventSubscriberInterface $subscriber)
    {
        $this->subscriber = $subscriber;
    }
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.AbstractType::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->subscriber->setPluginName($options['plugin_name']);
        
        $builder
            ->add('calloutBoxTitle', 'text', array(
                'label' => 'form.calloutBoxTitle',
                'translation_domain' => 'appBundle'
            ))
            ->add('calloutBoxContent', 'textarea', array(
                'label' => 'form.calloutBoxContent',
                'attr' => array(
                        'rows' => 10
                ),
                'translation_domain' => 'appBundle'
            ))
            ->add('calloutBoxBtnText', 'text', array(
                'label' => 'form.calloutBoxBtnText',
                'translation_domain' => 'appBundle'
            ))
            ->add('calloutBoxReferenceName', 'hidden', array('data' => $options['plugin_name']))
            ->add('enableCalloutBoxBtn', 'checkbox', array(
                'label' => 'form.enableCalloutBoxBtn', 
                'value' => 1,
                'required' => false,
                'attr' => array('class' => 'uniform'),
                'translation_domain' => 'appBundle'
            ))
            ->add('enableCalloutBox', 'checkbox', array(
                'label' => 'form.enabled', 
                'value' => 1,
                'required' => false,
                'attr' => array('class' => 'uniform'),
                'translation_domain' => 'appBundle'
            ))
        ;
        
        $builder->addEventSubscriber($this->subscriber);
        
    }
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.AbstractType::setDefaultOptions()
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Layout',
            'validation_groups' => function(FormInterface $form){
                if ($form->getData()->getEnableCalloutBox() === true && 
                        $form->getData()->getEnableCalloutBoxBtn() === false){
                    return array('callout_box', 'callout_box_enabled');
                } elseif ($form->getData()->getEnableCalloutBox() === true && 
                        $form->getData()->getEnableCalloutBoxBtn() === true){
                    return array('callout_box', 'callout_box_enabled', 'callout_box_btn_enabled');
                }
                
                return 'callout_box';
            },
        ));
            
        $resolver->setRequired(array('plugin_name'));
        $resolver->setAllowedTypes(array('plugin_name' => array('string')));
    }
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.FormTypeInterface::getName()
     */
    public function getName()
    {
        return 'app_layout_callout_box';
    }
}