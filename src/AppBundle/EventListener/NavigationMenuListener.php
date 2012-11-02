<?php 
namespace AppBundle\EventListener;

use Neutron\MvcBundle\Menu\Navigation;

use Knp\Menu\FactoryInterface;

use Neutron\AdminBundle\Event\ConfigureMenuEvent;

class NavigationMenuListener
{
    
    public function onMenuConfigure(ConfigureMenuEvent $event)
    {
        
        if ($event->getIdentifier() !== Navigation::IDENTIFIER){
            return;
        }
        
        $menu = $event->getMenu();
        $factory = $event->getFactory();
        
        $menuHeader = $menu->getRoot()->addChild('menu.header', array(
            'display' => false,
            'childrenAttributes' => array('class' => 'custom-menu')
        ));
        
        $menuHeader->addChild('menu.home', array(
            'label' => 'Home',
            'route' => 'neutron_page.frontend.page',
            'routeParameters' => array('slug' => 'level-one')
        ));
        
        $menuHeader->addChild('menu.contact', array(
            'label' => 'Contact',
            'uri' => 'contact'
        ));
        
        $menuHeader->addChild('menu.disclaimer', array(
            'label' => 'Disclaimer',
            'uri' => 'disclaimer'
        ));
        
        $menuFooter = $menu->getRoot()->addChild('menu.footer', array(
            'display' => false,
            'childrenAttributes' => array('class' => 'custom-menu footer-nav')
        ));
        
        $menuFooter->addChild('menu.home', array(
            'label' => 'Home',
            'route' => 'neutron_page.frontend.page',
            'routeParameters' => array('slug' => 'level-one')
        ));
        
        $menuFooter->addChild('menu.disclaimer', array(
            'label' => 'Disclaimer',
            'uri' => 'disclaimer'
        ));
        
    }

    
}