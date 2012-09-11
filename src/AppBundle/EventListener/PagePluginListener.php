<?php 
namespace AppBundle\EventListener;

use Symfony\Component\Translation\TranslatorInterface;

use Neutron\Plugin\PageBundle\PagePlugin;

use Neutron\LayoutBundle\Event\ConfigurePluginEvent;

class PagePluginListener
{
    protected $translator; 
    
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
    
    public function onPluginConfigure(ConfigurePluginEvent $event)
    {     
        $plugin = $event->getPlugin();
        
        if ($plugin->getName() !== PagePlugin::IDENTIFIER){
            return;
        }
        
        $plugin
            ->addPanel($event->getFactory()->createPanel(
                'page_panel_sidebar_right', array(
                    'label' => $this->translator->trans('panel.sidebar.right.label', array(), 'AppBundle'),
                    'description' => $this->translator->trans('panel.sidebar.right.description', array(), 'AppBundle')
                )
            ))
        ;
    }

    
}