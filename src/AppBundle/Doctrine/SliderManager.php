<?php
namespace AppBundle\Doctrine;

use AppBundle\Model\SliderManagerInterface;

use Neutron\ComponentBundle\Doctrine\AbstractManager;

class SliderManager extends AbstractManager implements SliderManagerInterface
{
    public function getQueryBuilderForDataGrid()
    {
        return $this->repository->getQueryBuilderForDataGrid();
    }
    
    public function getSliders()
    {
        return $this->findBy(array('enabled' => true), array('position' => 'ASC'));
    }
}