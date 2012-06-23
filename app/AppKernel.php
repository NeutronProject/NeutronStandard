<?php

use Neutron\Bundle\AsseticBundle\NeutronAsseticBundle;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
        	new NeutronAsseticBundle(),
            new AppBundle\AppBundle(),
            new Neutron\UserBundle\NeutronUserBundle(),
            new Neutron\Bundle\DataGridBundle\NeutronDataGridBundle(),
            new Neutron\Bundle\FormBundle\NeutronFormBundle(),
        	new FOS\UserBundle\FOSUserBundle(),
        	new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
        	new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Neutron\AdminBundle\NeutronAdminBundle(),
            new Avalanche\Bundle\ImagineBundle\AvalancheImagineBundle(),
            new Neutron\ComponentBundle\NeutronComponentBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
