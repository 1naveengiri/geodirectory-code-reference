<?php

namespace ContainerADXZZ7l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStripIgnoredTagsService extends phpDocumentor_KernelProdContainer
{
    /*
     * Gets the private 'phpDocumentor\Descriptor\Filter\StripIgnoredTags' shared autowired service.
     *
     * @return \phpDocumentor\Descriptor\Filter\StripIgnoredTags
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Descriptor/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Descriptor/Filter/StripIgnoredTags.php';

        return $container->privates['phpDocumentor\\Descriptor\\Filter\\StripIgnoredTags'] = new \phpDocumentor\Descriptor\Filter\StripIgnoredTags(($container->privates['phpDocumentor\\Descriptor\\ProjectDescriptorBuilder'] ?? $container->load('getProjectDescriptorBuilderService')));
    }
}
