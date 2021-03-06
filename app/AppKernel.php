<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use DTL\Symfony\HttpCacheTagging\TagManagerInterface;
use DTL\Symfony\HttpCacheTagging\Manager\NullTagManager;

class AppKernel extends Kernel
{
    private $tagManager;

    public function setTagManager(TagManagerInterface $tagManager)
    {
        $this->tagManager = $tagManager;
    }

    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Doctrine\Bundle\PHPCRBundle\DoctrinePHPCRBundle(),
            new Acme\BasicCmsBundle\AcmeBasicCmsBundle(),
            new Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle(),
            new Symfony\Cmf\Bundle\RoutingAutoBundle\CmfRoutingAutoBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\DoctrinePHPCRAdminBundle\SonataDoctrinePHPCRAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Symfony\Cmf\Bundle\CoreBundle\CmfCoreBundle(),
            new Symfony\Cmf\Bundle\MenuBundle\CmfMenuBundle(),
            new DTL\PhpcrTaxonomyBundle\DTLPhpcrTaxonomyBundle(),
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            new DTL\ExpressionCaptchaFormTypeBundle\DTLExpressionCaptchaFormTypeBundle(),
            new Gregwar\CaptchaBundle\GregwarCaptchaBundle(),
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),

            new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
            new Mopa\Bundle\BootstrapBundle\MopaBootstrapBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
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

    protected function buildContainer()
    {
        $container = parent::buildContainer();
        $definition = new Definition('DTL\Symfony\HttpCacheTagging\Manager\TagManager');
        $definition->setFactory(array(
            new Reference('kernel'),
            'getTagManager'
        ));
        $container->setDefinition('tagged_http_cache.tag_manager', $definition);

        return $container;
    }

    public function getTagManager()
    {
        return $this->tagManager ?: new NullTagManager();
    }
}
