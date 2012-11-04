<?php
namespace AppBundle\Form\Backend\Handler;

use Neutron\ComponentBundle\Form\Handler\AbstractFormHandler;

class SliderHandler extends AbstractFormHandler
{
    protected function onSuccess()
    {
        $this->container->get('app.slider_manager')->update($this->form->getData(), true);
    }
    
    protected function getRedirectUrl()
    {
        return $this->container->get('router')->generate('app.backend.slider');
    }
}