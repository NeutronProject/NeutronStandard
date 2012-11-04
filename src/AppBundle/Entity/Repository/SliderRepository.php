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

use Gedmo\Translatable\Entity\Repository\TranslationRepository;

class SliderRepository extends TranslationRepository
{
   public function getQueryBuilderForDataGrid()
   {
       $qb = $this->createQueryBuilder('s');
       $qb->select('s.id, s.title, s.enabled');
       $qb->orderBy('s.position', 'ASC');
       
       return $qb;
   }
}