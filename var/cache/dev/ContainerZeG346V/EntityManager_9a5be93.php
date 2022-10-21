<?php

namespace ContainerZeG346V;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3b22a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer575b6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd9ce7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getConnection', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getMetadataFactory', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getExpressionBuilder', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'beginTransaction', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getCache', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'transactional', array('func' => $func), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'commit', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->commit();
    }

    public function rollback()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'rollback', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getClassMetadata', array('className' => $className), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'createQuery', array('dql' => $dql), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'createNamedQuery', array('name' => $name), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'createQueryBuilder', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'flush', array('entity' => $entity), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'clear', array('entityName' => $entityName), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->clear($entityName);
    }

    public function close()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'close', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->close();
    }

    public function persist($entity)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'persist', array('entity' => $entity), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'remove', array('entity' => $entity), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'refresh', array('entity' => $entity), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'detach', array('entity' => $entity), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'merge', array('entity' => $entity), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'contains', array('entity' => $entity), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getEventManager', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getConfiguration', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'isOpen', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getUnitOfWork', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getProxyFactory', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'initializeObject', array('obj' => $obj), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'getFilters', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'isFiltersStateClean', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'hasFilters', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return $this->valueHolder3b22a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer575b6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3b22a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3b22a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3b22a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, '__get', ['name' => $name], $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        if (isset(self::$publicPropertiesd9ce7[$name])) {
            return $this->valueHolder3b22a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b22a;

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

        $targetObject = $this->valueHolder3b22a;
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
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b22a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3b22a;
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
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, '__isset', array('name' => $name), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b22a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3b22a;
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
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, '__unset', array('name' => $name), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b22a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3b22a;
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
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, '__clone', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        $this->valueHolder3b22a = clone $this->valueHolder3b22a;
    }

    public function __sleep()
    {
        $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, '__sleep', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;

        return array('valueHolder3b22a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer575b6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer575b6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer575b6 && ($this->initializer575b6->__invoke($valueHolder3b22a, $this, 'initializeProxy', array(), $this->initializer575b6) || 1) && $this->valueHolder3b22a = $valueHolder3b22a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3b22a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3b22a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
