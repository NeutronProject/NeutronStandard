<?php
namespace AppBundle\Form\Frontend\Type;

use Neutron\Bundle\AsseticBundle\Controller\AsseticController;

use Symfony\Component\Form\FormInterface;

use Symfony\Component\Form\FormView;

use Neutron\Plugin\ContactBundle\Form\Frontend\Type\AbstractContactType;

class ContactType extends AbstractContactType
{
    protected $assetic;
    
    public function __construct(AsseticController $assetic)
    {
        $this->assetic = $assetic;
    }
    
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $this->assetic->appendJavascript('jquery/plugins/blockui/jquery.blockUI.js');
        $this->assetic->appendJavascript('bundles/app/js/contact-form.js');
    }
    
    public function getName()
    {
        return 'app_frontend_contact_standard';
    }
}