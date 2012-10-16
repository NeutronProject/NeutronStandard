<?php 
namespace AppBundle\EventListener;

use Neutron\Plugin\TeamMemberBundle\TeamMemberPlugin;

use Symfony\Component\Translation\TranslatorInterface;

use Neutron\MvcBundle\Event\ConfigurePluginEvent;

class TeamMemberPluginListener
{
    protected $translator; 
    
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
    
    public function onPluginConfigure(ConfigurePluginEvent $event)
    {     
        $plugin = $event->getPlugin();
        
        if ($plugin->getName() !== TeamMemberPlugin::IDENTIFIER){
            return;
        }
  
    }

    
}