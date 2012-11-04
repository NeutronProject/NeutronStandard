<?php
/*
 * This file is part of AppBundle
 *
 * (c) Zender <nikolay.georgiev@zend.bg>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace AppBundle\Controller\Frontend;



/**
 * Default controller
 *
 * @author Nikolay Georgiev <nikolay.georgiev@zend.bg>
 * @since 1.0
 */
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\DependencyInjection\ContainerAware;

class SliderController extends ContainerAware
{
    public function indexAction()
    {  
        $manager = $this->container->get('app.slider_manager');
        $slides = $manager->getSliders($this->container->get('request')->getLocale());
        
        $template = $this->container->get('templating')->render(
            'AppBundle:Frontend\Slider:index.html.twig', array(
                'slides' => $slides,
                'translationDomain' => 'AppBundle'
            )
        );
        
        return  new Response($template);
    }
}
