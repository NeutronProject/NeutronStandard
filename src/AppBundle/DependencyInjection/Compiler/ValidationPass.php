<?php
namespace AppBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\Config\Resource\FileResource;

class ValidationPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {  
        if (!$container->hasParameter('validator.mapping.loader.xml_files_loader.mapping_files')) {
            return;
        }

        $files = $container->getParameter('validator.mapping.loader.xml_files_loader.mapping_files');
       
        foreach ($this->getValidationFiles() as $file){
            $files[] = $file;
            $container->addResource(new FileResource($file));
        }
        
        $container->setParameter('validator.mapping.loader.xml_files_loader.mapping_files', $files);
    }
    
    protected function getValidationFiles()
    {
        $iterator = new \DirectoryIterator(realpath(__DIR__ . '/../../Resources/config/validation/'));
        $files = array();
        
        foreach ($iterator as $fileinfo){
            if ($fileinfo->isFile()) {
                $files[] = $fileinfo->getPathname();
            }
        }
        
        return $files;
    }
}
