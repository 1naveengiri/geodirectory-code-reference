<?php

namespace ContainerADXZZ7l;

include_once \dirname(__DIR__, 4).'/src/phpDocumentor/Descriptor/Filter/Filter.php';
class Filter_6ae6af3 extends \phpDocumentor\Descriptor\Filter\Filter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf3cd7 = null;
    private $initializer991ed = null;
    private static $publicProperties5d0cd = [
        
    ];
    public function filter(\phpDocumentor\Descriptor\Filter\Filterable $descriptor) : ?\phpDocumentor\Descriptor\Filter\Filterable
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolderf3cd7, $this, 'filter', array('descriptor' => $descriptor), $this->initializer991ed) || 1) && $this->valueHolderf3cd7 = $valueHolderf3cd7;
        return $this->valueHolderf3cd7->filter($descriptor);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\phpDocumentor\Descriptor\Filter\Filter $instance) {
            unset($instance->pipeline);
        }, $instance, 'phpDocumentor\\Descriptor\\Filter\\Filter')->__invoke($instance);
        $instance->initializer991ed = $initializer;
        return $instance;
    }
    public function __construct(iterable $filters)
    {
        static $reflection;
        if (! $this->valueHolderf3cd7) {
            $reflection = $reflection ?? new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
            $this->valueHolderf3cd7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\phpDocumentor\Descriptor\Filter\Filter $instance) {
            unset($instance->pipeline);
        }, $this, 'phpDocumentor\\Descriptor\\Filter\\Filter')->__invoke($this);
        }
        $this->valueHolderf3cd7->__construct($filters);
    }
    public function & __get($name)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolderf3cd7, $this, '__get', ['name' => $name], $this->initializer991ed) || 1) && $this->valueHolderf3cd7 = $valueHolderf3cd7;
        if (isset(self::$publicProperties5d0cd[$name])) {
            return $this->valueHolderf3cd7->$name;
        }
        $realInstanceReflection = new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3cd7;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf3cd7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolderf3cd7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer991ed) || 1) && $this->valueHolderf3cd7 = $valueHolderf3cd7;
        $realInstanceReflection = new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3cd7;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf3cd7;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolderf3cd7, $this, '__isset', array('name' => $name), $this->initializer991ed) || 1) && $this->valueHolderf3cd7 = $valueHolderf3cd7;
        $realInstanceReflection = new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3cd7;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf3cd7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolderf3cd7, $this, '__unset', array('name' => $name), $this->initializer991ed) || 1) && $this->valueHolderf3cd7 = $valueHolderf3cd7;
        $realInstanceReflection = new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3cd7;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf3cd7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolderf3cd7, $this, '__clone', array(), $this->initializer991ed) || 1) && $this->valueHolderf3cd7 = $valueHolderf3cd7;
        $this->valueHolderf3cd7 = clone $this->valueHolderf3cd7;
    }
    public function __sleep()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolderf3cd7, $this, '__sleep', array(), $this->initializer991ed) || 1) && $this->valueHolderf3cd7 = $valueHolderf3cd7;
        return array('valueHolderf3cd7');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\phpDocumentor\Descriptor\Filter\Filter $instance) {
            unset($instance->pipeline);
        }, $this, 'phpDocumentor\\Descriptor\\Filter\\Filter')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer991ed = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer991ed;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolderf3cd7, $this, 'initializeProxy', array(), $this->initializer991ed) || 1) && $this->valueHolderf3cd7 = $valueHolderf3cd7;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf3cd7;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf3cd7;
    }
}

if (!\class_exists('Filter_6ae6af3', false)) {
    \class_alias(__NAMESPACE__.'\\Filter_6ae6af3', 'Filter_6ae6af3', false);
}
