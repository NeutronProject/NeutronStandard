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
    
    protected function test()
    {
        /* $securityContext = $this->get('security.context');
        
        
        $tree = $this->get('neutron.tree')
            ->get($this->container->getParameter('neutron_admin.category.tree_name'));
        
        $manager = $tree->getManager();
        
        $node = $manager->findNodeBy(array('id' => 71));
        
        var_dump($securityContext->isGranted('UNDELETE', $node)); */
        
        $em = $this->getDoctrine()->getEntityManager();
        $dql = $em->createQuery('SELECT t FROM NeutronAdminBundle:MainTree t');

        $dql->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER, 
            'Neutron\\ComponentBundle\\Doctrine\\ORM\\Query\\TreeWalker\\AclWalker'
        );
        
        $dql->setHint(AclWalker::HINT_ACL_OPTIONS, 
                array('roles' => array('ROLE_BLOCK_USER'), 'mask' => MaskBuilder::MASK_VIEW));
        
         var_dump($dql->getArrayResult());
        
        
        
       die;
        
    }

}
