<?php 
namespace AppBundle\EventListener;

use Neutron\Plugin\CustomerServicesBundle\CustomerServicesPlugin;

use Symfony\Component\Translation\TranslatorInterface;

use Neutron\MvcBundle\Event\ConfigurePluginEvent;

class CustomerServicesPluginListener
{
    protected $translator; 
    
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
    
    public function onPluginConfigure(ConfigurePluginEvent $event)
    {     
        $plugin = $event->getPlugin();
        
        if ($plugin->getName() !== CustomerServicesPlugin::IDENTIFIER){
            return;
        }
        
        $plugin
            ->addPanel($event->getFactory()->createPanel(
                'customer_services_panel_sidebar_right', array(
                    'label' => $this->translator->trans('panel.sidebar.right.label', array(), 'AppBundle'),
                    'description' => $this->translator->trans('panel.sidebar.right.description', array(), 'AppBundle')
                )
            ))
        ;
    }

    
}