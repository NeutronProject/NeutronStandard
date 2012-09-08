<?php
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
            new JMS\TranslationBundle\JMSTranslationBundle(),
            new JMS\I18nRoutingBundle\JMSI18nRoutingBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Avalanche\Bundle\ImagineBundle\AvalancheImagineBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new AppBundle\AppBundle(),
            new Neutron\Bundle\AsseticBundle\NeutronAsseticBundle(),
            new Neutron\UserBundle\NeutronUserBundle(),
            new Neutron\Bundle\DataGridBundle\NeutronDataGridBundle(),
            new Neutron\Bundle\FormBundle\NeutronFormBundle(),
            new Neutron\AdminBundle\NeutronAdminBundle(),
            new Neutron\TreeBundle\NeutronTreeBundle(),
            new Neutron\ComponentBundle\NeutronComponentBundle(),
            new Neutron\Plugin\PageBundle\NeutronPageBundle(),
            new Neutron\LayoutBundle\NeutronLayoutBundle(),
            //new Neutron\Widget\ContactBundle\NeutronContactBundle(),
            new Neutron\SeoBundle\NeutronSeoBundle(),
            //new Neutron\Widget\PageBlockBundle\NeutronPageBlockBundle(),
            new Neutron\Widget\BlockTextBundle\NeutronBlockTextBundle(),
            new Neutron\Widget\SocialNetworksBundle\NeutronSocialNetworksBundle(),
            //new Neutron\Plugin\CustomerServicesBundle\NeutronCustomerServicesBundle(),
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
