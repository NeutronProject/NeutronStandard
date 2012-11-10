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

use Neutron\PluginBundle\Provider\WidgetProvider;

use Neutron\PluginBundle\Provider\PluginProvider;

use Neutron\ComponentBundle\Util\Filter\SlugFilter;

use Neutron\ComponentBundle\Doctrine\ORM\Query\TreeWalker\AclWalker;

use Symfony\Component\Security\Core\SecurityContext;

use Symfony\Component\Security\Acl\Permission\MaskBuilder;

use Symfony\Component\Security\Acl\Domain\ObjectIdentity;

use Symfony\Component\Security\Acl\Dbal\MutableAclProvider;

use Symfony\Component\Security\Acl\Model\AclInterface;

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

    	return $this->render('AppBundle:Backend\Default:index.html.twig',array());
    }


}
