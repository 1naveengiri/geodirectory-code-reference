<?php

namespace ContainerADXZZ7l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurgeCachesWhenForcedService extends phpDocumentor_KernelProdContainer
{
    /*
     * Gets the private 'phpDocumentor\Pipeline\Stage\Cache\PurgeCachesWhenForced' shared autowired service.
     *
     * @return \phpDocumentor\Pipeline\Stage\Cache\PurgeCachesWhenForced
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Pipeline/Stage/Cache/PurgeCachesWhenForced.php';
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

        return $container->privates['phpDocumentor\\Pipeline\\Stage\\Cache\\PurgeCachesWhenForced'] = new \phpDocumentor\Pipeline\Stage\Cache\PurgeCachesWhenForced(($container->privates['files'] ?? ($container->privates['files'] = new \phpDocumentor\Parser\Cache\FilesystemAdapter('oo20z+oyWz'))), ($container->privates['descriptors'] ?? ($container->privates['descriptors'] = new \phpDocumentor\Parser\Cache\FilesystemAdapter('QXzsgi0OjP'))), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}