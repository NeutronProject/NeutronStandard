<?php
/*
 * This file is part of AppBundle
 *
 * (c) Zender <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace AppBundle\Entity\Repository;

use Neutron\Plugin\CustomerServicesBundle\Entity\Repository\CustomerServiceRepository as BaseRepository;

use Doctrine\ORM\Query;


class CustomerServiceRepository extends BaseRepository
{
    public function getChoices($locale)
    {
        $qb = $this->createQueryBuilder('s');
        $qb
            ->select('s.id, s.title')
            ->innerJoin('s.category', 'c')
            ->where('c.displayed = ?1 and c.enabled = ?2')
            ->setParameters(array(1 => true, 2 => true))
        ;
        
        $query = $qb->getQuery();
        $query->setHint(
            Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        
        $result = $query->getArrayResult();
        
        $choices = array();
        
        foreach ($result as $record){
            $choices[$record['id']] = $record['title'];
        }
        
        return $choices;
    }
}