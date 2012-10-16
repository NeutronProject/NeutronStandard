<?php 
namespace AppBundle\EventListener;

use Neutron\Plugin\CustomerServiceBundle\CustomerServicePlugin;

use Symfony\Component\Translation\TranslatorInterface;

use Neutron\MvcBundle\Event\ConfigurePluginEvent;

class CustomerServicePluginListener
{
    protected $translator; 
    
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
    
    public function onPluginConfigure(ConfigurePluginEvent $event)
    {     
        $plugin = $event->getPlugin();
        
        if ($plugin->getName() !== CustomerServicePlugin::IDENTIFIER){
            return;
        }
        
        $plugin
            ->addPanel($event->getFactory()->createPanel(
                'customer_service_panel_sidebar_right', array(
                    'label' => $this->translator->trans('panel.sidebar.right.label', array(), 'AppBundle'),
                    'description' => $this->translator->trans('panel.sidebar.right.description', array(), 'AppBundle')
                )
            ))
        ;
    }

    
}