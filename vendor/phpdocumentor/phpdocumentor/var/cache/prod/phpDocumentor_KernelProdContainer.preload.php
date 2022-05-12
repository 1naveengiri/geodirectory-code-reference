<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 5).'/autoload.php';
require __DIR__.'/ContainerADXZZ7l/phpDocumentor_KernelProdContainer.php';
require __DIR__.'/ContainerADXZZ7l/Filter_6ae6af3.php';
require __DIR__.'/ContainerADXZZ7l/getTactician_Commandbus_DefaultService.php';
require __DIR__.'/ContainerADXZZ7l/getServicesResetterService.php';
require __DIR__.'/ContainerADXZZ7l/getSecrets_VaultService.php';
require __DIR__.'/ContainerADXZZ7l/getRouting_LoaderService.php';
require __DIR__.'/ContainerADXZZ7l/getEnvironmentFactoryService.php';
require __DIR__.'/ContainerADXZZ7l/getRouter2Service.php';
require __DIR__.'/ContainerADXZZ7l/getParseFileHandlerService.php';
require __DIR__.'/ContainerADXZZ7l/getParseDirectoryHandlerService.php';
require __DIR__.'/ContainerADXZZ7l/getRendererService.php';
require __DIR__.'/ContainerADXZZ7l/getRenderHandlerService.php';
require __DIR__.'/ContainerADXZZ7l/getPersistCacheHandlerService.php';
require __DIR__.'/ContainerADXZZ7l/getLoadCacheHandlerService.php';
require __DIR__.'/ContainerADXZZ7l/getMonolog_Logger_CacheService.php';
require __DIR__.'/ContainerADXZZ7l/getMonolog_LoggerService.php';
require __DIR__.'/ContainerADXZZ7l/getErrorControllerService.php';
require __DIR__.'/ContainerADXZZ7l/getContainer_GetenvService.php';
require __DIR__.'/ContainerADXZZ7l/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerADXZZ7l/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerADXZZ7l/getCache_SystemClearerService.php';
require __DIR__.'/ContainerADXZZ7l/getCache_SystemService.php';
require __DIR__.'/ContainerADXZZ7l/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerADXZZ7l/getCache_AppClearerService.php';
require __DIR__.'/ContainerADXZZ7l/getCache_AppService.php';
require __DIR__.'/ContainerADXZZ7l/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerADXZZ7l/getTemplateControllerService.php';
require __DIR__.'/ContainerADXZZ7l/getRedirectControllerService.php';
require __DIR__.'/ContainerADXZZ7l/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerADXZZ7l/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerADXZZ7l/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerADXZZ7l/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'League\Tactician\Bundle\TacticianBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'League\CommonMark\Extension\DisallowedRawHtml\DisallowedRawHtmlExtension';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'phpDocumentor\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'phpDocumentor\Guides\Documents';
$classes[] = 'phpDocumentor\Guides\Handlers\LoadCacheHandler';
$classes[] = 'phpDocumentor\Guides\Handlers\PersistCacheHandler';
$classes[] = 'phpDocumentor\Guides\Handlers\RenderHandler';
$classes[] = 'phpDocumentor\Guides\Metas';
$classes[] = 'phpDocumentor\Guides\References\ClassReference';
$classes[] = 'phpDocumentor\Guides\References\DeciderReference';
$classes[] = 'phpDocumentor\Guides\References\Doc';
$classes[] = 'phpDocumentor\Guides\References\LeaderReference';
$classes[] = 'phpDocumentor\Guides\References\MergerReference';
$classes[] = 'phpDocumentor\Guides\References\MethodReference';
$classes[] = 'phpDocumentor\Guides\References\NamespaceReference';
$classes[] = 'phpDocumentor\Guides\References\PhpClassReference';
$classes[] = 'phpDocumentor\Guides\References\PhpFunctionReference';
$classes[] = 'phpDocumentor\Guides\References\PhpMethodReference';
$classes[] = 'phpDocumentor\Guides\References\TermReference';
$classes[] = 'phpDocumentor\Guides\Renderer';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Directives\CodeBlock';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Directives\Dummy';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Directives\Raw';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Directives\Replace';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Directives\Toctree';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Handlers\ParseDirectoryHandler';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Builder\Scanner';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Builder\ParseQueueProcessor';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Handlers\ParseFileHandler';
$classes[] = 'Doctrine\Common\EventManager';
$classes[] = 'phpDocumentor\Guides\RestructuredText\Meta\CachedMetasLoader';
$classes[] = 'phpDocumentor\Transformer\Router\Router';
$classes[] = 'phpDocumentor\Transformer\Router\ClassBasedFqsenUrlGenerator';
$classes[] = 'phpDocumentor\Transformer\Writer\Twig\EnvironmentFactory';
$classes[] = 'phpDocumentor\Transformer\Writer\Twig\LinkRenderer';
$classes[] = 'phpDocumentor\Guides\Twig\TocExtension';
$classes[] = 'League\CommonMark\CommonMarkConverter';
$classes[] = 'phpDocumentor\Transformer\Writer\Twig\CommonMarkFactory';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'League\Tactician\CommandBus';
$classes[] = 'League\Tactician\Handler\CommandHandlerMiddleware';
$classes[] = 'League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor';
$classes[] = 'League\Tactician\Container\ContainerLocator';
$classes[] = 'League\Tactician\Handler\MethodNameInflector\HandleInflector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

Preloader::preload($classes);
