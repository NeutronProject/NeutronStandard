<?php
namespace AppBundle\DataGrid;

use Symfony\Component\Routing\RouterInterface;

use Symfony\Component\Translation\TranslatorInterface;

use AppBundle\Model\SliderManagerInterface;

use Neutron\Bundle\DataGridBundle\DataGrid\FactoryInterface;

class SliderManagementDataGrid
{

    const IDENTIFIER = 'app_slider_management';
    
    protected $factory;

    protected $manager;
    
    protected $translator;
    
    protected $router;
    
    protected $translationDomain = 'AppBundle';


    public function __construct (FactoryInterface $factory, TranslatorInterface $translator, 
            RouterInterface $router, SliderManagerInterface $manager)
    {
        $this->factory = $factory;
        $this->translator = $translator;
        $this->router = $router;
        $this->manager = $manager;
    }

    public function build ()
    {
        $dataGrid = $this->factory->createDataGrid(self::IDENTIFIER);
        $dataGrid
            ->setCaption(
                $this->translator->trans('grid.slider_management.title',  array(), $this->translationDomain)
            )
            ->setAutoWidth(true)
            ->setColNames(array(
                $this->translator->trans('grid.slider_management.column.title',  array(), $this->translationDomain),
                $this->translator->trans('grid.slider_management.column.enabled',  array(), $this->translationDomain),
    
            ))
            ->setColModel(array(
                array(
                    'name' => 's.title', 'index' => 's.title', 'width' => 200, 
                    'align' => 'left', 'sortable' => false, 'search' => true,
                ), 
 
                array(
                    'name' => 's.enabled', 'index' => 's.enabled',  'width' => 40, 
                    'align' => 'left',  'sortable' => false, 
                    'formatter' => 'checkbox',  'search' => true, 'stype' => 'select',
                    'searchoptions' => array(
                        'value' => array(
                            1 => $this->translator->trans('grid.enabled', array(), $this->translationDomain), 
                            0 => $this->translator->trans('grid.disabled', array(), $this->translationDomain)
                        )
                    )
                ),
    
            ))
            ->setQueryBuilder($this->manager->getQueryBuilderForDataGrid())
            ->enableSortable(true)
            ->enablePager(true)
            ->enableViewRecords(true)
            ->enableSearchButton(true)
            ->enableAddButton(true)
            ->setAddBtnUri($this->router->generate('app.backend.slider.update', array(), true))
            ->enableEditButton(true)
            ->setEditBtnUri($this->router->generate('app.backend.slider.update', array('id' => '{id}'), true))
            ->enableDeleteButton(true)
            ->setDeleteBtnUri($this->router->generate('app.backend.slider.delete', array('id' => '{id}'), true))
 
        ;

        return $dataGrid;
    }


}