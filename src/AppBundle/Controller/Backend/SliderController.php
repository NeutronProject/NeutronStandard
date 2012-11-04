<?php
/*
 * This file is part of AppBundle
 *
 * (c) Zender <nikolay.georgiev@zend.bg>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace AppBundle\Controller\Backend;


/**
 * Default controller
 *
 * @author Nikolay Georgiev <nikolay.georgiev@zend.bg>
 * @since 1.0
 */
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\DependencyInjection\ContainerAware;

class SliderController extends ContainerAware
{

    public function indexAction()
    {
        $grid = $this->container->get('neutron.datagrid')->get('app_slider_management');
    
        $template = $this->container->get('templating')->render(
            'AppBundle:Backend\Slider:index.html.twig', array(
                'grid' => $grid,
                'translationDomain' => 'AppBundle'
            )
        );
    
        return  new Response($template);
    }
    
    public function updateAction($id)
    {
        $form = $this->container->get('app.form.backend.slider');
        $handler = $this->container->get('app.form.backend.handler.slider');
        $form->setData($this->getEntity($id));
    
        if (null !== $handler->process()){
            return new Response(json_encode($handler->getResult()));
        }
    
        $template = $this->container->get('templating')->render(
            'AppBundle:Backend\Slider:update.html.twig', array(
                'form' => $form->createView(),
                'translationDomain' => 'AppBundle'
            )
        );
    
        return  new Response($template);
    }
    
    public function deleteAction($id)
    {

        $entity = $this->getEntity($id);
    
        if ($this->container->get('request')->getMethod() == 'POST'){
            $this->container->get('app.slider_manager')->delete($entity, true);
            $redirectUrl = $this->container->get('router')->generate('app.backend.slider');
            return new RedirectResponse($redirectUrl);
        }
    
        $template = $this->container->get('templating')->render(
            'AppBundle:Backend\Slider:delete.html.twig', array(
                'entity' => $entity,
                'translationDomain' => 'AppBundle'
            )
        );
    
        return  new Response($template);
    }
    
    protected function getEntity($id)
    {
        $manager = $this->container->get('app.slider_manager');
        
        if ($id){
            $entity = $manager->findOneBy(array('id' => $id));
        } else {
            $entity = $manager->create();
        }
       
        if (!$entity){
            throw new NotFoundHttpException();
        }
    
        return $entity;
    }
    
}
