<?php

namespace ContainerADXZZ7l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_AppService extends phpDocumentor_KernelProdContainer
{
    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
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
        include_once \dirname(__DIR__, 6).'/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 6).'/symfony/cache/Marshaller/DefaultMarshaller.php';

        $container->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('OVykrxUroj', 0, ($container->targetDir.''.'/pools'), ($container->privates['cache.default_marshaller'] ?? ($container->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($container->privates['monolog.logger.cache'] ?? $container->load('getMonolog_Logger_CacheService')));

        return $instance;
    }
}
