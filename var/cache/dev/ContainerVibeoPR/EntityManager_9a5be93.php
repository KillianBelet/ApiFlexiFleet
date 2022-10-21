<?php

namespace ContainerVibeoPR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc2f69 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraff9a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2dc39 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getConnection', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getMetadataFactory', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getExpressionBuilder', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'beginTransaction', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getCache', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'transactional', array('func' => $func), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'commit', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->commit();
    }

    public function rollback()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'rollback', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getClassMetadata', array('className' => $className), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'createQuery', array('dql' => $dql), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'createNamedQuery', array('name' => $name), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'createQueryBuilder', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'flush', array('entity' => $entity), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'clear', array('entityName' => $entityName), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->clear($entityName);
    }

    public function close()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'close', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->close();
    }

    public function persist($entity)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'persist', array('entity' => $entity), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'remove', array('entity' => $entity), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'refresh', array('entity' => $entity), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'detach', array('entity' => $entity), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'merge', array('entity' => $entity), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'contains', array('entity' => $entity), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getEventManager', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getConfiguration', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'isOpen', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getUnitOfWork', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getProxyFactory', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'initializeObject', array('obj' => $obj), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'getFilters', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'isFiltersStateClean', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'hasFilters', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return $this->valueHolderc2f69->hasFilters();
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

        $instance->initializeraff9a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc2f69) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc2f69 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc2f69->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, '__get', ['name' => $name], $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        if (isset(self::$publicProperties2dc39[$name])) {
            return $this->valueHolderc2f69->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2f69;

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

        $targetObject = $this->valueHolderc2f69;
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
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2f69;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc2f69;
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
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, '__isset', array('name' => $name), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2f69;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc2f69;
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
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, '__unset', array('name' => $name), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2f69;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc2f69;
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
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, '__clone', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        $this->valueHolderc2f69 = clone $this->valueHolderc2f69;
    }

    public function __sleep()
    {
        $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, '__sleep', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;

        return array('valueHolderc2f69');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraff9a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraff9a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraff9a && ($this->initializeraff9a->__invoke($valueHolderc2f69, $this, 'initializeProxy', array(), $this->initializeraff9a) || 1) && $this->valueHolderc2f69 = $valueHolderc2f69;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc2f69;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc2f69;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
