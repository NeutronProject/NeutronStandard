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
class SliderType extends AbstractType
{
    
    protected $sliderClass;
    
    public function setSliderClass($sliderClass)
    {
        $this->sliderClass = $sliderClass;
    }
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.AbstractType::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add('title', 'text', array(
               'label' => 'form.title',
               'translation_domain' => 'AppBundle'
           ))
           ->add('content', 'neutron_input_limiter', array(
               'label' => 'form.content',
               'translation_domain' => 'AppBundle',
               'configs' => array(
                   'limit' => 500
               )
           ))
           ->add('image', 'neutron_image_upload', array(
               'data_class' => 'AppBundle\Entity\SliderImage',
               'configs' => array(
                   'minWidth' => 445,
                   'minHeight' => 273,
                   'extensions' => 'jpeg,jpg',
                   'maxSize' => '2M',
                   'runtimes' => 'html5,flash'
               ),
           ))
           ->add('template', 'choice', array(
               'choices' => array(
                   'left_alignment' => 'lable.left_alignment', 
                   'right_alignment' => 'lable.right_alignment'
               ),
               'multiple' => false,
               'expanded' => false,
               'attr' => array('class' => 'uniform'),
               'label' => 'form.template',
               'empty_value' => 'form.empty_value',
               'translation_domain' => 'AppBundle'
           ))
           ->add('btnLabel', 'text', array(
               'label' => 'form.btn_label',
               'translation_domain' => 'AppBundle'
           ))
           ->add('btnUrl', 'text', array(
               'label' => 'form.btn_url',
               'translation_domain' => 'AppBundle'
           ))
           ->add('btnTarget', 'choice', array(
               'choices' => array('_blank' => 'label.blank', '_self' => 'label.self'),
               'multiple' => false,
               'expanded' => false,
               'attr' => array('class' => 'uniform'),
               'label' => 'form.btn_target',
               'empty_value' => 'form.empty_value',
               'translation_domain' => 'AppBundle'
           ))
           ->add('btnEnabled', 'checkbox', array(
               'label' => 'form.btn_enabled', 
               'value' => true,
               'required' => false,
               'attr' => array('class' => 'uniform'),
               'translation_domain' => 'AppBundle'
           ))
           ->add('enabled', 'checkbox', array(
               'label' => 'form.enabled', 
               'value' => true,
               'required' => false,
               'attr' => array('class' => 'uniform'),
               'translation_domain' => 'AppBundle'
           ))
       ;
    }
    
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.AbstractType::setDefaultOptions()
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->sliderClass,
            'validation_groups' => function(FormInterface $form){
                $entity = $form->getData();
                $validationGroups = array('default');
                
                if ($entity->getBtnEnabled() === true){
                    $validationGroups[] = 'btn_required';
                }
                
                return $validationGroups;
            },
            'csrf_protection' => false,
            'cascade_validation' => true,
        ));
    }
    
    /**
     * (non-PHPdoc)
     * @see Symfony\Component\Form.FormTypeInterface::getName()
     */
    public function getName()
    {
        return 'app_backend_slider';
    }
}