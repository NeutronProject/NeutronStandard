<?php
/*
 * This file is part of NeutronSocialNetworksBundle
 *
 * (c) Zender <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace AppBundle\EventListener;

use AppBundle\DataGrid\SliderManagementDataGrid;

use AppBundle\Model\SliderManagerInterface;

use Neutron\Bundle\DataGridBundle\Event\RowPositionChangeEvent;

/**
 *  DataGridPositionChangeListener
 *
 * @author Nikolay Georgiev <azazen09@gmail.com>
 * @since 1.0
 */
class SliderDataGridRowPositionChangeListener
{
    
    protected $manager;
    
    public function __construct(SliderManagerInterface $manager)
    {
        $this->manager = $manager;
    }
    
    /**
     * This method is trigged when onRowSort event is dispatched
     * 
     * @param RowSortEvent $event
     * @return void
     */
    public function onRowPositionChange(RowPositionChangeEvent $event)
    {   
        if ($event->getDataGridName() !== SliderManagementDataGrid::IDENTIFIER){
            return;
        }

        $this->changePosition($event->getRowId(), $event->getRowPosition());
    }
    
    protected function changePosition($id, $position)
    {
        $entity = $this->manager->findOneBy(array('id' => $id));
        $entity->setPosition($position);
        $this->manager->getObjectManager()->flush();
    }

}
