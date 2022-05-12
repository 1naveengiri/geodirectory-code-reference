<?php

namespace ContainerADXZZ7l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigureService extends phpDocumentor_KernelProdContainer
{
    /*
     * Gets the private 'phpDocumentor\Pipeline\Stage\Configure' shared autowired service.
     *
     * @return \phpDocumentor\Pipeline\Stage\Configure
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Pipeline/Stage/Configure.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Configuration/ConfigurationFactory.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Configuration/SymfonyConfigFactory.php';
        include_once \dirname(__DIR__, 6).'/symfony/config/Definition/ConfigurationInterface.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Configuration/Definition/Upgradable.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Configuration/Definition/Version2.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Configuration/Definition/Normalizable.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Configuration/Definition/Version3.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Configuration/Configuration.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Parser/Cache/Locator.php';
        include_once \dirname(__DIR__, 6).'/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 6).'/symfony/contracts/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 6).'/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 6).'/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 6).'/symfony/contracts/Cache/CacheTrait.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Parser/Cache/FilesystemAdapter.php';

        $a = new \phpDocumentor\Configuration\ConfigurationFactory([0 => (($container->services['kernel'] ?? $container->get('kernel'))->getWorkingDir() . "/phpdoc.xml"), 1 => (($container->services['kernel'] ?? $container->get('kernel'))->getWorkingDir() . "/phpdoc.dist.xml"), 2 => (($container->services['kernel'] ?? $container->get('kernel'))->getWorkingDir() . "/phpdoc.xml.dist"), 3 => (($container->services['kernel'] ?? $container->get('kernel'))->getWorkingDir() . "/.phpdoc.xml.dist"), 4 => (($container->services['kernel'] ?? $container->get('kernel'))->getWorkingDir() . "/.phpdoc.xml"), 5 => (($container->services['kernel'] ?? $container->get('kernel'))->getWorkingDir() . "/.phpdoc.dist.xml")], new \phpDocumentor\Configuration\SymfonyConfigFactory([2 => new \phpDocumentor\Configuration\Definition\Version2('default'), 3 => new \phpDocumentor\Configuration\Definition\Version3('default')]));

        return $container->privates['phpDocumentor\\Pipeline\\Stage\\Configure'] = new \phpDocumentor\Pipeline\Stage\Configure($a, $a->fromDefaultLocations(), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')), new \phpDocumentor\Parser\Cache\Locator(($container->privates['files'] ?? ($container->privates['files'] = new \phpDocumentor\Parser\Cache\FilesystemAdapter('oo20z+oyWz'))), ($container->privates['descriptors'] ?? ($container->privates['descriptors'] = new \phpDocumentor\Parser\Cache\FilesystemAdapter('QXzsgi0OjP')))), ($container->privates['phpDocumentor\\Transformer\\Writer\\Twig\\EnvironmentFactory'] ?? $container->load('getEnvironmentFactoryService')));
    }
}
