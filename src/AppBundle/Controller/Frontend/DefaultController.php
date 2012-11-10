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

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Default controller
 *
 * @author Nikolay Georgiev <nikolay.georgiev@zend.bg>
 * @since 1.0
 */
class DefaultController extends Controller
{
    public function indexAction()
    {  
        $homeManager = $this->container->get('app.home_manager');
        
        $entity = $homeManager->getHomePage();
        
        return $this->render(
            'AppBundle:Frontend\Default:index.html.twig',
            array(
                'entity' => $entity
            )
        );
    }
}
