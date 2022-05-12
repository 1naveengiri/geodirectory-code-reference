<?php

namespace ContainerADXZZ7l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouter2Service extends phpDocumentor_KernelProdContainer
{
    /*
     * Gets the private 'phpDocumentor\Transformer\Router\Router' shared autowired service.
     *
     * @return \phpDocumentor\Transformer\Router\Router
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Transformer/Router/Router.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Transformer/Router/ClassBasedFqsenUrlGenerator.php';
        include_once \dirname(__DIR__, 6).'/symfony/string/Slugger/SluggerInterface.php';
        include_once \dirname(__DIR__, 6).'/symfony/contracts/Translation/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/symfony/string/Slugger/AsciiSlugger.php';

        $a = ($container->services['router'] ?? $container->getRouterService());
        $b = ($container->privates['slugger'] ?? ($container->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en')));

        return $container->privates['phpDocumentor\\Transformer\\Router\\Router'] = new \phpDocumentor\Transformer\Router\Router(new \phpDocumentor\Transformer\Router\ClassBasedFqsenUrlGenerator($a, $b), $a, $b);
    }
}
