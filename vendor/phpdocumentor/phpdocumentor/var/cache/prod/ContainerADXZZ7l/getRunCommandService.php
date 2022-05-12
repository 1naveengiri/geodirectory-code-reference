<?php

namespace ContainerADXZZ7l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRunCommandService extends phpDocumentor_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.phpDocumentor\Console\Command\Project\RunCommand' shared autowired service.
     *
     * @return \phpDocumentor\Console\Command\Project\RunCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Console/Command/Project/RunCommand.php';
        include_once \dirname(__DIR__, 6).'/league/pipeline/src/StageInterface.php';
        include_once \dirname(__DIR__, 6).'/league/pipeline/src/PipelineInterface.php';
        include_once \dirname(__DIR__, 6).'/league/pipeline/src/Pipeline.php';
        include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Pipeline/PipelineFactory.php';

        return $container->services['console.command.public_alias.phpDocumentor\\Console\\Command\\Project\\RunCommand'] = new \phpDocumentor\Console\Command\Project\RunCommand(($container->privates['phpDocumentor\\Descriptor\\ProjectDescriptorBuilder'] ?? $container->load('getProjectDescriptorBuilderService')), \phpDocumentor\Pipeline\PipelineFactory::create(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['phpdoc.configuration.pipeline'] ?? $container->load('getPhpdoc_Configuration_PipelineService'));
            yield 1 => ($container->privates['phpdoc.cache.pipeline'] ?? $container->load('getPhpdoc_Cache_PipelineService'));
            yield 2 => ($container->privates['phpdoc.parse.pipeline'] ?? $container->load('getPhpdoc_Parse_PipelineService'));
            yield 3 => ($container->privates['phpdoc.transform.pipeline'] ?? $container->load('getPhpdoc_Transform_PipelineService'));
        }, 4)));
    }
}
