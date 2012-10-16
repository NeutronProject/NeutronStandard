<?php
/*
 * This file is part of appBundle
 *
 * (c) Zender <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace AppBundle\Form\EventSubscriber\Layout;

use Neutron\MvcBundle\Provider\PluginProviderInterface;

use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\Form\FormFactoryInterface;

use Doctrine\ORM\EntityManager;

use Symfony\Component\Form\Event\DataEvent;

use Symfony\Component\Form\FormEvents;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Neutron image upload form event subscriber
 *
 * @author Nikolay Georgiev <azazen09@gmail.com>
 * @since 1.0
 */
class CalloutBoxTypeEventSubscriber implements EventSubscriberInterface
{
    protected $pluginProvider;
    
    protected $factory;
    
    protected $em;
    
    protected $session;
    
    protected $defaultLocale;
    
    protected $pluginName;

    public function __construct(PluginProviderInterface $pluginProvider, FormFactoryInterface $factory, EntityManager $em, Session $session, $defaultLocale)
    {
        $this->pluginProvider = $pluginProvider;
        $this->factory = $factory;
        $this->em = $em; 
        $this->session = $session;
        $this->defaultLocale = $defaultLocale;
    }
    
    public function setPluginName($pluginName)
    {
        $this->pluginName = $pluginName;
    }
    
    public function getPlugin()
    {
        return $this->pluginProvider->get($this->pluginName);
    }
    
    /**
     * @param FilterDataEvent $event
     * @return void
     */
    public function preSetData(DataEvent $event)
    {   return;
        $data = $event->getData();
        $form = $event->getForm();
        
        $form->add($this->createReferenceIdType());
    }
    
    protected function createReferenceIdType()
    {
        return $this->factory->createNamed('calloutBoxReferenceId', 'choice', null, array(
            'label' => 'form.calloutBoxReferenceId',
            'choices' => $this->getChoices(),
            'multiple' => false,
            'expanded' => false,
            'attr' => array('class' => 'uniform'),
            'label' => 'form.choose_destination',
            'empty_value' => 'form.empty_value',
            'translation_domain' => 'appBundle'
        ));
    }
    
    protected function getChoices()
    {
        $locale = $this->session->get('backend_language', $this->defaultLocale);
        $repo = $this->getPlugin()->getManager()->getRepository();
        return $repo->getChoices($locale);
    }

    /**
     * Subscription for Form Events
     */
    static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
        );
    }
}