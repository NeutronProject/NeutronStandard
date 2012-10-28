<?php
namespace AppBundle\Form\Frontend\Type;

use Neutron\Widget\ContactFormBundle\Form\Frontend\Type\AbstractContactType;

use Symfony\Component\Form\FormInterface;

use Symfony\Component\Form\FormView;


class ContactType extends AbstractContactType
{
    public function getName()
    {
        return 'app_frontend_contact_standard';
    }
}