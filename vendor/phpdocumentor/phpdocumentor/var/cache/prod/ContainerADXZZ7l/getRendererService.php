<?php

namespace ContainerADXZZ7l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRendererService extends phpDocumentor_KernelProdContainer
{
    /*
     * Gets the private 'phpDocumentor\Guides\Renderer' shared autowired service.
     *
     * @return \phpDocumentor\Guides\Renderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Guides/Renderer.php';

        return $container->privates['phpDocumentor\\Guides\\Renderer'] = new \phpDocumentor\Guides\Renderer(($container->privates['phpDocumentor\\Transformer\\Writer\\Twig\\EnvironmentFactory'] ?? $container->load('getEnvironmentFactoryService')));
    }
}
