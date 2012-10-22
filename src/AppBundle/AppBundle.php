<?php

namespace AppBundle;

use Neutron\ComponentBundle\DependencyInjection\Compiler\ValidationPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new ValidationPass(realpath(__DIR__ . '/Resources/config/validation/')));
    }
}
