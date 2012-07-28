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
        $this->test();
    	return $this->render('AppBundle:Backend\Default:index.html.twig',array());
    }
    
    protected function test()
    {
        $securityContext = $this->get('security.context');
        
        
        $tree = $this->get('neutron.tree')
            ->get($this->container->getParameter('neutron_admin.category.tree_name'));
        
        $manager = $tree->getManager();
        
        $node = $manager->findNodeBy(array('id' => 71));
        
        var_dump($securityContext->isGranted('UNDELETE', $node)); die;
        
     
        
        /* var_dump($this->_getEntitiesIdsMatchingRoleMaskSql(
           'Neutron\AdminBundle\Entity\MainTree', array('ROLE_SUPER_ADMIN'), MaskBuilder::MASK_DELETE)
        ); */
        
        
       die;
        
    }
    

    
    private function _getEntitiesIdsMatchingRoleMaskSql($className, array $roles, $requiredMask)
    {
            $rolesSql = array();
            foreach($roles as $role) {
                $rolesSql[] = 's.identifier = "' . $role . '"';
            }
            $rolesSql =  '(' . implode(' OR ', $rolesSql) . ')';
        
            $sql = "
            SELECT
                oid.object_identifier
            FROM
                acl_entries e
            INNER JOIN
                acl_object_identities oid ON (
                oid.class_id = e.class_id
            )
            INNER JOIN acl_security_identities s ON (
                s.id = e.security_identity_id
            )
            INNER JOIN acl_classes class ON (
                class.id = e.class_id
            )
            WHERE
                
                (e.mask & %d) AND
                $rolesSql AND
                class.class_type = '%s'
           GROUP BY
                oid.object_identifier";
        
        return sprintf(
            $sql,
            $requiredMask,
            $className
        );
        
    }

}
